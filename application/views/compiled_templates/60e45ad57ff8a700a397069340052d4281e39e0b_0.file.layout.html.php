<?php
/* Smarty version 3.1.30, created on 2017-05-31 06:31:26
  from "C:\wamp64\www\web\application\views\templates\admin\layout.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_592e633ef182f8_89512889',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '60e45ad57ff8a700a397069340052d4281e39e0b' => 
    array (
      0 => 'C:\\wamp64\\www\\web\\application\\views\\templates\\admin\\layout.html',
      1 => 1496212272,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_592e633ef182f8_89512889 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
   <head>
      <link rel="manifest" href="<?php echo assets_url();?>
plugins/onesignal/manifest.json">
      <?php if (isset($_smarty_tpl->tpl_vars['dashboard_menu']->value)) {?>
      <meta http-equiv="refresh" content="7" >
      <?php }?>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title><?php if (isset($_smarty_tpl->tpl_vars['page']->value)) {
echo $_smarty_tpl->tpl_vars['page']->value;
}?> | <?php if (isset($_smarty_tpl->tpl_vars['website_name']->value)) {
echo $_smarty_tpl->tpl_vars['website_name']->value;
}?></title>
      <!-- Tell the browser to be responsive to screen width -->
      <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
      <link rel="shortcut icon" type="image/png" href="<?php echo assets_url();?>
uploads/images/<?php echo $_smarty_tpl->tpl_vars['website_logo']->value;?>
"/>
      <!-- Bootstrap 3.3.6 -->
      <link rel="stylesheet" href="<?php echo assets_url();?>
bootstrap/css/bootstrap.min.css">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
      <!-- Ionicons -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
      <!-- Theme style -->
      <link rel="stylesheet" href="<?php echo assets_url();?>
dist/css/AdminLTE.min.css">
      <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
      <link rel="stylesheet" href="<?php echo assets_url();?>
dist/css/skins/skin-blue.min.css">
      <!-- iCheck -->
      <link rel="stylesheet" href="<?php echo assets_url();?>
plugins/iCheck/flat/blue.css">
      <!-- Morris chart -->
      <!-- <link rel="stylesheet" href="<?php echo assets_url();?>
plugins/morris/morris.css">-->
      <!-- jvectormap -->
      <link rel="stylesheet" href="<?php echo assets_url();?>
plugins/jvectormap/jquery-jvectormap-1.2.2.css">
      <!-- Date Picker -->
      <link rel="stylesheet" href="<?php echo assets_url();?>
plugins/datepicker/datepicker3.css">
      <!-- Daterange picker -->
      <link rel="stylesheet" href="<?php echo assets_url();?>
plugins/daterangepicker/daterangepicker.css">
      <!-- bootstrap wysihtml5 - text editor -->
      <link rel="stylesheet" href="<?php echo assets_url();?>
plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
      <!-- for chat -->
      <?php if (isset($_smarty_tpl->tpl_vars['chat_menu']->value)) {?>
      <link href='https://fonts.googleapis.com/css?family=Raleway:400,800,100' rel='stylesheet' type='text/css'>
      <!-- <link href='https://api.androidhive.info/gcm/styles/default.css' rel='stylesheet' type='text/css'> -->
      <link href='<?php echo assets_url();?>
css/styles-chat.css?test123' rel='stylesheet' type='text/css'>
      <?php }?>
      <?php if (isset($_smarty_tpl->tpl_vars['gc_data']->value->css_files)) {?>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gc_data']->value->css_files, 'file');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['file']->value) {
?>
      <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['file']->value;?>
" />
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

      <?php }?>
      <?php if (isset($_smarty_tpl->tpl_vars['map']->value['js'])) {?>
      <?php echo $_smarty_tpl->tpl_vars['map']->value['js'];?>

      <?php }?>
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
      <![endif]-->
      <?php echo '<script'; ?>
 src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async='async'><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
>
         var OneSignal = window.OneSignal || [];
         OneSignal.push(["init", {
           appId: "d7aa6fbe-f1b3-4787-9bb5-47ce129c13f6",
           autoRegister: true, /* Set to true to automatically prompt visitors */
           notifyButton: {
             enable: true /* Set to false to hide */
           }
         }]);
      <?php echo '</script'; ?>
>
   </head>
   <body class="hold-transition skin-blue sidebar-mini">
      <div class="wrapper">
         <header class="main-header">
            <!-- Logo -->
            <a href="<?php echo base_url();?>
" class="logo">
               <!-- mini logo for sidebar mini 50x50 pixels -->
               <span class="logo-mini"><b>PD</b>B</span>
               <!-- logo for regular state and mobile devices -->
               <span class="logo-lg"><b>Toko</b> Jelek</span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
               <!-- Sidebar toggle button-->
               <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
               <span class="sr-only">Toggle navigation</span>
               </a>
               <div class="navbar-custom-menu">
                  <ul class="nav navbar-nav">
                     <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                           <!-- <img src="<?php echo assets_url();?>
