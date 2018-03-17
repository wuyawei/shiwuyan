<?php


class index extends adminmain
{
    function init(){
        if($this->logincheck()){
            $this->smarty->assign("user",$this->session->get("user"));
            $this->smarty->display("admin/main.html");
            $this->session->set("comming=yes");
        }
    }

    function login(){
        if($this->session->get("comming")){
            header("location:index.php?m=admin");
        }
        $this->smarty->display("admin/login.html");
    }

    function logininfo(){
        $code=strtolower(r("regcode"));
        $user=r("user");
        $pass=md5(r("pass"));
        $db=$this->db;
        if($code==$this->session->get("code")){
            $result=$db->selectAll();
            foreach ($result as $v){
                if($user==$v['user']){
                    if($pass==$v['pass']){
                        $this->session->set("user=".$user);
                        $this->jump("登录成功","index.php?m=admin&a=init");
                        $db->db->close();
                        exit;
                    }else{
                        $this->jump("登录失败","index.php?m=admin&a=login");
                        $db->db->close();
                        exit;
                    }
                }else{
                    $this->jump("登录失败","index.php?m=admin&a=login");
                    $db->db->close();
                    exit;
                }
            }
        }else{
            $this->jump("验证码不正确","index.php?m=admin&a=login");
        }
    }

    function code(){
        $img=new regcode();
        $img->fontstyle=FONT_PATH."Helvetica.ttf";
        $img->output();
        $this->session->set("code=".$img->resulttext);
    }

    function editpass(){
        $this->smarty->assign("user",$this->session->get("user"));
        $this->smarty->display("admin/editpass.html");
    }
    function editpassinfo(){
        $user=$this->session->get("user");
        $mpass=md5(r('mpass'));
        $newpass=md5(r('newpass'));
        $db=$this->db;
        $result=$db->selectone("pass","user='{$user}'");
        if($mpass==$result['pass']){
            $result=$db->update("pass='{$newpass}'","user='{$user}'");
            if($result>0){
                $this->session->del();
                $db->db->close();
                $this->jump('修改成功,请重新登录','index.php?m=admin&a=login');
            }else{
                $db->db->close();
                $this->jump('修改失败','index.php?m=admin&a=editpass');
            }
        }else{
            $db->db->close();
            $this->jump('原密码不对','index.php?m=admin&a=editpass');
        }
    }
}
