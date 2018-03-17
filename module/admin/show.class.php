<?php

class show extends adminmain
{
    function __construct()
    {
        parent::__construct();
        $this->db->tablename="shows";
    }

    function init(){
        $cid=r('cid');
        $blog=new blog();
        $db=$this->db;
        $blog->tree(0,-1,$db->db,'category',null,null,$cid);
        $sql1="select * from category where parent_id=1000001";
        $result1=$db->db->query($sql1);
        $this->smarty->assign("cid",$cid);
        $this->smarty->assign("str",$blog->str);
        $this->smarty->assign("result1",$result1);
        $this->smarty->display("admin/guanlicont.html");
    }

    function addshow(){
        $user=$this->session->get("user");
        $db=$this->db;
        $blog=new blog();
        $blog->tree(0,0,$db->db,"category");
        $sql="select * from posit ";
        $result=$db->db->query($sql);
        $row=$result->fetch_all(MYSQLI_ASSOC);
        $sql1="select * from category where parent_id=1000001";
        $result1=$db->db->query($sql1);
        $this->smarty->assign("str",$blog->str);
        $this->smarty->assign("user",$user);
        $this->smarty->assign("result",$row);
        $this->smarty->assign("result1",$result1);
        $this->smarty->display("admin/addshow.html");
    }

    function upload(){
        $file=$_FILES['file'];
        $upload=new upload($file);
        $upload->imgurl=WEB_PATH."upload";
        $upload->up();
    }

    function addcontinfo(){
        $stitle=r('stitle');
        if(!isset($_POST['posit'])){
            $posid=0;
        }else{
            $posid=$_POST['posit'];
        }
        if(!isset($_POST['scont'])){
            $scont="";
        }else{
            $scont=$_POST['scont'];
        }
        $imgurl=$_POST['imgurl'];
        $cid=$_POST['cid'];
        $skey=$_POST['skey'];
        $user=$_POST['user'];
        $authour=$_POST['authour'];
        if(!isset($imgurl)){
            $imgurl="";
        }
        if(!isset($skey)){
            $skey="";
        }
        if(!isset($authour)){
            $authour=$user;
        }
        $result=$this->db->insert(["stitle"=>"{$stitle}","imgurl"=>"{$imgurl}","cid"=>"{$cid}","scont"=>"{$scont}","skey"=>"{$skey}","user"=>"{$user}","authour"=>"{$authour}","posid"=>"{$posid}"]);

        if($result>0){
            $this->db->db->close();
            $this->jump("添加成功,返回继续添加","index.php?m=admin&f=show&a=addshow");
            exit;
        }else{
            $this->db->db->close();
            $this->jump("添加失败,返回重新添加","index.php?m=admin&f=show&a=addshow");
            exit;
        }
    }

    function getlist(){
        $cid=r('cid');
        $result=$this->db->selectone("count(*) as length","cid={$cid}");
        $curr=r('page');
        $pages=new pages($result['length'],$curr);
        $str=$pages->out();
        $limit=$pages->limit;
        $db=$this->db;
        $blog=new blog();
        $blog->show($db->db,$this->db->tablename,$cid,$limit);
        $arr=array("str"=>$str,"text"=>$blog->text);
        echo json_encode($arr);
        $db->db->close();
    }

    function delselect(){
        foreach ($_POST as $val){
            $result=$this->db->del("sid={$val}");
            if($result<0){
                echo "false";
                $this->db->db->close();
                exit;
            }
        }
        echo "true";
        $this->db->db->close();
        exit;
    }

    function editcont(){
        $sid=r('id');
        $db=$this->db;
        $row=$db->selectone("*","sid={$sid}");
        $posid=$row['posid'];
        $blog=new blog();
        $blog->tree(0,0,$db->db,"category",null,$row['cid']);
        $sql1="select * from posit ";
        $result1=$db->db->query($sql1);
        $sqls="select * from category where parent_id=1000001";
        $results=$db->db->query($sqls);
        $this->smarty->assign("sid",$sid);
        $this->smarty->assign("posid",$posid);
        $this->smarty->assign("row",$row);
        $this->smarty->assign("str",$blog->str);
        $this->smarty->assign("result1",$result1);
        $this->smarty->assign("results",$results);
        $this->smarty->display("admin/editcont.html");
    }

    function editcontinfo(){
        $sid=$_POST['sid'];
        if(!isset($_POST['posit'])){
            $posid=0;
        }else{
            $posid=$_POST['posit'];
        }
        $stitle=r('stitle');
        $imgurl=r('imgurl');
        $cid=r('cid');
        $scont=r('scont');
        $skey=r('skey');
        $authour=r('authour');
        if(!isset($imgurl)){
            $imgurl="";
        }
        if(!isset($skey)){
            $skey="";
        }
        $result=$this->db->update("stitle='{$stitle}',imgurl='{$imgurl}',cid={$cid},scont='{$scont}',skey='{$skey}',authour='{$authour}',posid={$posid}","sid={$sid}");
        if($result>0){
            $this->db->db->close();
            $this->jump("修改成功","index.php?m=admin&f=show");
            exit;
        }else{
            $this->db->db->close();
            $this->jump("修改失败","index.php?m=admin&f=show");
            exit;
        }
    }

    function delcont(){
        $id=r("id");
        $result=$this->db->del("sid={$id}");
        if($result>0){
            $this->db->db->close();
            $this->jump("删除成功","index.php?m=admin&f=show");
            exit;
        }else{
            $this->db->db->close();
            $this->jump("删除失败","index.php?m=admin&f=show");
            exit;
        }

    }

}