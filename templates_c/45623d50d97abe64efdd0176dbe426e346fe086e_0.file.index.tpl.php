<?php /* Smarty version 3.1.25, created on 2017-06-05 00:02:59
         compiled from "D:\OpenServer\domains\GreenSite\templates\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3050559347583635667_22274009%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '45623d50d97abe64efdd0176dbe426e346fe086e' => 
    array (
      0 => 'D:\\OpenServer\\domains\\GreenSite\\templates\\index.tpl',
      1 => 1496610178,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3050559347583635667_22274009',
  'variables' => 
  array (
    'meta_title' => 0,
    'meta_description' => 0,
    'meta_key_words' => 0,
    'script' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.25',
  'unifunc' => 'content_59347583682b35_58462294',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59347583682b35_58462294')) {
function content_59347583682b35_58462294 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3050559347583635667_22274009';
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html lang="en">

<head>

    <meta charset="utf-8">
    <title><?php echo $_smarty_tpl->tpl_vars['meta_title']->value;?>
</title>
    <meta name="meta_description" content="<?php echo $_smarty_tpl->tpl_vars['meta_description']->value;?>
"/>
    <meta name="meta_key_words" content="<?php echo $_smarty_tpl->tpl_vars['meta_key_words']->value;?>
"/>


    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">



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
<p class="chromefame">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
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
            <a class="brand" href="index.php"><img src="img/Logo_Text.png" alt="Basica" width="250px"></a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="index.php"><?php echo $_smarty_tpl->getConfigVariable( 'test');?>
</a></li>
                <li><a href="about-us.php">О нас</a></li>
                <li><a href="services.php">Услуги</a></li>
                <li><a href="portfolio.php">Портфолио</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <i class="icon-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Dropdown Menu 1</a></li>
                        <li><a href="#">Dropdown Menu 2</a></li>
                        <li><a href="#">Dropdown Menu 3</a></li>
                        <li><a href="#">Dropdown Menu 4</a></li>
                        <li><a href="#">Dropdown Menu 5</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of Use</a></li>
                    </ul>
                </li>
                <li><a href="blog.php">Блог</a></li>
                <li><a href="contact-us.php">Контакты</a></li>

                <a href="<?php echo $_smarty_tpl->tpl_vars['script']->value;?>
?lang=eng"><img src="img/eng.jpg" width="100px"></a>&nbsp&nbsp&nbsp

                <a href="<?php echo $_smarty_tpl->tpl_vars['script']->value;?>
?lang=ru"><img src="img/rus1.jpg" width="100px"></a>


            </ul>
        </div>
    </div>
</header><!--/header-->




<section id="main-slider" class="no-margin">
    <div class="carousel slide">
        <ol class="carousel-indicators">
            <li data-target="#main-slider" data-slide-to="0" class="active"></li>
            <li data-target="#main-slider" data-slide-to="1"></li>
            <li data-target="#main-slider" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active" style="background-image: url(img/silver.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="carousel-content centered">
                                <h2 class="animation animated-item-1">Welcome to BASICA! A Bootstrap3 Template</h2>
                                <p class="animation animated-item-2">Sed mattis enim in nulla blandit tincidunt. Phasellus vel sem convallis, mattis est id, interdum augue. Integer luctus massa in arcu euismod venenatis. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
            <div class="item" style="background-image: url(img/silver1.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="carousel-content center centered">
                                <h2 class="animation animated-item-1">Powerful and Responsive HTML Template</h2>
                                <p class="animation animated-item-2">Phasellus adipiscing felis a dictum dictum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at ligula risus. </p>
                                <br>
                                <a class="btn btn-md animation animated-item-3" href="#">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
            <div class="item" style="background-image: url(img/slides/3.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="carousel-content centered">
                                <h2 class="animation animated-item-1">Works Seamlessly Well on All Devices</h2>
                                <p class="animation animated-item-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae euismod lacus. Maecenas in tempor lectus. Nam mattis, odio ut dapibus ornare, libero. </p>
                                <br>
                                <a class="btn btn-md animation animated-item-3" href="#">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
        </div><!--/.carousel-inner-->
    </div><!--/.carousel-->
    <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
        <i class="icon-angle-left"></i>
    </a>
    <a class="next hidden-xs" href="#main-slider" data-slide="next">
        <i class="icon-angle-right"></i>
    </a>
</section><!--/#main-slider-->


<!-- Call to Action Bar -->
<div class="section section-dark">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="calltoaction-wrapper">
                    <h3>Welcome to <span style="color:#aec62c; text-transform:uppercase;font-size:24px;">Basica!</span> A free fully responsive Bootstrap 3 HTML5 template!</h3> <a href="http://www.vactualart.com/portfolio-item/basica-a-free-html5-template/" class="btn btn-orange">Download here!</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Call to Action Bar -->


<!-- Services -->
<div class="section section-white">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="service-wrapper">
                    <i class="icon-home"></i>
                    <h3>Создание сайтов</h3>
                    <p>Praesent rhoncus mauris ac sollicitudin vehicula. Nam fringilla turpis turpis, at posuere turpis aliquet sit amet condimentum</p>
                    <a href="#" class="btn">Read more</a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="service-wrapper">
                    <i class="icon-briefcase"></i>
                    <h3>Создание сайтов</h3>
                    <p>Suspendisse eget libero mi. Fusce ligula orci, vulputate nec elit ultrices, ornare faucibus orci. Aenean lectus sapien, vehicula</p>
                    <a href="#" class="btn">Read more</a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="service-wrapper">
                    <i class="icon-calendar"></i>
                    <h3>Создание сайтов</h3>
                    <p>Phasellus posuere et nisl ac commodo. Nulla facilisi. Sed tincidunt bibendum cursus. Aenean vulputate aliquam risus rutrum scelerisque</p>
                    <a href="#" class="btn">Read more</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Services -->


<hr>

<!-- Our Portfolio -->

<div class="section section-white">
    <div class="container">
        <div class="row">

            <div class="section-title">
                <h1>Our Recent Works</h1>
            </div>


            <ul class="grid cs-style-3">
                <div class="col-md-4 col-sm-6">
                    <figure>
                        <img src="img/portfolio/4.jpg" alt="img04">
                        <figcaption>
                            <h3>Settings</h3>
                            <span>Jacob Cummings</span>
                            <a href="portfolio-item.php">Take a look</a>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-md-4 col-sm-6">
                    <figure>
                        <img src="img/portfolio/1.jpg" alt="img01">
                        <figcaption>
                            <h3>Camera</h3>
                            <span>Jacob Cummings</span>
                            <a href="portfolio-item.php">Take a look</a>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-md-4 col-sm-6">
                    <figure>
                        <img src="img/portfolio/2.jpg" alt="img02">
                        <figcaption>
                            <h3>Music</h3>
                            <span>Jacob Cummings</span>
                            <a href="portfolio-item.php">Take a look</a>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-md-4 col-sm-6">
                    <figure>
                        <img src="img/portfolio/5.jpg" alt="img05">
                        <figcaption>
                            <h3>Safari</h3>
                            <span>Jacob Cummings</span>
                            <a href="portfolio-item.php">Take a look</a>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-md-4 col-sm-6">
                    <figure>
                        <img src="img/portfolio/3.jpg" alt="img03">
                        <figcaption>
                            <h3>Phone</h3>
                            <span>Jacob Cummings</span>
                            <a href="portfolio-item.php">Take a look</a>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-md-4 col-sm-6">
                    <figure>
                        <img src="img/portfolio/6.jpg" alt="img06">
                        <figcaption>
                            <h3>Game Center</h3>
                            <span>Jacob Cummings</span>
                            <a href="portfolio-item.php">Take a look</a>
                        </figcaption>
                    </figure>
                </div>
            </ul>
        </div>
    </div>
</div>
<!-- Our Portfolio -->

<hr>

<!-- Our Clients -->
<!--<div class="section">
    <div class="container">

        <div class="section-title">
            <h1>Our Success Stories</h1>
        </div>

        <div class="clients-logo-wrapper text-center row">
            <div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/logo-1.jpg" alt="Client Name"></a></div>
            <div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/logo-2.jpg" alt="Client Name"></a></div>
            <div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/logo-3.jpg" alt="Client Name"></a></div>
            <div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/logo-4.jpg" alt="Client Name"></a></div>
            <div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/logo-5.jpg" alt="Client Name"></a></div>
            <div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/logo-6.jpg" alt="Client Name"></a></div>
            <div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/logo-7.jpg" alt="Client Name"></a></div>
            <div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/logo-8.jpg" alt="Client Name"></a></div>
            <div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/logo-9.jpg" alt="Client Name"></a></div>
            <div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/logo-10.jpg" alt="Client Name"></a></div>
            <div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/logo-11.jpg" alt="Client Name"></a></div>
            <div class="col-lg-1 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/logo-12.jpg" alt="Client Name"></a></div>
        </div>
    </div>
</div> -->
<!-- End Our Clients -->

<!-- Footer -->
<div class="footer">
    <div class="container">

        <div class="row">

            <div class="col-footer col-md-6 col-xs-12">
                <h3>Contact Us</h3>
                <p class="contact-us-details">
                    <b>Address:</b> 123 Downtown Avenue, Manhattan, New York, United States of America<br/>
                    <b>Phone:</b> +1 123 45678910<br/>
                    <b>Fax:</b> +1 123 45678910<br/>
                    <b>Email:</b> <a href="mailto:info@yourcompanydomain.com">info@yourcompanydomain.com</a>
                </p>
            </div>
            <!-- <div class="col-footer col-md-2 col-xs-3">
             <h3>Our Social Networks</h3>
               <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam.</p>
               <div>
                   <img src="img/icons/facebook.png" width="32" alt="Facebook">
                   <img src="img/icons/twitter.png" width="32" alt="Twitter">
                   <img src="img/icons/linkedin.png" width="32" alt="LinkedIn">
                   <img src="img/icons/rss.png" width="32" alt="RSS Feed">
               </div>
            </div>-->
            <div class="col-footer col-md-6 col-xs-12">
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