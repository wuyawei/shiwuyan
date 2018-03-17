<?php

class webset extends adminmain
{
    function __construct()
    {
        parent::__construct();
        $this->db->tablename="webset";
    }

    function init(){
        $row=$this->db->selectone();
        $this->smarty->assign("row",$row);
        $this->smarty->display("admin/webset.html");
    }

    function updatewebset(){
        $wtitle=r('wtitle');
        $logo=r('logo');
        $wname=r('wname');
        $wkey=r('wkey');
        $wdesc=r('wdesc');
        $wfoot=r('wfoot');
        $result=$this->db->update("wtitle='{$wtitle}',logo='{$logo}',wname='{$wname}',wkey='{$wkey}',wdesc='{$wdesc}',wfoot='{$wfoot}'");
        if($result>0){
            $this->db->db->close();
            $this->jump("修改成功","index.php?m=admin&f=webset");
            exit;
        }else{
            $this->db->db->close();
            $this->jump("修改失败","index.php?m=admin&f=webset");
            exit;
        }

    }

    function upload(){
        $file=$_FILES['file'];
        $upload=new upload($file);
        $upload->up();
    }
}