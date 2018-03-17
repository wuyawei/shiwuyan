<?php
/* Smarty version 3.1.30, created on 2017-08-30 14:09:05
  from "D:\wamp\www\php\mymvc\template\index\mineset.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59a6aae1beb129_30447314',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13ec97e2efe20e14b1861f7d5b94c90ea26e217e' => 
    array (
      0 => 'D:\\wamp\\www\\php\\mymvc\\template\\index\\mineset.html',
      1 => 1502671662,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/header.html' => 1,
  ),
),false)) {
function content_59a6aae1beb129_30447314 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="<?php echo CSS_PATH;?>
index/myset.css" />
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
index/mineset.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
upload.class.js"><?php echo '</script'; ?>
>

<div id="keep">保存成功</div>
    <div class="mineset">
        <div class="formdata">
            <a href=""><img id="uimg" src="<?php echo $_smarty_tpl->tpl_vars['result']->value['imgurl'];?>
" alt=""></a>
            <div class="upfile">
                <span>更换头像</span>
                <input type="file" name="file" id="file">
            </div>
        </div>
        <input type="hidden" name="user" id="zh" value="<?php echo $_smarty_tpl->tpl_vars['result']->value['user'];?>
">
        <div class="formdata">
            <label for="#user">昵称</label>
            <input type="text" name="uname" id="user" value="<?php echo $_smarty_tpl->tpl_vars['result']->value['uname'];?>
">
        </div>
        <div class="formdata">
            <label for="#usign">个性签名</label>
            <input type="text" name="usign" id="usign" value="<?php echo $_smarty_tpl->tpl_vars['result']->value['usign'];?>
">
        </div>
        <div class="formdata">
            <label >性别</label>
            <span>男</span><input type="radio" name="sex" <?php if ($_smarty_tpl->tpl_vars['result']->value['sex'] == "男") {?> checked <?php }?> value="男">
            <span>女</span><input type="radio" name="sex" <?php if ($_smarty_tpl->tpl_vars['result']->value['sex'] == "女") {?> checked <?php }?> value="女">
        </div>
        <div class="formdata">
            <label for="#resume">个人简介:</label>
            <textarea name="resume" id="resume" cols="30" placeholder="填写您的个人简介" rows="10"><?php echo $_smarty_tpl->tpl_vars['result']->value['resume'];?>
</textarea>
        </div>

        <div class="sub">保存</div>

    </div>



</body>
</html><?php }
}
