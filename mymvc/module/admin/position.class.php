<?php

class position extends adminmain
{
    function __construct()
    {
        parent::__construct();
        $this->db->tablename="posit";
    }
    function init(){
        $result=$this->db->selectAll();
        $this->smarty->assign("result",$result);
        $this->smarty->display("admin/position.html");
    }

    function addposit(){
        $posname=r('posname');
        $result=$this->db->insert(["posname"=>$posname]);
        if($result>0){
            $this->db->db->close();
            $this->jump("添加成功","index.php?m=admin&f=position");
            exit;
        }else{
            $this->db->db->close();
            $this->jump("添加失败","index.php?m=admin&f=position");
            exit;
        }
    }

    function editposit(){
        $posid=r('id');
        $result=$this->db->selectone("*","id={$posid}");
        $this->smarty->assign("result",$result);
        $this->smarty->display("admin/editposit.html");
    }

    function editpositinfo(){
        $posname=r('posname');
        $posid=r('posid');
        $result=$this->db->update("posname='{$posname}'","id=$posid");
        if($result>0){
            $this->db->db->close();
            $this->jump("修改成功","index.php?m=admin&f=position");
            exit;
        }else{
            $this->db->db->close();
            $this->jump("修改失败","index.php?m=admin&f=position");
            exit;
        }
    }

    function delposit(){
        $posid=r('id');
        $result=$this->db->del("id={$posid}");
        if($result>0){
            $this->db->db->close();
            $this->jump("删除成功","index.php?m=admin&f=position");
            exit;
        }else{
            $this->db->db->close();
            $this->jump("删除失败","index.php?m=admin&f=position");
            exit;
        }
    }


}