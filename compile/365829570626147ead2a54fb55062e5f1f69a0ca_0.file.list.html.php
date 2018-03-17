<?php
/* Smarty version 3.1.30, created on 2017-08-29 17:32:49
  from "D:\wamp\www\php\mymvc\template\index\list.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59a5892179bcf4_63460321',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '365829570626147ead2a54fb55062e5f1f69a0ca' => 
    array (
      0 => 'D:\\wamp\\www\\php\\mymvc\\template\\index\\list.html',
      1 => 1504020768,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/header.html' => 1,
    'file:index/modal.html' => 1,
  ),
),false)) {
function content_59a5892179bcf4_63460321 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once 'D:\\wamp\\www\\php\\mymvc\\libs\\smarty\\plugins\\modifier.truncate.php';
$_smarty_tpl->_subTemplateRender("file:index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:index/modal.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="<?php echo CSS_PATH;?>
index/list.css" />
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
index/modal.css" />
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
index/list.js"><?php echo '</script'; ?>
>

<!--<div id="keep">操作失败</div>-->
	<div class="list_box">
		<div class="list_left">
			<div class="lis_top">
				<a href="" class="lisimg"><img src="<?php echo $_smarty_tpl->tpl_vars['arr']->value['imgurl'];?>
" alt="" /></a>
				<a href="javascript:;" class="love" flag="<?php echo $_smarty_tpl->tpl_vars['flag']->value;?>
" take="<?php echo $_smarty_tpl->tpl_vars['take']->value;?>
" catid="<?php echo $_smarty_tpl->tpl_vars['arr']->value['cat_id'];?>
"><?php if ($_smarty_tpl->tpl_vars['take']->value == "true") {?>已订阅<?php } else { ?>+订阅<?php }?></a>
				<a href="" class="title"><?php echo $_smarty_tpl->tpl_vars['arr']->value['cat_name'];?>
</a>
				<p class="listinfo">
					收录了1386篇文章，7779人订阅
				</p>
			</div>
			<ul class="tirgger">
				<li class="active"><i class="icon icon1">&#xe61b;</i>最新</li>
				<li  catid="<?php echo $_smarty_tpl->tpl_vars['arr']->value['cat_id'];?>
"><i class="icon icon2">&#xe61a;</i>热门</li>
			</ul>
			<div class="listcon">
				<ul class="s_list active">
					<?php if ($_smarty_tpl->tpl_vars['res']->value) {?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['res']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
					<li>
						<div class="s_cont">
							<div class="author">
								<a class="toux"  href="">
									<img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['uimgurl'];?>
" alt="96">
								</a>
								<div class="name">
									<a class="uname" href=""><?php echo $_smarty_tpl->tpl_vars['v']->value['uname'];?>
</a>
									<span class="time"><?php echo $_smarty_tpl->tpl_vars['v']->value['stime'];?>
</span>
								</div>
							</div>
							<a href="index.php?f=show&sid=<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
" class="title"><?php echo $_smarty_tpl->tpl_vars['v']->value['stitle'];?>
</a>
							<p class="scont">
								<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['v']->value['skey'],100);?>
...
							</p>
							<div class="meta">
								<a href="" class="hits">
									<i class="icon iconfont2">&#xe690;</i> 2598
								</a>
								<a  href="" class="ping">
									<i class="icon iconfont2">&#xe60e;</i> 66
								</a>
								<a class="shouc" href=""><i class="iconfont2">&#xe610;</i>307</a>
							</div>
						</div>
						<a href="">
							<img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['imgurl'];?>
" alt="" />
						</a>
					</li>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

					<?php } else { ?>
					<p>暂无内容！</p>
					<?php }?>
				</ul>
				<ul class="s_list">

				</ul>
			</div>
		</div>
		<div class="listright">
			<div class="lr_top">
				<h3>专题公告</h3>
				<div><?php echo $_smarty_tpl->tpl_vars['arr']->value['notice'];?>
</div>
			</div>
			<div class="lr_foot">
				<h3>关注的人(604064)</h3>
				<ul class="list_col">
					<li><a href=""><img src="<?php echo IMG_PATH;?>
index/7b00c78a-ed66-400e-8cef-0b188778f70a.jpg" alt=""></a></li>
					<li><a href=""><img src="<?php echo IMG_PATH;?>
index/7b00c78a-ed66-400e-8cef-0b188778f70a.jpg" alt=""></a></li>
					<li><a href=""><img src="<?php echo IMG_PATH;?>
index/7b00c78a-ed66-400e-8cef-0b188778f70a.jpg" alt=""></a></li>
					<li><a href=""><img src="<?php echo IMG_PATH;?>
index/7b00c78a-ed66-400e-8cef-0b188778f70a.jpg" alt=""></a></li>
					<li><a href=""><img src="<?php echo IMG_PATH;?>
index/7b00c78a-ed66-400e-8cef-0b188778f70a.jpg" alt=""></a></li>
					<li><a href="" class="end">...</a></li>
				</ul>
			</div>

		</div>
	</div>


	</body>
</html>
<?php }
}
