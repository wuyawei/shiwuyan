<?php
/* Smarty version 3.1.30, created on 2017-09-05 02:36:33
  from "D:\wamp\www\php\mymvc\template\admin\main.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59adf19192ff33_44047541',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5766f1f65626350ddfbf58cfaa706a88ea7ee9d4' => 
    array (
      0 => 'D:\\wamp\\www\\php\\mymvc\\template\\admin\\main.html',
      1 => 1502292194,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59adf19192ff33_44047541 (Smarty_Internal_Template $_smarty_tpl) {
?>


<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>后台管理中心</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
pintuer.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
admin.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.js"><?php echo '</script'; ?>
>
</head>
<body style="background-color:#f2f9fd;">
<div class="header bg-main">
    <div class="logo margin-big-left fadein-top">
        <h1><img src="<?php echo IMG_PATH;?>
y.jpg" class="radius-circle rotate-hover" height="50" alt="" /><?php echo $_smarty_tpl->tpl_vars['user']->value;?>
,欢迎来到后台管理中心</h1>
    </div>
    <div class="head-l"><a class="button button-little bg-green" href="" target="_blank"><span class="icon-home"></span> 前台首页</a> &nbsp;&nbsp;
        &nbsp;&nbsp;<a class="button button-little bg-red" href="index.php?m=admin&a=out"><span class="icon-power-off"></span> 退出登录</a> </div>
</div>
<div class="leftnav">
    <div class="leftnav-title"><strong><span class="icon-list"></span>菜单列表</strong></div>
    <h2><span class="icon-user"></span>基本设置</h2>
    <ul style="display:block">
        <li><a href="index.php?m=admin&a=editpass" target="right"><span class="icon-caret-right"></span>修改密码</a></li>
        <li><a href="index.php?m=admin&f=webset" target="right"><span class="icon-caret-right"></span>网页设置</a></li>
    </ul>
    <h2><span class="icon-pencil-square-o"></span>栏目管理</h2>
    <ul>
        <li><a href="index.php?m=admin&f=category" target="right"><span class="icon-caret-right"></span>分类管理</a></li>
        <li><a href="index.php?m=admin&f=show&a=addshow" target="right"><span class="icon-caret-right"></span>添加内容</a></li>
        <li><a href="index.php?m=admin&f=show&page=0" target="right"><span class="icon-caret-right"></span>内容管理</a></li>
        <li><a href="index.php?m=admin&f=position" target="right"><span class="icon-caret-right"></span>推荐位管理</a></li>
    </ul>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
    $(function(){
        $(".leftnav h2").click(function(){
            $(this).next().slideToggle(200);
            $(this).toggleClass("on");
        });
        $(".leftnav ul li a").click(function(){
            $("#a_leader_txt").text($(this).text());
            $(".leftnav ul li a").removeClass("on");
            $(this).addClass("on");
        })
    });
<?php echo '</script'; ?>
>
<ul class="bread">
    <li><a href="" target="right" class="icon-home"> 首页</a></li>
    <li><a href="##" id="a_leader_txt">网站信息</a></li>
</ul>
<div class="admin">
    <iframe scrolling="auto" rameborder="0" name="right" width="100%" height="100%"></iframe>
</div>

</body>
</html><?php }
}
