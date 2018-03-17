<?php
/* Smarty version 3.1.30, created on 2017-09-05 02:38:37
  from "D:\wamp\www\php\mymvc\template\admin\webset.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59adf20d1e81b4_44250857',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '218104c1b41204a204f876aefbe0092220630fba' => 
    array (
      0 => 'D:\\wamp\\www\\php\\mymvc\\template\\admin\\webset.html',
      1 => 1502268526,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59adf20d1e81b4_44250857 (Smarty_Internal_Template $_smarty_tpl) {
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
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
upload.class.js"><?php echo '</script'; ?>
>
</head>
<body>
<div class="panel admin-panel">
  <div class="panel-head"><strong><span class="icon-pencil-square-o"></span> 网站信息</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="index.php?m=admin&f=webset&a=updatewebset">
      <div class="form-group">
        <div class="label">
          <label>网站标题：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="wtitle" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['wtitle'];?>
" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>网站LOGO：</label>
        </div>
        <div class="field">
          <input type="file" id="url1" name="file" class="input tips" style="width:25%; float:left;" value="" data-toggle="hover" data-place="right" data-image="<?php echo $_smarty_tpl->tpl_vars['row']->value['logo'];?>
"  />
          <input type="button" class="button bg-blue margin-left" id="image1" value="+ 浏览上传" >
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>网站域名：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="wname" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['wname'];?>
" />
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>网站关键字：</label>
        </div>
        <div class="field">
          <textarea class="input" name="wkey" style="height:80px"><?php echo $_smarty_tpl->tpl_vars['row']->value['wkey'];?>
</textarea>
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>网站描述：</label>
        </div>
        <div class="field">
          <textarea class="input" name="wdesc"><?php echo $_smarty_tpl->tpl_vars['row']->value['wdesc'];?>
</textarea>
          <div class="tips"></div>
        </div>
      </div>

      <div class="form-group">
        <div class="label">
          <label>底部信息：</label>
        </div>
        <div class="field">
          <textarea name="wfoot" class="input" style="height:120px;"><?php echo $_smarty_tpl->tpl_vars['row']->value['wfoot'];?>
</textarea>
          <div class="tips"></div>
        </div>
      </div>
      <input type="hidden" name="logo" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['logo'];?>
" id="logo">
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
</body></html>

<?php echo '<script'; ?>
>
  $(function () {
      var file=$("#url1").get(0);
      var sub=$("#image1").get(0);
      var upload=new Upload("index.php?m=admin&f=webset&a=upload",file,sub);
      upload.createimg();
      upload.sub(function (e) {
          $("#url1").attr("data-image",e);
          $("#logo").val(e);
      });
  })
<?php echo '</script'; ?>
><?php }
}