uploads/images/<?php echo $_smarty_tpl->tpl_vars['user_active']->value->image;?>
" class="user-image" alt="Image"> -->
                           <span class="hidden-xs">Welcome, <?php echo $_smarty_tpl->tpl_vars['asession']->value['nama'];?>
</span> 
                           <!--<span class="hidden-xs">Administrator</span>tak ganti admin, belum tau ngambil seesion nya-->
                        </a>
                        <ul class="dropdown-menu">
                           <li class="user-header">
                              <img src="<?php echo assets_url();?>
uploads/images/<?php echo $_smarty_tpl->tpl_vars['asession']->value['foto'];?>
" class="img-circle" alt="User Image">
                              <p>
                                 <?php echo $_smarty_tpl->tpl_vars['asession']->value['nama'];?>
 - @<?php echo $_smarty_tpl->tpl_vars['asession']->value['username'];?>

                                 <!--    Administrator-->
                              </p>
                           </li>
                           <li class="user-footer">
                              <a href="<?php echo base_url();?>
admin/logout" class="btn btn-default btn-flat btn-block">Sign out</a>
                           </li>
                        </ul>
                     </li>
                  </ul>
               </div>
            </nav>
         </header>
         <aside class="main-sidebar">
            <section class="sidebar">
               <!-- sidebar menu: : style can be found in sidebar.less -->
               <ul class="sidebar-menu">
                  <li class="header">MAIN NAVIGATION</li>
                  <li class="active">
                     <a href="<?php echo base_url();?>
admin/dashboard">
                     <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                     </a>
                  </li>
                  <li class="active treeview">
                     <a href="#">
                     <i class="fa fa-map-o"></i>
                     <span>Member</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     <span class="label bg-red pull-right-container"></span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="<?php echo base_url();?>
admin/member/index/add"><i class="fa fa-circle-o"></i> Tambah Member</a></li>
                        <li><a href="<?php echo base_url();?>
admin/member/"><i class="fa fa-circle-o"></i> List Member</a></li>
                     </ul>
                  </li>
                  <li class="active treeview">
                     <a href="#">
                     <i class="fa fa-map-o"></i>
                     <span>Iklan</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     <span class="label bg-red pull-right-container"></span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="<?php echo base_url();?>
admin/iklan/index/add"><i class="fa fa-circle-o"></i> Tambah Iklan</a></li>
                        <li><a href="<?php echo base_url();?>
admin/iklan"><i class="fa fa-circle-o"></i> List Iklan</a></li>
                        <li><a href="<?php echo base_url();?>
admin/iklan/kategori"><i class="fa fa-circle-o"></i> Kategori Iklan</a></li>
                     </ul>
                  </li>
                  <li class="header">ADMINISTRATION</li>
                  <li class="treeview">
                     <a href="<?php echo base_url();?>
admin/logout">
                     <i class="fa fa-cogs"></i>
                     <span>Logout</span>
                     </a>
                  </li>
               </ul>
            </section>
            <!-- /.sidebar -->
         </aside>
         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <h1>
                  <?php if (isset($_smarty_tpl->tpl_vars['page']->value)) {
echo $_smarty_tpl->tpl_vars['page']->value;
}?>
                  <small>Control panel</small>
               </h1>
               <ol class="breadcrumb">
                  <li><a href="<?php echo base_url();?>
admin/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
                  <li class="active"><?php if (isset($_smarty_tpl->tpl_vars['page']->value)) {
echo $_smarty_tpl->tpl_vars['page']->value;
}?></li>
               </ol>
            </section>
            <!-- Main content -->
            <section class="content">
               <!-- Main row -->
               <div class="row">
                  <?php if (isset($_smarty_tpl->tpl_vars['main_content']->value)) {?>
                  <?php echo $_smarty_tpl->tpl_vars['main_content']->value;?>

                  <?php }?>
                  <?php if (isset($_smarty_tpl->tpl_vars['gc_data']->value->output)) {?>
                  <section class="col-lg-12">
                     <?php echo $_smarty_tpl->tpl_vars['gc_data']->value->output;?>

                  </section>
                  <?php }?>
               </div>
               <!-- /.row (main row) -->
            </section>
            <!-- /.content -->
         </div>
         <!-- /.content-wrapper -->
         <footer class="main-footer">
            <div class="pull-right hidden-xs">
               <b>Version</b> 2.3.6
            </div>
            <strong>Copyright &copy; 2016 <a href="#">Toko Jelek</a>.</strong> All rights
            reserved.
         </footer>
      </div>
      <!-- ./wrapper -->

      <!-- jQuery 2.2.3 -->
      <?php echo '<script'; ?>
 src="<?php echo assets_url();?>
plugins/jQuery/jquery-2.2.3.min.js"><?php echo '</script'; ?>
>
      <!-- jQuery UI 1.11.4 -->
      <?php echo '<script'; ?>
 src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"><?php echo '</script'; ?>
>
      <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
      <?php echo '<script'; ?>
>
         $.widget.bridge('uibutton', $.ui.button);
      <?php echo '</script'; ?>
>
      <!-- Bootstrap 3.3.6 -->
      <?php echo '<script'; ?>
 src="<?php echo assets_url();?>
bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
      <!-- Morris.js charts -->
      <!--<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"><?php echo '</script'; ?>
>-->
      <!--<?php echo '<script'; ?>
 src="<?php echo assets_url();?>
plugins/morris/morris.min.js"><?php echo '</script'; ?>
>-->
      <!-- Sparkline -->
      <?php echo '<script'; ?>
 src="<?php echo assets_url();?>
plugins/sparkline/jquery.sparkline.min.js"><?php echo '</script'; ?>
>
      <!-- jvectormap -->
      <?php echo '<script'; ?>
 src="<?php echo assets_url();?>
plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="<?php echo assets_url();?>
plugins/jvectormap/jquery-jvectormap-world-mill-en.js"><?php echo '</script'; ?>
>
      <!-- jQuery Knob Chart -->
      <?php echo '<script'; ?>
 src="<?php echo assets_url();?>
plugins/knob/jquery.knob.js"><?php echo '</script'; ?>
>
      <!-- daterangepicker -->
      <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="<?php echo assets_url();?>
plugins/daterangepicker/daterangepicker.js"><?php echo '</script'; ?>
>
      <!-- datepicker -->
      <?php echo '<script'; ?>
 src="<?php echo assets_url();?>
plugins/datepicker/bootstrap-datepicker.js"><?php echo '</script'; ?>
>
      <!-- Bootstrap WYSIHTML5 -->
      <?php echo '<script'; ?>
 src="<?php echo assets_url();?>
plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"><?php echo '</script'; ?>
>
      <!-- Slimscroll -->
      <?php echo '<script'; ?>
 src="<?php echo assets_url();?>
plugins/slimScroll/jquery.slimscroll.min.js"><?php echo '</script'; ?>
>
      <!-- FastClick -->
      <?php echo '<script'; ?>
 src="<?php echo assets_url();?>
plugins/fastclick/fastclick.js"><?php echo '</script'; ?>
>
      <!-- AdminLTE App -->
      <?php echo '<script'; ?>
 src="<?php echo assets_url();?>
dist/js/app.min.js"><?php echo '</script'; ?>
>
      <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
      <?php echo '<script'; ?>
 src="<?php echo assets_url();?>
dist/js/pages/dashboard.js"><?php echo '</script'; ?>
>
      <!-- AdminLTE for demo purposes -->
      <?php echo '<script'; ?>
 src="<?php echo assets_url();?>
dist/js/demo.js?123"><?php echo '</script'; ?>
>
      <!-- Grocery Crud -->
      <?php if (isset($_smarty_tpl->tpl_vars['gc_data']->value->js_files)) {?>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gc_data']->value->js_files, 'file');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['file']->value) {
?>
      <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['file']->value;?>
"><?php echo '</script'; ?>
>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

      <?php }?>
      <?php echo '<script'; ?>
 type="text/javascript">
      $(document).on("click", ".open-ApproveDialog", function () {
          var qresponses_id = $(this).data('id');
          $("#modal-body-approve #id_qresponse").val( qresponses_id );
         });
         
         $(document).on("click", ".open-notifDialog", function () {
          var qresponses_id = $(this).data('id');
          $("#modal-body-notif #id_qresponse").val( qresponses_id );
         });
         
         $(document).ready(function(){
           var page = "<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
";
           if(page === 'Chat'){
             getChatroomMessages($('#topics li:first').attr('id'));
           }
         });
         
         
         $('#field-tipe').on('change', function(){
           var selectOption;
           if(this.value === 'polisi'){
             selectOption = { 'serang kota':'Polres Serang Kota', 'serang kabupaten':'Polres Serang Kabupaten', 'cilegon':'Polres Cilegon', 'pandeglang':'Polres Pandeglang', 'lebak':'Polres Lebak', 'tangerang':'Polres Tangerang' };
           }else if(this.value === 'ulama'){
             // selectOption = { 'shift1':'Shift 1', 'shift2':'Shift 2', 'shift3':'Shift 3' };
           }
         
           $('#field_region').empty();
           $.each(selectOption, function(key, value) {   
            $('#field_region')
            .append($("<option></option>")
             .attr("value",key)
             .text(value)); 
          });
         });
         
         $('#field-tujuan_pesan').on('change', function(){
           var selectOption;
           if(this.value === 'polisi'){
           //console.log('test');
           selectOption = { 'serang kota':'Polres Serang Kota', 'serang kabupaten':'Polres Serang Kabupaten', 'cilegon':'Polres Cilegon', 'pandeglang':'Polres Pandeglang', 'lebak':'Polres Lebak', 'tangerang':'Polres Tangerang' };
          }else if(this.value === 'ulama'){
             // selectOption = { 'shift1':'Shift 1', 'shift2':'Shift 2', 'shift3':'Shift 3' };
           }
         
           $('#field_region').empty();
           $.each(selectOption, function(key, value) {   
            $('#field_region')
            .append($("<option></option>")
             .attr("value",key)
             .text(value)); 
          });
         });
      <?php echo '</script'; ?>
>
   </body>
</html><?php }
}
