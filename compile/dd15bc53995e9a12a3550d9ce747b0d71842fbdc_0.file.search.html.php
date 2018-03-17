<?php
/* Smarty version 3.1.30, created on 2017-09-05 02:49:29
  from "D:\wamp\www\php\mymvc\template\index\search.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59adf499686d53_17679010',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd15bc53995e9a12a3550d9ce747b0d71842fbdc' => 
    array (
      0 => 'D:\\wamp\\www\\php\\mymvc\\template\\index\\search.html',
      1 => 1503382432,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/header.html' => 1,
  ),
),false)) {
function content_59adf499686d53_17679010 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once 'D:\\wamp\\www\\php\\mymvc\\libs\\smarty\\plugins\\modifier.truncate.php';
$_smarty_tpl->_subTemplateRender("file:index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="<?php echo CSS_PATH;?>
index/search.css" />
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
index/search.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src=""><?php echo '</script'; ?>
>
    <div class="search_box">
        <div class="sbox_l">
            <ul class="mean">
                <li class="active">
                    <div><i class="icon icon9">&#xe61b;</i></div>
                    <span>文章</span>
                </li>
                <li>
                    <div><i class="icon icon9">&#xe604;</i></div>
                    <span>用户</span>
                </li>
                <li>
                    <div><i class="icon icon9">&#xe626;</i></div>
                    <span>专题</span>
                </li>
            </ul>
        </div>
        <div class="sbox_r">
            <div class="sort_type">
                <a href="">综合排序</a>
                <a href="">15254 个结果</a>
            </div>
            <ul class="search_list active">
            <?php if ($_smarty_tpl->tpl_vars['res']->value) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['res']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                <li>
                    <div class="sl_content">
                        <div class="autour">
                            <a href=""><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['uimgurl'];?>
" alt=""></a>
                            <div class="name">
                                <a href=""><?php echo $_smarty_tpl->tpl_vars['v']->value['uname'];?>
</a>
                                <span><?php echo $_smarty_tpl->tpl_vars['v']->value['stime'];?>
</span>
                            </div>
                        </div>
                        <a href="index.php?f=show&sid=<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
" class="title"><?php echo $_smarty_tpl->tpl_vars['v']->value['stitle'];?>
</a>
                        <p class="abscont">
                            <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['v']->value['skey'],300,"...");?>

                        </p>
                        <div class="meta">
                            <a >
                                <i class="icon iconfont2">&#xe690;</i> 2598
                            </a>
                            <a >
                                <i class="icon iconfont2">&#xe60e;</i> 66
                            </a>
                            <a ><i class="icon iconfont2">&#xe610;</i>307</a>
                        </div>
                    </div>
                </li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            <?php } else { ?>
                <p>暂无相关内容！</p>
            <?php }?>
            </ul>
            <ul class="search_list">

            </ul>
            <ul class="search_list">

            </ul>
        </div>
    </div>
</body>
</html><?php }
}
