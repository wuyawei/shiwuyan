<?php

class route
{
    public static $m="";
    public static $f="";
    public static $a="";
    function init(){
        $this->getinfo();
    }
    function getinfo()
    {
        self::$m=isset($_REQUEST['m'])&&!empty($_REQUEST['m'])?$_REQUEST['m']:"index";
        self::$f=isset($_REQUEST['f'])&&!empty($_REQUEST['f'])?$_REQUEST['f']:"index";
        self::$a=isset($_REQUEST['a'])&&!empty($_REQUEST['a'])?$_REQUEST['a']:"init";
        $file="module/".self::$m."/".self::$f.".class.php";
        if(is_file($file)){
            include $file;
            if(class_exists(self::$f)){
                $obj=new self::$f();
                if(method_exists($obj,self::$a)){
                    $action=self::$a;
                    $obj->$action();
                }else{
                    echo "方法不存在";
                }
            }else{
                echo "类不存在";
            }
        }else{
            echo "文件不存在";
        }
    }

}