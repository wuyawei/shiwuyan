<?php

class category extends adminmain
{
    function __construct()
    {
        parent::__construct();
        $this->db->tablename="category";
    }

    function init(){
        $blog=new blog();
        $blog->tree(0,-1,$this->db->db,$this->db->tablename);
        $blog->table(0,-1,$this->db->db,$this->db->tablename);
//        $db=$this->db->db;
//        $sql="SELECT * from category where parent_id=0";
//        $result=$db->query($sql);
//        while($row=$result->fetch_assoc()){
//            $sql1="SELECT * from category where parent_id=".$row['cat_id'];
//            $result1=$db->query($sql1);
//            $arr[]=$row;
//            while($row1=$result1->fetch_assoc()){
//                $arr1[]=$row1;
//                $this->smarty->assign("arr1",$arr1);
//            }
//        }
//        $this->smarty->assign("arr",$arr);
//        $this->smarty->display("admin/mvc.html");
        $db=$this->db;
        $sql="select * from posit ";
        $result=$db->db->query($sql);
        $row=$result->fetch_all(MYSQLI_ASSOC);
        $this->smarty->assign("result",$row);
        $this->smarty->assign("let",$blog->let);
        $this->smarty->assign("str",$blog->str);
        $this->smarty->display("admin/category.html");

    }


    function editcate(){
        $cid=r('id');
        $result=$this->db->selectone("cat_name","cat_id='{$cid}'");
        $blog=new blog();
        $blog->tree(0,-1,$this->db->db,'category',$cid);
        $this->smarty->assign("catname",$result['cat_name']);
        $this->smarty->assign("str",$blog->str);
        $this->smarty->display("admin/editcate.html");
    }
    function delcate(){
        $id=r("id");
        $result=$this->db->selectAll("*","parent_id={$id}");
        $len=count($result);
        if($len>0){
            $this->db->db->close();
            $this->jump("含有子栏目，不能删除","index.php?m=admin&f=category");
            exit;
        }else{
            $result=$this->db->del("cat_id={$id}");
            if($result>0){
                $this->db->db->close();
                $this->jump("删除成功","index.php?m=admin&f=category");
                exit;
            }
        }
    }
    function addcateinfo(){
        $show=r('show');
        if($show=="1"){
            $pid=r('parent_id');
        }else{
            $pid=$show;
        }
        if(isset($_REQUEST['posit'])){
            $posid=r('posit');
        }else{
            $posid=0;
        }
        $catdesc=r('catdesc');
        $cname=r('cname');
        $notice=r('notice');
        $imgurl=r('imgurl');
        $result=$this->db->insert(["parent_id"=>$pid,"cat_name"=>"{$cname}","notice"=>$notice,"imgurl"=>$imgurl,"posid"=>$posid,"cat_desc"=>"{$catdesc}"]);
        if($result>0){
            $this->db->db->close();
            $this->jump("添加成功","index.php?m=admin&f=category");
            exit;
        }else{
            $this->db->db->close();
            $this->jump("添加失败","index.php?m=admin&f=category");
            exit;
        }
    }
}