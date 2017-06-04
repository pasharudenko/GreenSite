<?php /* Smarty version 3.1.25, created on 2017-05-30 18:22:10
         compiled from "D:\OpenServer\domains\GreenSite\templates\blog.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:18158592d8e22ba60b5_68290687%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c7247dcf993c4d269e723b7801b43f54f6e713c' => 
    array (
      0 => 'D:\\OpenServer\\domains\\GreenSite\\templates\\blog.tpl',
      1 => 1496157276,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18158592d8e22ba60b5_68290687',
  'has_nocache_code' => false,
  'version' => '3.1.25',
  'unifunc' => 'content_592d8e22be7684_73337392',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_592d8e22be7684_73337392')) {
function content_592d8e22be7684_73337392 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '18158592d8e22ba60b5_68290687';
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BASICA! A Free Bootstrap3 HTML5 CSS3 Template by Vactual Art</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/main.css">
    <link href="css/custom.css" rel="stylesheet">

    <?php echo '<script'; ?>
 src="//use.edgefonts.net/bebas-neue.js"><?php echo '</script'; ?>
>

    <!-- Custom Fonts & Icons -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/icomoon-social.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <?php echo '<script'; ?>
 src="js/modernizr-2.6.2-respond-1.1.0.min.js"><?php echo '</script'; ?>
>


</head>

<body>
<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->


<header class="navbar navbar-inverse navbar-fixed-top" role="banner">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="Basica"></a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php">Home</a></li>
                <li><a href="about-us.php">About Us</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="portfolio.php">Portfolio</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <i class="icon-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="full-width.php">Full Width Page</a></li>
                        <li><a href="#">Dropdown Menu 1</a></li>
                        <li><a href="#">Dropdown Menu 2</a></li>
                        <li><a href="#">Dropdown Menu 3</a></li>
                        <li><a href="#">Dropdown Menu 4</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of Use</a></li>
                    </ul>
                </li>
                <li class="active"><a href="blog.php">Blog</a></li>
                <li><a href="contact-us.php">Contact</a></li>
            </ul>
        </div>
    </div>
</header><!--/header-->

<!-- Page Title -->
<div class="section section-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Our Blog</h1>
            </div>
        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="row">
            <!-- Blog Post Excerpt -->
            <div class="col-sm-6">
                <div class="blog-post blog-single-post">
                    <div class="single-post-title">
                        <h2>Exerci Tation Ullamcorper</h2>
                    </div>

                    <div class="single-post-image">
                        <img src="img/blog/2.jpg" alt="Post Title">
                    </div>

                    <div class="single-post-info">
                        <i class="glyphicon glyphicon-time"></i>15 OCT, 2014 <a href="#" title="Show Comments"><i class="glyphicon glyphicon-comment"></i>11</a>
                    </div>

                    <div class="single-post-content">
                        <p>
                            Vivamus euismod elit ac libero facilisis tristique. Duis mollis non ligula vel tincidunt. Nulla consectetur libero id nunc ornare, vel vulputate tellus mollis. Sed quis nulla magna. Integer rhoncus sem quis ultrices lobortis. Maecenas tempus nulla quis dolor vulputate egestas. Phasellus cursus tortor quis massa faucibus fermentum vel sit amet tortor. Phasellus vehicula lorem et tortor luctus, a dignissim lacus tempor. Aliquam volutpat molestie metus sit amet aliquam. Duis vestibulum quam tortor, sed ultrices orci sagittis nec.
                        </p>
                        <a href="blog-post.php" class="btn">Read more</a>
                    </div>
                </div>
            </div>
            <!-- End Blog Post Excerpt -->


            <!-- Blog Post Excerpt -->
            <div class="col-sm-6">
                <div class="blog-post blog-single-post">
                    <div class="single-post-title">
                        <h2>Exerci Tation Ullamcorper</h2>
                    </div>

                    <div class="single-post-image">
                        <img src="img/blog/1.jpg" alt="Post Title">
                    </div>

                    <div class="single-post-info">
                        <i class="glyphicon glyphicon-time"></i>15 OCT, 2014 <a href="#" title="Show Comments"><i class="glyphicon glyphicon-comment"></i>11</a>
                    </div>

                    <div class="single-post-content">
                        <p>
                            Vivamus euismod elit ac libero facilisis tristique. Duis mollis non ligula vel tincidunt. Nulla consectetur libero id nunc ornare, vel vulputate tellus mollis. Sed quis nulla magna. Integer rhoncus sem quis ultrices lobortis. Maecenas tempus nulla quis dolor vulputate egestas. Phasellus cursus tortor quis massa faucibus fermentum vel sit amet tortor. Phasellus vehicula lorem et tortor luctus, a dignissim lacus tempor. Aliquam volutpat molestie metus sit amet aliquam. Duis vestibulum quam tortor, sed ultrices orci sagittis nec.
                        </p>
                        <a href="blog-post.php" class="btn">Read more</a>
                    </div>
                </div>
            </div>
            <!-- End Blog Post Excerpt -->

            <!-- Blog Post Excerpt -->
            <div class="col-sm-6">
                <div class="blog-post blog-single-post">
                    <div class="single-post-title">
                        <h2>Exerci Tation Ullamcorper</h2>
                    </div>

                    <div class="single-post-image">
                        <img src="img/blog/3.jpg" alt="Post Title">
                    </div>

                    <div class="single-post-info">
                        <i class="glyphicon glyphicon-time"></i>15 OCT, 2014 <a href="#" title="Show Comments"><i class="glyphicon glyphicon-comment"></i>11</a>
                    </div>

                    <div class="single-post-content">
                        <p>
                            Vivamus euismod elit ac libero facilisis tristique. Duis mollis non ligula vel tincidunt. Nulla consectetur libero id nunc ornare, vel vulputate tellus mollis. Sed quis nulla magna. Integer rhoncus sem quis ultrices lobortis. Maecenas tempus nulla quis dolor vulputate egestas. Phasellus cursus tortor quis massa faucibus fermentum vel sit amet tortor. Phasellus vehicula lorem et tortor luctus, a dignissim lacus tempor. Aliquam volutpat molestie metus sit amet aliquam. Duis vestibulum quam tortor, sed ultrices orci sagittis nec.
                        </p>
                        <a href="blog-post.php" class="btn">Read more</a>
                    </div>
                </div>
            </div>
            <!-- End Blog Post Excerpt -->

            <!-- Blog Post Excerpt -->
            <div class="col-sm-6">
                <div class="blog-post blog-single-post">
                    <div class="single-post-title">
                        <h2>Exerci Tation Ullamcorper</h2>
                    </div>

                    <div class="single-post-image">
                        <img src="img/blog/4.jpg" alt="Post Title">
                    </div>

                    <div class="single-post-info">
                        <i class="glyphicon glyphicon-time"></i>15 OCT, 2014 <a href="#" title="Show Comments"><i class="glyphicon glyphicon-comment"></i>11</a>
                    </div>

                    <div class="single-post-content">
                        <p>
                            Vivamus euismod elit ac libero facilisis tristique. Duis mollis non ligula vel tincidunt. Nulla consectetur libero id nunc ornare, vel vulputate tellus mollis. Sed quis nulla magna. Integer rhoncus sem quis ultrices lobortis. Maecenas tempus nulla quis dolor vulputate egestas. Phasellus cursus tortor quis massa faucibus fermentum vel sit amet tortor. Phasellus vehicula lorem et tortor luctus, a dignissim lacus tempor. Aliquam volutpat molestie metus sit amet aliquam. Duis vestibulum quam tortor, sed ultrices orci sagittis nec.
                        </p>
                        <a href="blog-post.php" class="btn">Read more</a>
                    </div>
                </div>
            </div>
            <!-- End Blog Post Excerpt -->

            <!-- Pagination -->
            <div class="pagination-wrapper ">
                <ul class="pagination pagination-sm">
                    <li class="disabled"><a href="#">Previous</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">Next</a></li>
                </ul>
            </div>

        </div>
    </div>
</div>

<!-- Footer -->
<div class="footer">
    <div class="container">

        <div class="row">

            <div class="col-footer col-md-4 col-xs-6">
                <h3>Contact Us</h3>
                <p class="contact-us-details">
                    <b>Address:</b> 123 Downtown Avenue, Manhattan, New York, United States of America<br/>
                    <b>Phone:</b> +1 123 45678910<br/>
                    <b>Fax:</b> +1 123 45678910<br/>
                    <b>Email:</b> <a href="mailto:info@yourcompanydomain.com">info@yourcompanydomain.com</a>
                </p>
            </div>
            <div class="col-footer col-md-4 col-xs-6">
                <h3>Our Social Networks</h3>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam.</p>
                <div>
                    <img src="img/icons/facebook.png" width="32" alt="Facebook">
                    <img src="img/icons/twitter.png" width="32" alt="Twitter">
                    <img src="img/icons/linkedin.png" width="32" alt="LinkedIn">
                    <img src="img/icons/rss.png" width="32" alt="RSS Feed">
                </div>
            </div>
            <div class="col-footer col-md-4 col-xs-6">
                <h3>About Our Company</h3>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci.</p>
            </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="footer-copyright">&copy; 2014 <a href="http://www.vactualart.com/portfolio-item/basica-a-free-html5-template/">Basica</a> Bootstrap HTML Template. By <a href="http://www.vactualart.com">Vactual Art</a>.</div>
            </div>
        </div>
    </div>
</div>

<!-- Javascripts -->
<?php echo '<script'; ?>
 src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>window.jQuery || document.write('<?php echo '<script'; ?>
 src="js/jquery-1.9.1.min.js"><\/script>')<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>

<!-- Scrolling Nav JavaScript -->
<?php echo '<script'; ?>
 src="js/jquery.easing.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/scrolling-nav.js"><?php echo '</script'; ?>
>

</body>
</html><?php }
}
?>