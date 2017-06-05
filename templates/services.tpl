<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>{$meta_title}</title>
    <meta name="meta_description" content="{$meta_description}"/>
    <meta name="meta_key_words" content="{$meta_key_words}"/>


    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/main.css">
    <link href="css/custom.css" rel="stylesheet">

    <script src="//use.edgefonts.net/bebas-neue.js"></script>

    <!-- Custom Fonts & Icons -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/icomoon-social.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>


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
                {section loop=$array_meta name=i}
                <li {if $array_meta[i].page=="services"}class="active"{/if}><a href="{$array_meta[i].page}.php">{$array_meta[i].name}</a></li>{/section}


                <a href="{$script}?lang=eng"><img src="img/eng.jpg" width="100px"></a>&nbsp&nbsp&nbsp

                <a href="{$script}?lang=ru"><img src="img/rus1.jpg" width="100px"></a>


            </ul>
        </div>
    </div>
</header><!--/header-->


<!-- Page Title -->
<div class="section section-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Our Services </h1>
            </div>
        </div>
    </div>
</div>


<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2>We are leading company</h2>
                <h3>Specializing in Wordpress Theme Development</h3>
                <p>
                    Donec elementum mi vitae enim fermentum lobortis. In hac habitasse platea dictumst. Ut pellentesque, orci sed mattis consequat, libero ante lacinia arcu, ac porta lacus urna in lorem. Praesent consectetur tristique augue, eget elementum diam suscipit id. Donec elementum mi vitae enim fermentum lobortis. In hac habitasse platea dictumst. Ut pellentesque, orci sed mattis consequat, libero ante lacinia arcu, ac porta lacus urna in lorem. Praesent consectetur tristique augue, eget elementum diam suscipit id.
                </p>
                <p>
                    Donec elementum mi vitae enim fermentum lobortis. In hac habitasse platea dictumst. Ut pellentesque, orci sed mattis consequat, libero ante lacinia arcu, ac porta lacus urna in lorem. Praesent consectetur tristique augue, eget elementum diam suscipit id.
                </p>
            </div>
        </div>
    </div>
</div>

<hr>

<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="service-wrapper">
                    <i class="icon-calendar"></i>
                    <h3>Разработка сайтов</h3>
                    <p>Praesent rhoncus mauris ac sollicitudin vehicula. Nam fringilla turpis turpis, at posuere turpis aliquet sit amet condimentum</p>
                    <a href="#" class="btn">Read more</a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="service-wrapper">
                    <i class="icon-briefcase"></i>
                    <h3>Curabitur mollis</h3>
                    <p>Suspendisse eget libero mi. Fusce ligula orci, vulputate nec elit ultrices, ornare faucibus orci. Aenean lectus sapien, vehicula</p>
                    <a href="#" class="btn">Read more</a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="service-wrapper">
                    <i class="icon-th-large"></i>
                    <h3>Vivamus mattis</h3>
                    <p>Phasellus posuere et nisl ac commodo. Nulla facilisi. Sed tincidunt bibendum cursus. Aenean vulputate aliquam risus rutrum scelerisque</p>
                    <a href="#" class="btn">Read more</a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="service-wrapper">
                    <i class="icon-home"></i>
                    <h3>Aliquam in adipiscing</h3>
                    <p>Praesent rhoncus mauris ac sollicitudin vehicula. Nam fringilla turpis turpis, at posuere turpis aliquet sit amet condimentum</p>
                    <a href="#" class="btn">Read more</a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="service-wrapper">
                    <i class="icon-cog"></i>
                    <h3>Curabitur mollis</h3>
                    <p>Suspendisse eget libero mi. Fusce ligula orci, vulputate nec elit ultrices, ornare faucibus orci. Aenean lectus sapien, vehicula</p>
                    <a href="#" class="btn">Read more</a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="service-wrapper">
                    <i class="icon-camera"></i>
                    <h3>Vivamus mattis</h3>
                    <p>Phasellus posuere et nisl ac commodo. Nulla facilisi. Sed tincidunt bibendum cursus. Aenean vulputate aliquam risus rutrum scelerisque</p>
                    <a href="#" class="btn">Read more</a>
                </div>
            </div>
        </div>
    </div>
</div>


<hr>

<!--<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <div class="pricing-wrapper">

                    <div class="pricing-plan">
                        <h2 class="pricing-plan-title">Starter</h2>
                        <div class="pricing-plan-price">FREE</div>
                        <ul class="pricing-plan-features">
                            <li><strong>1</strong> user</li>
                            <li><strong>Unlimited</strong> projects</li>
                            <li><strong>2GB</strong> storage</li>
                        </ul>
                        <a href="index.php" class="btn">Order Now</a>
                    </div>

                    <div class="pricing-plan">
                        <h2 class="pricing-plan-title">Advanced</h2>
                        <div class="pricing-plan-price">$49<span>/mo</span></div>
                        <ul class="pricing-plan-features">
                            <li><strong>10</strong> users</li>
                            <li><strong>Unlimited</strong> projects</li>
                            <li><strong>20GB</strong> storage</li>
                        </ul>
                        <a href="index.php" class="btn">Order Now</a>
                    </div>

                    <div class="pricing-plan pricing-plan-promote">
                        <h2 class="pricing-plan-promote-title">Premium</h2>
                        <div class="pricing-plan-promote-price">$99<span>/mo</span></div>
                        <ul class="pricing-plan-promote-features">
                            <li><strong>Unlimited</strong> users</li>
                            <li><strong>Unlimited</strong> projects</li>
                            <li><strong>100GB</strong> storage</li>
                        </ul>
                        <a href="index.php" class="btn btn-green">Order Now</a>
                    </div>
                    <div class="pricing-plan">

                        <div class="ribbon-wrapper">
                            <div class="price-ribbon ribbon-green">New</div>
                        </div>
                        <h2 class="pricing-plan-title">Mega</h2>
                        <div class="pricing-plan-price">$199<span>/mo</span></div>
                        <ul class="pricing-plan-features">
                            <li><strong>Unlimited</strong> users</li>
                            <li><strong>Unlimited</strong> projects</li>
                            <li><strong>100GB</strong> storage</li>
                        </ul>
                        <a href="index.php" class="btn">Order Now</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>-->


<hr>

<!-- Our Clients -->
<!--<div class="section">
    <div class="container">
        <h2>Our Happy Clients</h2>
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
</div>-->
<!-- End Our Clients -->

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
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
<script src="js/bootstrap.min.js"></script>

<!-- Scrolling Nav JavaScript -->
<script src="js/jquery.easing.min.js"></script>
<script src="js/scrolling-nav.js"></script>