<?php
/* Smarty version 3.1.30, created on 2017-08-29 17:32:17
  from "D:\wamp\www\php\mymvc\template\index\header.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59a58901518593_38703158',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '864401c83d8c52a2aa7d8d41e6575547abed5d06' => 
    array (
      0 => 'D:\\wamp\\www\\php\\mymvc\\template\\index\\header.html',
      1 => 1503415564,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59a58901518593_38703158 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>十五言-每个人都在创造</title>
</head>
<link rel="icon" href="<?php echo IMG_PATH;?>
index/1.png" type="image/png">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
index/base.css" />
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
index/header.css" />
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
index/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
index/header.js"><?php echo '</script'; ?>
>
<body>
<!--头部-->
<nav>
    <div class="nav">
        <ul>
            <li>
                <div class="hanbao">
                    <span>
                        <?php if (!$_smarty_tpl->tpl_vars['flag']->value) {?>
                        <i class="icon iconfont n">&#xe615;</i>
                        <?php } else { ?>
                        <a href="javascript:;" class="userimg"><img id="userimg" src="<?php echo $_smarty_tpl->tpl_vars['result']->value['imgurl'];?>
" alt=""></a>
                        <?php }?>
                    </span>
                    <div class="daoh">
                        <div class="trigon"></div>
                        <ul>
                            <li><a href="index.php"><i class="icon iconfont1">&#xe60c;</i> 首页</a></li>
                            <?php if (!$_smarty_tpl->tpl_vars['flag']->value) {?>
                            <li><a href="index.php?a=login"><i class="icon iconfont1">&#xe61f;</i> 登录</a></li>
                            <li><a href="index.php?a=signup"><i class="icon iconfont1">&#xe601;</i> 注册</a></li>
                            <?php } else { ?>
                            <li uid2="<?php echo $_smarty_tpl->tpl_vars['result']->value['id'];?>
" id="per"><a href="index.php?a=mine"><i class="icon iconfont1">&#xe621;</i> 个人中心</a></li>
                            <li><a href="index.php?a=logout"><i class="icon iconfont1">&#xe779;</i> 退出</a></li>
                            <?php }?>

                        </ul>
                    </div>
                </div>
            </li>
            <li>
                <div class="search">
                    <form action="" method="post">
                        <input type="text" name="search" id="search" value="<?php if ($_smarty_tpl->tpl_vars['sear']->value) {
echo $_smarty_tpl->tpl_vars['sear']->value;
}?>" placeholder="搜索">
                        <a href="javascript:;" class="sear"><i class="icon icon3">&#xe651;</i></a>
                    </form>
                </div>
            </li>
            <li>
                <a href="javascript:;" flag="<?php echo $_smarty_tpl->tpl_vars['flag']->value;?>
" class="drive"><i class="icon icon4">&#xe617;</i>写文章</a>
            </li>
        </ul>
    </div>
</nav><?php }
}
