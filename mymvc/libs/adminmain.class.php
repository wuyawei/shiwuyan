<?php

class adminmain
{
    public $session;
    public $smarty;
    public $db;
    function __construct()
    {
        $this->session=new session();
        $this->db=new db("admin");
        $this->smarty=new smarty();
        $this->smarty->setCompileDir("compile");
        $this->smarty->setTemplateDir("template");
    }

    function logincheck(){
        $session=$this->session;
        if(!$session->get("user")&&MVC=="yes"){
            $this->jump("未登录，请先登录","index.php?m=admin&f=index&a=login");
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
}