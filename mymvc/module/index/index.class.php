<?php

class index extends indexmain
{
    function init(){
        $this->data();
        $this->db->db->close();
        $db=new db("shows");
        $sql="select user.uname,user.imgurl as uimgurl,category.cat_name,shows.* from user,shows,category where shows.cid=category.cat_id and shows.uid=user.id order by stime desc limit 0,10";
        $resul=$db->db->query($sql);
        $res=$resul->fetch_all(MYSQLI_ASSOC);
        $this->smarty->assign("res",$res);
        $this->smarty->display("index/index.html");
    }

    function posit(){
        $posid=r("posid");
        $db=new db("category");
        $result=$db->selectAll("*","posid={$posid}");
        echo json_encode($result);
    }

    function code(){
        $img=new regcode();
        $img->fontstyle=FONT_PATH."Helvetica.ttf";
        $img->output();
        $this->session->set("code=".$img->resulttext);
    }

    function codeinfo(){
        $code=strtolower(r('regcode'));
        if($code==$this->session->get("code")){
            echo "true";
        }else{
            echo "false";
        }
    }

    function login(){
        if($this->session->get("zhanghu")){
            header("location:index.php");
        }
        $this->smarty->display("index/login.html");
    }

    function logininfo(){
        $user=r('user');
        $pass=md5(r('pass'));
        $result=$this->db->selectone("*","user='{$user}'");
        if($result){
            if($result['pass']==$pass){
                $this->session->set("zhanghu={$user}");
                echo 1;
            }else{
                echo "false";
            }
        }else{
            echo "false";
        }

    }

    function logout(){
        $this->session->del();
        header("location:index.php");
    }

    function signup(){
        $this->smarty->display("index/sign.html");
    }

    function signcheck(){
        $user=r('user');
        $result=$this->db->selectone("*","user='{$user}'");
        if($result){
            echo "false";
        }else{
            echo "true";
        }
    }

    function signupinfo(){
        $user=r('user');
        $pass=md5(r('pass'));
        $result=$this->db->insert(["user"=>"{$user}","pass"=>"{$pass}"]);
        if($result>0){
            $this->session->set("zhanghu={$user}");
            echo 1;
        }else{
            echo "false";
        }
    }

    function mine(){
        $this->data();
        $this->smarty->display("index/mine.html");
    }

    function mineset(){
        $this->data();
        $this->smarty->display("index/mineset.html");
    }

    function upload(){
        $file=$_FILES['file'];
        $upload=new upload($file);
        $upload->imgurl=WEB_PATH."upload";
        $upload->up();
    }

    function minsetinfo(){
        $uname=r("uname")?r("uname"):"";
        $usign=r("usign")?r("usign"):"";
        $sex=r("sex");
        $resume=r("resume")?r("resume"):"";
        $uimg=r("uimg");
        $user=r("user");
        $result=$this->db->update("uname='{$uname}',usign='{$usign}',imgurl='{$uimg}',sex='{$sex}',resume='{$resume}'","user='{$user}'");
        if($result>0){
            echo 1;
        }else{
            echo "false";
        }
    }
}