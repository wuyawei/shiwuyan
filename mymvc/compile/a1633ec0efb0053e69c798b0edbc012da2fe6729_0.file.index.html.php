<?php
/* Smarty version 3.1.30, created on 2017-08-29 17:46:13
  from "D:\wamp\www\php\mymvc\template\index\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59a58c45bf3238_45701885',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1633ec0efb0053e69c798b0edbc012da2fe6729' => 
    array (
      0 => 'D:\\wamp\\www\\php\\mymvc\\template\\index\\index.html',
      1 => 1503230609,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/header.html' => 1,
    'file:index/modal.html' => 1,
  ),
),false)) {
function content_59a58c45bf3238_45701885 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once 'D:\\wamp\\www\\php\\mymvc\\libs\\smarty\\plugins\\modifier.truncate.php';
$_smarty_tpl->_subTemplateRender("file:index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:index/modal.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="<?php echo CSS_PATH;?>
index/index.css" />
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
index/modal.css" />
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
index/index.js"><?php echo '</script'; ?>
>
	<!--logo-->

	<div class="logo">
		<div class="lo_inner">
			<span class="h1"><img src="<?php echo IMG_PATH;?>
index/2.jpeg" alt="" /></span>
			<p>每个人都在创造</p>
			<?php if (!$_smarty_tpl->tpl_vars['flag']->value) {?>
			<div class="login"><a href="index.php?a=login">登录</a></div>
			<?php }?>
		</div>
	</div>

	<div class="colum">
		<a class="cor curr" href="javascript:;">
			<span>文章</span>
			<div></div>
		</a> 
		<a class="cor" href="javascript:;">
			<div></div>
			<span>主题</span>
		</a>
	</div>
	<!--内容-->
	<div class="showbox">
		<div class="showw  active">
			<div class="show_l">
				<ul class="s_list">
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
						    <p class="scont"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['v']->value['skey'],100);?>
...
	    					</p>
	    					<div class="meta">
	        					<a class="cate" href=""><?php echo $_smarty_tpl->tpl_vars['v']->value['cat_name'];?>
</a>
	      						<a >
	        						<i class="icon iconfont2">&#xe690;</i> 2598
								</a>
								<a >
	          						<i class="icon iconfont2">&#xe60e;</i> 66
								</a>
								<a ><i class="icon iconfont2">&#xe610;</i>307</a>
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

				</ul>
			</div>
			<div class="show_r">
				<div class="board">
					<a href=""><img src="<?php echo IMG_PATH;?>
index/xin.png" alt="" /></a>
					<a href=""><img src="<?php echo IMG_PATH;?>
index/sev.png" alt="" /></a>
					<a href=""><img src="<?php echo IMG_PATH;?>
index/tir.png" alt="" /></a>
				</div>
				<div class="recommend">
					<div class="tiath">
						<span>推荐作者</span>
					</div>
					<ul class="re_list">
						<li>
							<a href="" class="autimg"><img src="img/06c537002583.png" alt="" /></a>
							<a class="follow" href="">+关注</a>
							<a href="" class="rename">hhh</a><span>白金作家</span>
							<p>80k人关注</p>
						</li>
						<li>
							<a href="" class="autimg"><img src="img/06c537002583.png" alt="" /></a>
							<a class="follow" href="">+关注</a>
							<a href="" class="rename">hhh</a><span>白金作家</span>
							<p>80k人关注</p>
						</li>
						<li>
							<a href="" class="autimg"><img src="img/06c537002583.png" alt="" /></a>
							<a class="follow" href="">+关注</a>
							<a href="" class="rename">hhh</a><span>白金作家</span>
							<p>80k人关注</p>
						</li>
						<li>
							<a href="" class="autimg"><img src="img/06c537002583.png" alt="" /></a>
							<a class="follow" href="">+关注</a>
							<a href="" class="rename">hhh</a><span>白金作家</span>
							<p>80k人关注</p>
						</li>
						<li>
							<a href="" class="autimg"><img src="img/06c537002583.png" alt="" /></a>
							<a class="follow" href="">+关注</a>
							<a href="" class="rename">hhh</a><span>白金作家</span>
							<p>80k人关注</p>
						</li>
						<li>
							<a href="" class="autimg"><img src="img/06c537002583.png" alt="" /></a>
							<a class="follow" href="">+关注</a>
							<a href="" class="rename">hhh</a><span>白金作家</span>
							<p>80k人关注</p>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="showw">
			<div id="hot">
				<ul>
					<li class="curr" posid="7">热门主题</li>
					<li posid="6">推荐主题</li>
				</ul>
				<a href="index.php?f=lists&a=more" class="more_coll">
					查看更多专题 >
				</a>
			</div>
			<div class="show_li">
				<div class="hot_list active">

				</div>
				<div class="hot_list">

				</div>
			</div>
		</div>
	</div>

</body>
</html><?php }
}
