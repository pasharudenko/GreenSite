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
                <li {if $array_meta[i].page=="order"}class="active"{/if}><a href="{$array_meta[i].page}.php">{$array_meta[i].name}</a></li>{/section}


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
            <div class="col-md-6">
                <h1>Contact Us</h1>
            </div>
        </div>
    </div>
</div>

<div class="section ">

    <div>
        <center>
            <h3>Оставьте заявку у нас</h3>
            <p class="contact-us-details">
            <form id="contactForm">
                <div class="row">





                    <div class="col-sm-12">

                        <div class="form-group has-feedback">
                            <label for="name" class="control-label">Введите ваше имя:</label>
                            <input type="text" id="name" name="name" class="form-control" required="required" value="" placeholder="Например, Иван Иванович" minlength="2" maxlength="30">
                            <span class="glyphicon form-control-feedback"></span>
                        </div>
                    </div>
                    <div class="col-sm-12">

                        <div class="form-group has-feedback">
                            <label for="email" class="control-label">Введите адрес email:</label>
                            <input type="email" id="email" name="email" class="form-control" required="required"  value="" placeholder="Например, ivan@mail.ru" maxlength="30">
                            <span class="glyphicon form-control-feedback"></span>
                        </div>
                    </div>
                    <div class="col-sm-12">

                        <div class="form-group has-feedback">
                            <label for="email" class="control-label">Введите номер:</label>
                            <input type="email" id="email" name="email" class="form-control" required="required"  value="" placeholder="Например, +380000000000" maxlength="30">
                            <span class="glyphicon form-control-feedback"></span>
                        </div>
                    </div>

                </div>






                <div class="form-group has-feedback">
                    <label for="message" class="control-label">Введите сообщение:</label>
                    <textarea id="message" class="form-control" rows="3" placeholder="Введите сообщение от 20 до 500 символов" minlength="20" maxlength="500" required="required"></textarea>
                </div>





                <button type="submit" class="btn btn-primary pull-right">Отправить сообщение</button>
            </form>

            </p>
        </center>
    </div>
    <!--  <div class="col-sm-12" style="padding:0;">

          <div id="contact-us-map">
              <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe>
              <br />
              <small>
                  <a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A"></a>
              </small>
              </iframe>
          </div>

      </div>-->


</div>
<div class="section ">

</div>
<div class="section">

</div>
<!-- Footer -->

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

            <!--<div class="col-footer col-md-4 col-xs-6">
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