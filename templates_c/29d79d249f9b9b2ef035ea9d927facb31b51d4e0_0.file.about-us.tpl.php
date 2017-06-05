<?php /* Smarty version 3.1.25, created on 2017-06-05 19:35:44
         compiled from "D:\OpenServer\domains\GreenSite\templates\about-us.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1089259358860d32de5_90593369%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '29d79d249f9b9b2ef035ea9d927facb31b51d4e0' => 
    array (
      0 => 'D:\\OpenServer\\domains\\GreenSite\\templates\\about-us.tpl',
      1 => 1496680543,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1089259358860d32de5_90593369',
  'variables' => 
  array (
    'meta_title' => 0,
    'meta_description' => 0,
    'meta_key_words' => 0,
    'array_meta' => 0,
    'script' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.25',
  'unifunc' => 'content_59358860dabf54_33305604',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59358860dabf54_33305604')) {
function content_59358860dabf54_33305604 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1089259358860d32de5_90593369';
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
                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['array_meta']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
                <li <?php if ($_smarty_tpl->tpl_vars['array_meta']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['page'] == "about-us") {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['array_meta']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['page'];?>
.php"><?php echo $_smarty_tpl->tpl_vars['array_meta']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</a></li><?php endfor; endif; ?>


                <a href="<?php echo $_smarty_tpl->tpl_vars['script']->value;?>
?lang=eng"><img src="img/eng.jpg" width="100px"></a>&nbsp&nbsp&nbsp

                <a href="<?php echo $_smarty_tpl->tpl_vars['script']->value;?>
?lang=ru"><img src="img/rus1.jpg" width="100px"></a>


            </ul>
        </div>
    </div>
</header><!--/header-->

<!-- Page Title -->
<div class="section section-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>About Us</h1>
            </div>
        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <img class="img-responsive" src="img/about-us.jpg" alt="About Us">
            </div>
            <div class="col-sm-8">
                <h2>We are a Graphic Design company</h2>
                <h3>Specializing in Wordpress Theme Development</h3>
                <p>
                    Donec elementum mi vitae enim fermentum lobortis. In hac habitasse platea dictumst. Ut pellentesque, orci sed mattis consequat, libero ante lacinia arcu, ac porta lacus urna in lorem. Praesent consectetur tristique augue, eget elementum diam suscipit id. Donec elementum mi vitae enim fermentum lobortis. In hac habitasse platea dictumst. Ut pellentesque, orci sed mattis consequat, libero ante lacinia arcu, ac porta lacus urna in lorem. Praesent consectetur tristique augue, eget elementum diam suscipit id.
                </p>
                <p>
                    Donec elementum mi vitae enim fermentum lobortis. In hac habitasse platea dictumst. Ut pellentesque, orci sed mattis consequat, libero ante lacinia arcu, ac porta lacus urna in lorem. Praesent consectetur tristique augue, eget elementum diam suscipit id.
                </p>
                <h3>Wide range of services</h3>
                <p>
                    Interdum et malesuada fames ac ante ipsum primis in faucibus. Nam condimentum laoreet sagittis. Duis quis ullamcorper leo. Suspendisse potenti.
                    Interdum et malesuada fames ac ante ipsum primis in faucibus. Nam condimentum laoreet sagittis. Duis quis ullamcorper leo. Suspendisse potenti.
                </p>



                <!--<div class="clients-logo-wrapper text-center row">
                    <div class="col-lg-2 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/logo-1.jpg" alt="Client Name"></a></div>
                    <div class="col-lg-2 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/logo-2.jpg" alt="Client Name"></a></div>
                    <div class="col-lg-2 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/logo-3.jpg" alt="Client Name"></a></div>
                    <div class="col-lg-2 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/logo-4.jpg" alt="Client Name"></a></div>
                    <div class="col-lg-2 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/logo-5.jpg" alt="Client Name"></a></div>
                    <div class="col-lg-2 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/logo-6.jpg" alt="Client Name"></a></div>
                </div>-->
            </div>
        </div>
    </div>
</div>

       <hr>

<!-- <div class="section">
<div class="container">
   <div class="row">

        <div class="col-md-4 col-sm-6">
            <div class="team-member">

                <div class="team-member-image"><img src="img/team/1.jpg" alt="Name Surname"></div>
                <div class="team-member-info">
                    <ul>

                        <li class="team-member-name">
                            Nicolas Freeman

                                    <span class="team-member-social">
                                        <a href="#"><i class="icon-facebook"></i></a>
                                        <a href="#"><i class="icon-github"></i></a>
                                        <a href="#"><i class="icon-tumblr"></i></a>
                                    </span>
                        </li>
                        <li>Web Developer</li>
                    </ul>
                </div>
            </div>
        </div>

      <div class="col-md-4 col-sm-6">
             <div class="team-member">
                 <div class="team-member-image"><img src="img/team/2.jpg" alt="Name Surname"></div>
                 <div class="team-member-info">
                     <ul>
                         <li class="team-member-name">
                             Sarah Tipton
                                     <span class="team-member-social">
                                         <a href="#"><i class="icon-facebook"></i></a>
                                         <a href="#"><i class="icon-dribbble"></i></a>
                                         <a href="#"><i class="icon-tumblr"></i></a>
                                     </span>
                         </li>
                         <li>Web Designer</li>
                     </ul>
                 </div>
             </div>
         </div>
         <div class="col-md-4 col-sm-6">
             <div class="team-member">
                 <div class="team-member-image"><img src="img/team/3.jpg" alt="Name Surname"></div>
                 <div class="team-member-info">
                     <ul>
                         <li class="team-member-name">
                             Luca Grammont
                                     <span class="team-member-social">
                                         <a href="#"><i class="icon-facebook"></i></a>
                                         <a href="#"><i class="icon-dribbble"></i></a>
                                         <a href="#"><i class="icon-tumblr"></i></a>
                                     </span>
                         </li>
                         <li>Project Manager</li>
                     </ul>
                 </div>
             </div>
         </div>
     </div>
 </div>
</div>

<hr>-->

 <!--<div class="section">
     <div class="container">
         <div class="row">

            <div class="col-sm-6 featured-news">
                <h2>Latest Blog Posts</h2>
                <div class="row">
                    <div class="col-xs-4"><a href="blog-post.php"><img src="img/blog/1.jpg" alt="Post Title"></a></div>
                    <div class="col-xs-8">
                        <div class="caption"><a href="blog-post.php">Lorem ipsum dolor sit amet</a></div>
                        <div class="date">14 August 2014 </div>
                        <div class="intro">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. <a href="blog-post.html">Read more...</a></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-4"><a href="blog-post.php"><img src="img/blog/2.jpg" alt="Post Title"></a></div>
                    <div class="col-xs-8">
                        <div class="caption"><a href="blog-post.php">Sed ut perspiciatis unde omnis</a></div>
                        <div class="date">23 June 2014 </div>
                        <div class="intro">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <a href="blog-post.html">Read more...</a></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-4"><a href="blog-post.php"><img src="img/blog/3.jpg" alt="Post Title"></a></div>
                    <div class="col-xs-8">
                        <div class="caption"><a href="blog-post.php"> Neque porro quisquam est</a></div>
                        <div class="date">21 April 2014 </div>
                        <div class="intro">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. <a href="blog-post.html">Read more...</a></div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 latest-news">
                <h2>Latest News</h2>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="caption"><a href="full-width.php">Donec elementum mi vitae enim fermentum lobortis.</a></div>
                        <div class="date">16 May 2013 </div>
                        <div class="intro">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. <a href="full-width.html">Read more...</a></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="caption"><a href="full-width.php">In hac habitasse platea dictumst.</a></div>
                        <div class="date">14 May 2013 </div>
                        <div class="intro">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <a href="full-width.html">Read more...</a></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="caption"><a href="full-width.php"> Nam condimentum laoreet sagittis.</a></div>
                        <div class="date">14 May 2013 </div>
                        <div class="intro">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <a href="full-width.html">Read more...</a></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>-->

<style type="text/css">

    #footer {
        position: fixed; /* Фиксированное положение */
        border-top: 4px solid #aec62c;
        left: 0; bottom: 0; /* Левый нижний угол */
        padding: 10px; /* Поля вокруг текста */
        background: #222; /* Цвет фона */
        color: #fff; /* Цвет текста */
        width: 100%; /* Ширина слоя */
    }
</style>

<!-- Footer -->
<div id="footer">
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
          <!--  <div class="col-footer col-md-4 col-xs-6">
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