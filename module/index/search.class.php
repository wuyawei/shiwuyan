<?php

class search extends indexmain
{
    function init(){
        $sear=r('sear');
        $this->data($sear);
        $sql="select user.uname,user.imgurl as uimgurl,shows.* from user,shows where shows.uid=user.id and shows.stitle like '%{$sear}%' order by shows.stime desc limit 0,10";
        $resul=$this->db->db->query($sql);
        $res=$resul->fetch_all(MYSQLI_ASSOC);
        $this->smarty->assign("res",$res);
        $this->smarty->display("index/search.html");
    }

    function getuser(){
        $sear=r('sear');
        $sql="select * from user where uname like '%{$sear}%' ";
        $resul=$this->db->db->query($sql);
        $res=$resul->fetch_all(MYSQLI_ASSOC);
        echo json_encode($res);
    }

    function getsub(){
        $sear=r('sear');
        $sql="select * from category where cat_name like '%{$sear}%' ";
        $resul=$this->db->db->query($sql);
        $res=$resul->fetch_all(MYSQLI_ASSOC);
        echo json_encode($res);
    }

}