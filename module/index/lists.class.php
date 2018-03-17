<?php


class lists extends indexmain
{

    function init(){
        $this->data();
        $user=$this->session->get("zhanghu");
        $uid=$this->db->selectone("id","user='{$user}'")['id']?$this->db->selectone("id","user='{$user}'")['id']:0;
        $this->db->db->close();
        $db=new db("category");
        $catid=r("catid");
        $sql="cat_id=$catid";
        $arr=$db->selectone("*",$sql);
        $db->tablename="shows";
        $sql="select user.uname,user.imgurl as uimgurl,shows.* from user,shows where shows.uid=user.id and shows.cid={$catid} order by shows.stime desc limit 0,10";
        $resul=$db->db->query($sql);
        $res=$resul->fetch_all(MYSQLI_ASSOC);
        if(!empty($res)){
            $res=$res;
        }else{
            $res=null;
        }
        $db->tablename="take";
        $take=$db->selectone("*","uid=$uid and cid=$catid");
        if(!empty($take)){
            $take="true";
        }else{
            $take="false";
        }
        $this->smarty->assign("take",$take);
        $this->smarty->assign("arr",$arr);
        $this->smarty->assign("res",$res);
        $this->smarty->display("index/list.html");
    }

    function more(){
        $this->data();
        $this->db->db->close();
        $db=new db("category");
        $arr=$db->selectAll("*");
        $this->smarty->assign("arr",$arr);
        $this->smarty->display("index/subject.html");
    }

    function hot(){
        $posid=r("posid");
        $cid=r('cid');
        $db=new db("shows");
        $sql="select user.uname,user.imgurl as uimgurl,shows.* from user,shows where shows.uid=user.id and shows.cid={$cid} and shows.posid={$posid} order by shows.stime desc limit 0,10";
        $resul=$db->db->query($sql);
        $res=$resul->fetch_all(MYSQLI_ASSOC);
        echo json_encode($res);
    }

    function take(){
        $user=$_SESSION['zhanghu'];
        $uid=$this->db->selectone("id","user='{$user}'")['id'];
        $cid=r('cid');
        $db=new db("take");
        $result=$db->insert(["uid"=>$uid,"cid"=>$cid]);
        if($result>0){
            echo "true";
        }else{
            echo "false";
        }
    }

    function canceltake(){
        $user=$_SESSION['zhanghu'];
        $uid=$this->db->selectone("id","user='{$user}'")['id'];
        $cid=r('cid');
        $db=new db("take");
        $result=$db->del("uid=$uid and cid=$cid");
        if($result>0){
            echo "true";
        }else{
            echo "false";
        }
    }
}