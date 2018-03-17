<?php
/* Smarty version 3.1.30, created on 2017-09-05 02:38:32
  from "D:\wamp\www\php\mymvc\template\admin\position.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59adf208491592_05094383',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f187a81c95652ed2d0b9c24fec8686073b8ef05' => 
    array (
      0 => 'D:\\wamp\\www\\php\\mymvc\\template\\admin\\position.html',
      1 => 1502248958,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59adf208491592_05094383 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>网站信息</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
pintuer.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
admin.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
pintuer.js"><?php echo '</script'; ?>
>
</head>
<body>
<div class="panel admin-panel">
    <table class="table table-hover text-center">
        <tr>
            <th>pos_id</th>
            <th>推荐位</th>
            <th>操作</th>
        </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'r');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['r']->value['posname'];?>
</td>
                <td>
                    <div class='button-group'>
                        <a type='button' class='button border-main' href="index.php?m=admin&f=position&a=editposit&id=<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
"><span class='icon-edit'></span>修改</a>
                        <a class='button border-red' href="index.php?m=admin&f=position&a=delposit&id=<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
"><span class='icon-trash-o'></span>删除</a>
                    </div>
                </td>
            </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


    </table>
</div>
<div class="panel admin-panel margin-top">
    <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>添加推荐位</strong></div>
    <div class="body-content">
        <form method="post" class="form-x" action="index.php?m=admin&f=position&a=addposit">
            <div class="form-group">
                <div class="label">
                    <label>推荐位名称：</label>
                </div>
                <div class="field">
                    <input type="text" class="input w50" name="posname" value="" data-validate="required:请输入标题" />
                    <div class="tips"></div>
                </div>
            </div>

            <div class="form-group">
                <div class="label">
                    <label></label>
                </div>
                <div class="field">
                    <button class="button bg-main icon-check-square-o" type="submit"> 提交</button>
                </div>
            </div>
        </form>
    </div>
</div>

</body></html><?php }
}
