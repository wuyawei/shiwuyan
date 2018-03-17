<?php
/* Smarty version 3.1.30, created on 2017-08-29 17:46:35
  from "D:\wamp\www\php\mymvc\template\index\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59a58c5bafc837_09002244',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2ed9e29a7c26f0be52945072da50be78509bb2d' => 
    array (
      0 => 'D:\\wamp\\www\\php\\mymvc\\template\\index\\login.html',
      1 => 1502604141,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59a58c5bafc837_09002244 (Smarty_Internal_Template $_smarty_tpl) {
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
index/login.js"><?php echo '</script'; ?>
>
	<body>
		<div class="limg">
			<a href=""><img src="<?php echo IMG_PATH;?>
index/1.png" alt="" /></a>
		</div>
		<div class="llog">
			<h4 class="ltop">
				<div class="normal-title">
					<a class="active">登录</a>
					<b>·</b>
					<a class="" href="index.php?a=signup">注册</a>
				</div>
			</h4>
			<div class="lcontent">
				<form action="" class="login" method="post" id="formlogin">
					<div class="ibox">
						<i class="icont">&#xe714;</i>
						<input type="text" name="user" class="input" placeholder="请输入账号" autocomplete="off" >
					</div>
					<div class="ibox">
						<i class="icont">&#xe633;</i>
						<input type="password" name="pass" class="input" placeholder="请输入密码">
					</div>
					<div class="ibox">
						<i class="icont">&#xe634;</i>
						<input type="text" class="code input" id="regcode" name="regcode" placeholder="输入验证码" autocomplete="off"/>
						<img src="index.php?m=index&f=index&a=code" alt="" width="100" height="32" class="regcode" style="height:50px;cursor:pointer;" onclick="this.src=this.src+'&'+Math.random()">
						<i class="icont icon1">&#xe622;</i>
					</div>
					<div class="lsub l"><input type="submit"><span>登录</span></div>
				</form>
				<div class="gohome">暂不登录,返回<a href="index.php">首页</a></div>
				<div class="note">登陆失败，账号或密码错误！</div>
			</div>
		</div>
	</body>
</html>
<?php }
}
