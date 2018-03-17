<?php
/* Smarty version 3.1.30, created on 2017-09-05 02:36:07
  from "D:\wamp\www\php\mymvc\template\admin\mess.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59adf1770ab295_28242073',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '799bbe623a2390836adc44ebfe9eea5c2f3483ab' => 
    array (
      0 => 'D:\\wamp\\www\\php\\mymvc\\template\\admin\\mess.html',
      1 => 1502199035,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59adf1770ab295_28242073 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>系统信息</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
pintuer.css">
    <style type="text/css">
        *{ margin:0px; padding:0px; }
        .error-container{ background:#fff; border:1px solid #0ae;  text-align:center; width:450px; margin:250px auto; font-family:Microsoft Yahei; padding-bottom:30px; border-top-left-radius:5px; border-top-right-radius:5px;  }
        .error-container h1{ font-size:16px; padding:12px 0; background:#0ae; color:#fff; }
        .errorcon{ padding:35px 0; text-align:center; color:#0ae; font-size:18px; }
        .errorcon i{ display:block; margin:12px auto; font-size:30px; }
        .errorcon span{ color:red; }
        h4{ font-size:14px; color:#666; }
        a{ color:#0ae; }
    </style>
</head>
<body class="no-skin">
<div class="error-container">
    <h1> 后台管理系统-信息提示 </h1>
    <div class="errorcon">
        <i class="icon-smile-o"></i><?php echo $_smarty_tpl->tpl_vars['mess']->value;?>

        <span style="display:none;"><i class="icon-frown-o"></i>操作失败!</span>

    </div>
    <h4 class="smaller">页面自动 <a id="href" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
">跳转</a> 等待时间： <b id="wait">1</b></h4>

</div>

</body>
<?php echo '<script'; ?>
 type="text/javascript">
    (function(){
        var wait = document.getElementById('wait');
        var a=document.querySelector("a");
        var interval = setInterval(function(){
            var time = --wait.innerHTML;
            if(time <= 0) {
                if(a.href.indexOf("a=login")==-1){
                    location.href=a.href;
                }else{
                    top.location.href=a.href;
                }
                clearInterval(interval);
            };
        }, 1000);
        a.onclick=function (e) {
            e.preventDefault();
            if(a.href.indexOf("a=login")==-1){
                location.href=a.href;
            }else{
                top.location.href=a.href;
            }
            clearInterval(interval);
        }
    })();
<?php echo '</script'; ?>
>
</html>


<?php }
}
