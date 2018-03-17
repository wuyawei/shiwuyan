<?php
/* Smarty version 3.1.30, created on 2017-09-05 08:23:15
  from "D:\wamp\www\php\mymvc\template\index\subject.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59ae42d339f298_10120878',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a973a5dd858fd51b5367f54b37f368fc548ce2dd' => 
    array (
      0 => 'D:\\wamp\\www\\php\\mymvc\\template\\index\\subject.html',
      1 => 1503383309,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/header.html' => 1,
  ),
),false)) {
function content_59ae42d339f298_10120878 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once 'D:\\wamp\\www\\php\\mymvc\\libs\\smarty\\plugins\\modifier.truncate.php';
$_smarty_tpl->_subTemplateRender("file:index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="<?php echo CSS_PATH;?>
index/subject.css" />

    <div class="hot_sub">
        <img src="<?php echo IMG_PATH;?>
index/subjecaa.png" alt="">
    </div>

    <div class="subject_box">
        <div class="show_li">
            <div class="hot_list active">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                <div class="h_con" >
                    <div class="collection-wrap">
                        <a class="cateimg" href="index.php?f=lists&catid=<?php echo $_smarty_tpl->tpl_vars['v']->value['cat_id'];?>
" >
                            <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['imgurl'];?>
" alt="" />
                        </a>
                        <h4><a href="index.php?f=lists&catid=<?php echo $_smarty_tpl->tpl_vars['v']->value['cat_id'];?>
" ><?php echo $_smarty_tpl->tpl_vars['v']->value['cat_name'];?>
</a></h4>
                        <p class="zhai"><?php ob_start();
echo $_smarty_tpl->tpl_vars['v']->value['cat_desc'];
$_prefixVariable1=ob_get_clean();
echo smarty_modifier_truncate($_prefixVariable1,30,"...");?>
</p>
                        <a class="flo">+订阅</a>
                        <hr>
                        <div class="count"><a href="index.php?f=lists&catid=<?php echo $_smarty_tpl->tpl_vars['v']->value['cat_id'];?>
" >19636篇文章</a>·387.2K人订阅</div>
                    </div>
                </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </div>
        </div>
    </div>

</body>
</html><?php }
}
