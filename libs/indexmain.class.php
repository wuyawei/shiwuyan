<?php

class indexmain
{
    public $session;
    public $smarty;
    public $db;

    function __construct()
    {
        $this->session=new session();
        $this->db=new db("user");
        $this->smarty=new smarty();
        $this->smarty->setCompileDir("compile");
        $this->smarty->setTemplateDir("template");
    }

    function logincheck(){
        $session=$this->session;
        if(!$session->get("zhanghu")&&MVC=="yes"){
            return false;
        }else{
            return true;
        }
    }

    function jump($mess,$url){
        $this->smarty->assign("mess",$mess);
        $this->smarty->assign("url",$url);
        $this->smarty->display("admin/mess.html");
    }

    function out(){
        $this->session->del();
        $this->jump("退出成功","index.php?m=admin&a=login");
    }

    function data($sear=null){
        $flag=$this->logincheck();
        $user=$this->session->get("zhanghu");
        $result=$this->db->selectone("*","user='{$user}'");
        $this->smarty->assign("flag",$flag);
        $this->smarty->assign("result",$result);
        $this->smarty->assign("sear",$sear);
    }
}