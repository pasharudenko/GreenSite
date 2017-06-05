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

    <title>BASICA! A Free Bootstrap3 HTML5 CSS3 Template by Vactual Art</title>

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
                <li {if $array_meta[i].page=="about-us"}class="active"{/if}><a href="{$array_meta[i].page}.php">{$array_meta[i].name}</a></li>{/section}


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
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
<script src="js/bootstrap.min.js"></script>

<!-- Scrolling Nav JavaScript -->
<script src="js/jquery.easing.min.js"></script>
<script src="js/scrolling-nav.js"></script>

</body>
</html>