<?php /* Smarty version 3.1.25, created on 2016-10-12 22:14:50
         compiled from "D:\wamp\www\Web\admin\templates\registr.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:88457fe7d9abf2d51_87477502%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e30094510d0601b7e4edaddd89e4e3dda9a82c8' => 
    array (
      0 => 'D:\\wamp\\www\\Web\\admin\\templates\\registr.tpl',
      1 => 1476296078,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '88457fe7d9abf2d51_87477502',
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.25',
  'unifunc' => 'content_57fe7d9aca69e2_22139584',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57fe7d9aca69e2_22139584')) {
function content_57fe7d9aca69e2_22139584 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '88457fe7d9abf2d51_87477502';
if ($_smarty_tpl->tpl_vars['content']->value == 5) {?>
<!doctype html>


<html class="fuelux" lang="en">


<head>


  <meta charset="windows-1215"/>


  <meta name="viewport" content="width=device-width, initial-scale=1.0">





  <title>PixPro - All You Need Dashboard</title>





  <link rel="stylesheet" type="text/css" href="assets/bootstrap3/css/bootstrap.css">


  <link rel="stylesheet" type="text/css" href="assets/fontawesome/css/font-awesome.min.css">





  <!-- Google Fonts -->


  <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>


  <link href='http://fonts.googleapis.com/css?family=Lato:400,100italic,100,300italic,300,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>





  <!--[if lt IE 9]>


  <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"><?php echo '</script'; ?>
>


  <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"><?php echo '</script'; ?>
>


  <![endif]-->





  <!-- Theme Styles -->


  <link rel="stylesheet" type="text/css" href="css/demo.css">


  <link rel="stylesheet" type="text/css" href="css/styles.css">


  <link rel="stylesheet" type="text/css" href="css/responsive.css">


  <link rel="stylesheet" type="text/css" href="css/login.css">





  <link rel="shortcut icon" href="favicon.ico" type="image/png">


  <link rel="shortcut icon" type="image/png" href="favicon.ico" />





</head>


<body class="login-page">
  <div class="login-box">

    <div class="login-box-title red">�����������</div>
    <div class="login-box-content">
     <form  method="POST" action="registr.php" class="basic-form" style="padding-right: 20px;" enctype="multipart/form-data">
       <input type="text" name="name" placeholder="������� ���..." value="" /> 
       <input type="text" name="login" placeholder="������� �����..." value="" /> 
       <input type="password" name="password" placeholder="������� ������..." value="" /> 
       <input type="password" name="password_reply" placeholder="��������� ������..." value="" />
       <input type="text" name="email" placeholder="������� email..." value="" />
       <input type="text" name="tel" placeholder="������� �������..." value="" />
       <label for="photo">�������� ���� �������</label>
       <input type="file" name="photo" value="�������� ����������">
       <select name="rights" id="dropdown">
         <option value="0">���������</option>
         <option value="1">�������������</option>
         <option value="2">������� �������������</option>
       </select><br />
       <!-- <label>Secret Question: <br/>Your mothers maiden name?</label>
        <input type="secret" name="secret" placeholder="Your Secret Answer..." value="" /> --> 
       <input type="submit" name="register" id="submit" value="������������������!" />
     </form>
     <!-- <div class="half"><a href="forgotten-password.html">Forgot your password?</a></div> -->
     <div class="" style="float: right; margin-bottom: 20px; text-decoration: none !important;"><a href="login.php">�����</a></div>
    </div>
  </div>


<!-- Javascript -->


<?php echo '<script'; ?>
 src="assets/jquery/jquery.min.js" type="text/javascript"><?php echo '</script'; ?>
>


<?php echo '<script'; ?>
 src="assets/bootstrap3/js/bootstrap.min.js" type="text/javascript"><?php echo '</script'; ?>
>


<?php echo '<script'; ?>
>


  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){


  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),


  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)


  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');


  ga('create', 'UA-53707145-1', 'auto');


  ga('send', 'pageview');





<?php echo '</script'; ?>
>


</body>


</html>


<?php } else { ?>
<!doctype html>


<html class="fuelux" lang="en">


<head>


  <meta charset="utf-8">


  <meta name="viewport" content="width=device-width, initial-scale=1.0">





  <title>PixPro - All You Need Dashboard</title>





  <link rel="stylesheet" type="text/css" href="assets/bootstrap3/css/bootstrap.css">


  <link rel="stylesheet" type="text/css" href="assets/fontawesome/css/font-awesome.min.css">





  <!-- Google Fonts -->


  <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>


  <link href='http://fonts.googleapis.com/css?family=Lato:400,100italic,100,300italic,300,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>





  <!--[if lt IE 9]>


  <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"><?php echo '</script'; ?>
>


  <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"><?php echo '</script'; ?>
>


  <![endif]-->





  <!-- Theme Styles -->


  <link rel="stylesheet" type="text/css" href="css/demo.css">


  <link rel="stylesheet" type="text/css" href="css/styles.css">


  <link rel="stylesheet" type="text/css" href="css/responsive.css">


  <link rel="stylesheet" type="text/css" href="css/login.css">





  <link rel="shortcut icon" href="favicon.ico" type="image/png">


  <link rel="shortcut icon" type="image/png" href="favicon.ico" />





</head>





<body class="login-page">





  <div class="login-box">

    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>


  </div>





<!-- Javascript -->


<?php echo '<script'; ?>
 src="assets/jquery/jquery.min.js" type="text/javascript"><?php echo '</script'; ?>
>


<?php echo '<script'; ?>
 src="assets/bootstrap3/js/bootstrap.min.js" type="text/javascript"><?php echo '</script'; ?>
>


<?php echo '<script'; ?>
>


  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){


  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),


  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)


  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');


  ga('create', 'UA-53707145-1', 'auto');


  ga('send', 'pageview');





<?php echo '</script'; ?>
>


</body>


</html>



<?php }
}
}
?>