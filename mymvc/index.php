<?php
    header("content-type:text/html;charset=utf8");
    define("MVC","yes");
    define("WEB_PATH","http://".$_SERVER["SERVER_NAME"].substr($_SERVER["SCRIPT_NAME"],0,strrpos($_SERVER["SCRIPT_NAME"],"/")+1));
    define('ROOT',__DIR__."\\");
    define("LIBS_PATH",ROOT."libs\\");
    define("JS_PATH",WEB_PATH."static/js/");
    define("IMG_PATH",WEB_PATH."static/img/");
    define("CSS_PATH",WEB_PATH."static/css/");
    define("FONT_PATH",ROOT."static\\font\\");
    define("EDIT_PATH",WEB_PATH."static/edit/");

    include_once LIBS_PATH."adminmain.class.php";
    include_once LIBS_PATH."indexmain.class.php";
    include_once LIBS_PATH."pages.class.php";
    include_once LIBS_PATH."session.class.php";
    include_once LIBS_PATH."regcode.class.php";
    include_once LIBS_PATH."functions.php";
    include_once LIBS_PATH."db.class.php";
    include_once LIBS_PATH."upload.class.php";
    include_once LIBS_PATH."smarty/Smarty.class.php";
    include LIBS_PATH."route.class.php";
    $router=new route();
    $router->init();