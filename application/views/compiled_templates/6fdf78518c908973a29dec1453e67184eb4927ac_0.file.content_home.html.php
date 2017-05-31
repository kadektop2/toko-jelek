<?php
/* Smarty version 3.1.30, created on 2017-05-31 11:13:21
  from "C:\xampp\htdocs\web\application\views\templates\public\content_home.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_592e8931da86b8_06296046',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6fdf78518c908973a29dec1453e67184eb4927ac' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\application\\views\\templates\\public\\content_home.html',
      1 => 1496221999,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_592e8931da86b8_06296046 (Smarty_Internal_Template $_smarty_tpl) {
?>
	<!-- content -->
	<div class="zui section space-150 bg-dark-accent">
		<div class="inner narrow">
			
			<form action="<?php echo base_url();?>
iklan/search/" method="post">
				<div class="big-search-main-title">
					<h5>Apa yang anda perlukan ? Cari disini ...</h5>
				</div>
				<div class="big-search-field">
					<input type="text" value="" name="keyword" placeholder="iPhone 10" />
				</div>
				<div class="big-search-buttons row">
					<div class="col-sm-5">
						
					</div>
					<div class="col-sm-4">
						
					</div>
					<div class="col-sm-3">
						<button class="zui button big-search-button" type="submit" name="btn_search">Find for me</button>
					</div>
				</div>
			</form>
		</div>
	</div>




	<!-- hot ads -->
	<div class="zui section bg-light space-top30 bg-dark-accent-plus" name="semua_iklan">
		<div class="inner">
				
			<div class="section-title center">
				<h3>Semua Iklan</h3>
			</div>

		</div>
	</div>


	<div class="zui section space-50 bg-light bg-dark-accent-plus">
		<div class="inner">
			
			<div class="row row-md-4-columns row-sm-3-columns row-xs-2-columns">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['iklan']->value, 'ik');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ik']->value) {
?>
				<div class="col">
					<div class="ad-style-grid">
						<a href="<?php echo base_url();?>
iklan/detail/<?php echo $_smarty_tpl->tpl_vars['ik']->value->id;?>
" class="photo">
							<img src="<?php echo assets_url();?>
/uploads/images/<?php echo $_smarty_tpl->tpl_vars['ik']->value->foto;?>
" alt="" />
							<div class="meta">
								<span class="price">Rp <?php echo $_smarty_tpl->tpl_vars['ik']->value->harga;?>
</span>
							</div>
						</a>
						<h3 class="title"><a href="#"><?php echo $_smarty_tpl->tpl_vars['ik']->value->judul;?>
</a></h3>
						<div class="category subheading">from <a href="<?php echo base_url();?>
member/index/<?php echo $_smarty_tpl->tpl_vars['ik']->value->id_member->id;?>
"><?php echo $_smarty_tpl->tpl_vars['ik']->value->id_member->nama;?>
</a></div>
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

	<!-- end hot ads -->
	<!-- end company --><?php }
}
