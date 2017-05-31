<?php
/* Smarty version 3.1.30, created on 2017-05-31 18:19:20
  from "C:\xampp\htdocs\web\application\views\templates\public\layout.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_592eed08563bd0_64167755',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0671c9ba09ee40bd30c351edb192a75e7b95997a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\application\\views\\templates\\public\\layout.html',
      1 => 1496247559,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_592eed08563bd0_64167755 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themes.market/html/classlist/index4.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 May 2017 00:00:33 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<title>Toko Jelek</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php echo assets_url();?>
front/font/flaticon.css">
	<link rel="stylesheet" href="<?php echo assets_url();?>
front/font/fa/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo assets_url();?>
front/css/styles.css">
</head>
<body>
	
	<div class="zui section bg-dark-accent-plus">
		<div class="inner">
			<nav class="zui menu-nav saturn">
				<a class="logo" href="<?php echo base_url();?>
"><img src="<?php echo assets_url();?>
front/img/logo.png" alt="" /></a>
				<ul class="menu">
					<li class="mega">
						<a href="<?php echo base_url();?>
" class="withicon"><i class="flaticon-home"></i> Home</a>
					</li>
					<li>
						<a href="<?php echo base_url();?>
">Lihat semua iklan</a>
					</li>
				</ul>

				<?php if ($_smarty_tpl->tpl_vars['m_logged_in']->value != 'true') {?>
				<div class="right">
				<a class="zui button blue header-button" href="<?php echo base_url();?>
home/login"><span>
						<span><span class="flaticon-plus"></span></span>
						<span>Masuk</span>
					</span></a>
				<a class="zui button green header-button" href="<?php echo base_url();?>
home/register"><span>
						<span><span class="flaticon-plus"></span></span>
						<span>Daftar</span>
					</span></a>
				</div>
				<?php } else { ?>
				<div class="right">
				<ul class="menu">
					<li class="do-not-mark">
						<a href="<?php echo base_url();?>
member/" class="withphoto">
							<img src="<?php echo assets_url();?>
uploads/images/<?php echo $_smarty_tpl->tpl_vars['msession']->value['foto'];?>
" alt=""> <?php echo $_smarty_tpl->tpl_vars['msession']->value['nama'];?>

						</a>
						<ul class="submenu right">
							<li><a href="#" class="withicon"><i class="flaticon-settings-4"></i> Settings</a></li>
							<li><a href="#" class="withicon"><i class="flaticon-alarm"></i> Notifications</a></li>
							<li><a href="#" class="withicon"><i class="flaticon-star"></i> Favorites</a></li>
							<li><a href="#" class="withicon"><i class="flaticon-notebook-3"></i> My ads</a></li>
							<li><a href="#" class="withicon"><i class="flaticon-help"></i> Help</a></li>
							<li><a href="#" class="withicon"><i class="flaticon-exit-1"></i> Logout!</a></li>
						</ul>
					</li>
				</ul>
				</div>
				<div class="right" style="margin-left: 0px !important;">
				<a class="zui button red header-button" href="<?php echo base_url();?>
home/logout"><span>
						<span><span class="flaticon-plus"></span></span>
						<span>Keluar</span>
					</span></a>
				</div>
				<?php }?>
			</nav>

		</div>
	</div>

	<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
		<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

	<?php }?>


	<!-- <div class="zui section footer space-50 bg-dark-accent">
		<div class="inner">
			<div class="row">
				<div class="col-sm-3 col-md-2 col-xs-6">
					<div class="widget">
						<h6 class="widget-title">Company</h6>
						<div class="subheading">Meet our company</div>
						<div class="widget-content">
							<ul class="widget-menu">
								<li><a href="#">About us</a></li>
								<li><a href="#">History</a></li>
								<li><a href="#">The team</a></li>
								<li><a href="#">Careers</a></li>
								<li><a href="#">Contact us</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-sm-3 col-md-2 col-xs-6">
					<div class="widget">
						<h6 class="widget-title">Resources</h6>
						<div class="subheading">Site help</div>
						<div class="widget-content">
							<ul class="widget-menu">
								<li><a href="#">Account privacy</a></li>
								<li><a href="#">Payments</a></li>
								<li><a href="#">Help center</a></li>
								<li><a href="#">Terms of use</a></li>
								<li><a href="#">Rules</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-sm-3 col-md-4 col-xs-6">
					<div class="widget">
						<h6 class="widget-title">Email Newsletters</h6>
						<div class="subheading">Sign up for updates</div>
						<div class="widget-content">
							<form class="widget-subscribe">
								<input type="text" name="email" class="fullwidth"  />
								<button class="zui button">Subscribe</button>
							</form>
						</div>
					</div>
				</div>
				<div class="col-sm-3 col-md-4 col-xs-6">
					<div class="widget">
						<h6 class="widget-title">Download our apps</h6>
						<div class="subheading">Better site experience using our apps</div>
						<div class="widget-content">
							<div class="widget-apps">
								<a href="#"><img src="<?php echo assets_url();?>
front/ph/appstore.png" alt="" /></a>
								<a href="#"><img src="<?php echo assets_url();?>
front/ph/google-play.png" alt="" /></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
 -->
	<div class="zui section subfooter space-30 bg-dark-accent border-top light-border">
		<div class="inner">
			<div class="row row-sm-middle">
				<div class="col-sm-6">
					<div class="copyright">Copyright &copy; 2016 ClassList Corporation. All rights reserved</div>
				</div>
				<div class="col-sm-6">
					<ul class="icons">
						<li><i class="fa fa-cc-mastercard"></i></li>
						<li><i class="fa fa-cc-paypal"></i></li>
						<li><i class="fa fa-cc-stripe"></i></li>
						<li><i class="fa fa-cc-visa"></i></li>
						<li><i class="fa fa-cc-amex"></i></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo assets_url();?>
front/js/jquery-2.1.1.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo assets_url();?>
front/js/zui-menu.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo assets_url();?>
front/js/config.js"><?php echo '</script'; ?>
>
</body>

<!-- Mirrored from themes.market/html/classlist/index4.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 May 2017 00:00:33 GMT -->
</html><?php }
}
