<?php
/* Smarty version 3.1.30, created on 2017-09-05 02:59:11
  from "D:\wamp\www\php\mymvc\template\index\sign.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59adf6df39fb06_45621567',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89271a848daf50a693fb5489c4bb36471394b41a' => 
    array (
      0 => 'D:\\wamp\\www\\php\\mymvc\\template\\index\\sign.html',
      1 => 1502609387,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59adf6df39fb06_45621567 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
index/base.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
index/login.css">
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
index/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
index/jquery.validate.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
index/sign.js"><?php echo '</script'; ?>
>
<body>
<div class="limg">
    <a href=""><img src="<?php echo IMG_PATH;?>
index/1.png" alt="" /></a>
</div>
<div class="llog">
    <h4 class="ltop">
        <div class="normal-title">
            <a class="" href="index.php?a=login">登录</a>
            <b>·</b>
            <a class="active">注册</a>
        </div>
    </h4>
    <div class="lcontent">
        <form action="" class="login" method="post" id="formsign">
            <div class="ibox">
                <i class="icont">&#xe714;</i>
                <input type="text" name="user" class="input" placeholder="你的昵称" autocomplete="off" >
            </div>
            <div class="ibox">
                <i class="icont">&#xe648;</i>
                <input type="password" name="pass" id="pass" class="input" placeholder="设置密码">
            </div>
            <div class="ibox">
                <i class="icont">&#xe633;</i>
                <input type="password" name="apass" class="input" placeholder="再次输入密码">
            </div>
            <div class="ibox">
                <i class="icont">&#xe634;</i>
                <input type="text" class="code input" name="regcode" placeholder="输入验证码" autocomplete="off"/>
                <img src="index.php?a=code" alt="" width="100" height="32" class="regcode" style="height:50px;cursor:pointer;" onclick="this.src=this.src+'&'+Math.random()">
                <i class="icont icon1">&#xe622;</i>
            </div>
            <div class="lsub s"><input type="submit"><span>注册</span></div>
        </form>
        <div class="gohome">暂不注册,返回<a href="index.php">首页</a></div>
        <div class="note">注册失败，请重新尝试！</div>
    </div>
</div>
</body>
</html>
<?php }
}
