<?php
/* Smarty version 3.1.30, created on 2017-05-31 18:02:48
  from "C:\xampp\htdocs\web\application\views\templates\public\content_profile.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_592ee9286181b2_45918663',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3eadd1b3711c343d18a468ca5e9a8aa4d36c876e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\application\\views\\templates\\public\\content_profile.html',
      1 => 1496246566,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_592ee9286181b2_45918663 (Smarty_Internal_Template $_smarty_tpl) {
?>
	<div class="zui section space-50 bg-dark-accent-minus">
		<div class="inner">	
			<div class="page-title">
				<div class="profile-photo"><img src="<?php echo assets_url();?>
uploads/images/<?php echo $_smarty_tpl->tpl_vars['msession']->value['foto'];?>
" alt="" /></div>
				<h1><?php echo $_smarty_tpl->tpl_vars['msession']->value['nama'];?>
</h1>
				<div class="subheading"><?php echo $_smarty_tpl->tpl_vars['msession']->value['email'];?>
</div>
			</div>
			<ul class="profile-menu">
				<li><a href="#" class="active">Ads</a></li>
				<li><a href="#">Activity</a></li>
				<li><a href="#">Comments</a></li>
				<li><a href="#">Forums</a></li>
			</ul>
		</div>
	</div>

	<div class="zui section bg-light">
		<div class="inner">	
			<form class="ads-general-filter">
				<div class="row">
					<div class="col-sm-6">
						<span class="ads-gf-sorting">
							<span class="ads-gf-label">Sort by:</span>
							<select name="sort">
								<option>Date</option>
								<option>Sales</option>
								<option>Rating</option>
								<option>Price</option>
							</select>
						</span>
						<span class="ads-gf-control separate"><i class="fa fa-sort-amount-asc"></i></span>
						<span class="ads-gf-control active"><i class="fa fa-th"></i></span>
						<span class="ads-gf-control"><i class="fa fa-th-list"></i></span>
					</div>
					<div class="col-sm-6 ads-gf-text-right">
						<span class="ads-gf-label">Ads per page:</span>
						<span class="ads-gf-control active">15</span>
						<span class="ads-gf-control">30</span>
						<span class="ads-gf-control">60</span>
						<span class="ads-gf-control">90</span>
					</div>
				</div>
			</form>
		</div>
	</div>
<?php }
}
