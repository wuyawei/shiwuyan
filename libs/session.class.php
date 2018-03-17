<?php

class session
{
    function __construct()
    {
        session_start();
    }

//    设置session,可设置单个、关联数组、索引数组'a=m'、['a=m','b=n']、['a'=>'m','b'=>'n']
    function set($val){
        if(is_array($val)){
            foreach ($val as $k=>$value){
                if(strpos($value,"=")){
                    $value=explode("=",$value);
                    $_SESSION[$value[0]]=$value[1];
                }else{
                    $_SESSION[$k]=$value;
                }
            }
        }else{
            $val=explode("=",$val);
            $_SESSION[$val[0]]=$val[1];
        }
    }

    //    删除session,可删除单个、多个'a'、['a','b']，不传删除所有
        function del($k=''){
        if($k==""){
            foreach($_SESSION as $k=>$v){
                unset($_SESSION[$k]);
            }
        }else if(is_array($k)){
            foreach ($k as $val){
                unset($_SESSION[$val]);
            }
        }else{
            unset($_SESSION[$k]);
        }
    }

    //    获取session,可获取单个、多个'a'、['a','b']
    function get($k){
        if(is_array($k)){
            $arr=array();
            foreach ($k as $val){
                $m=isset($_SESSION[$val])?$_SESSION[$val]:null;
                array_push($arr,$m);
            }
            return $arr;
        }else{
            return isset($_SESSION[$k])?$_SESSION[$k]:null;
        }

    }


}

//$session=new session();
//$session->set(["user=zhangsan","pass=123456"]);
//$session->set(["user"=>"zhangsan","pass"=>"123456"]);
//$session->del('user');
//$session->del();
//$session->del(['user','pass']);
//var_dump($session->get(['user','pass'])) ;