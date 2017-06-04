<!doctype html>
<html class="fuelux" lang="ru">
<head>

	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=2.5, user-scalable=no" />

	<title>Админ-панель</title>




	<!-- Theme Styles -->


<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/demo.css">
<link rel="stylesheet" type="text/css" href="css/styles.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css">
	<link rel="stylesheet" type="text/css" href="themes/blue/style.css">

	<link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css">
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.structure.min.css">
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.theme.min.css">

<link href="css/tables.css" rel="stylesheet" type="text/css"  media="all"  />
<link href="css/icons.css" rel="stylesheet" type="text/css"  media="all"  />
<!-- <link rel="stylesheet" type="text/css" href="/css/buttons.css"> -->





	<link rel="shortcut icon" href="favicon.ico" type="image/png">
	<link rel="shortcut icon" type="image/png" href="favicon.ico" />
     	<link rel="stylesheet" href="modal window/reveal.css">	
	  		<style type="text/css">
			body { font-family: "HelveticaNeue","Helvetica-Neue", "Helvetica", "Arial", sans-serif; }
			.big-link { display:block; margin-top: 100px; text-align: center; font-size: 70px; color: #06f; }
		</style>
		<!-- Attach necessary scripts -->
		<!-- <script type="text/javascript" src="jquery-1.4.4.min.js"></script> -->
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.min.js"></script>
		<script type="text/javascript" src="modal window/jquery.reveal.js"></script>
		
	
<script src="http://yandex.st/jquery/1.9.1/jquery.js"></script>

</head>

<body class="no-margin-top">

	<!-- Left Sidebar Start -->
	<div class="sidebar sidebar-left" style="position: fixed">

		<!-- Logo Start -->
		<div class="logo-container">
			<a href="" target="_blank"><h1 style="font-size: 20px;">Web-разработка</h1></a>
		</div>
		<!-- Logo End -->

		<!-- User Profile Start -->
		< <div class="sidebar-user-profile">
	
			<div class="avatar">
				<img src="img/{$userphoto}" alt="Jane Doe" style="        margin-left: -1%;
		    margin-right: 20%;
		    width: 68px; background-position: cover;"/>
			</div>
		
			<div class="ul-icons">
				<span class="user-info" style="font-size: 13px !important;">{$username}, добро пожаловать!</span>
				<br />
				<br />
				<!--<ul class="icon-list">
					
					<li><a href="profile.html"><i class="fa fa-cog"></i></a></li>
					<li><a href="request.php"><i class="fa fa-comments"></i></a></li>
				</ul>0-->
			</div>
		
		</div>
		<!-- User Profile End -->

		<!-- Menu Start -->
		<ul class="active main-menu">
			<li>
				<a href="index.php">
					<i class="fa fa-home"></i>
					<span>Страницы</span>
				</a>
			</li>
			<li class="has-submenu">
				<a href="">
					<i class="fa fa-home"></i>
					<span>Портфолио</span>
				</a>
				<ul class="submenu">
					<li>
						<a href="">Добавить</a>
					</li>
					<li>
						<a href="">Показать все</a>
					</li>
				</ul>
			</li>
			{*<li class="">
				<a href="schedule.php"><i class="fa fa-text-width"></i><span> График работы</span></a>
				
			</li>*}
		
		<!--	<li class="has-submenu">
				<a href="#">
					<i class="fa fa-cog"></i>
					<span>Дизайны</span>
				</a>
				<ul class="submenu">
					<li>
						<a href="index.php">Текущий</a>
					</li>
		
				</ul>
			</li>-->
			
            
            
            
            
            
            
            
            	<li class="has-submenu">
				<a href="index.php">
					<i class="fa fa-home"></i>
					<span>Клиенты</span>
				</a>
                	<ul class="submenu">
					<li>
						<a href="out.php">Заказы</a>
					</li>
		        	<li>
						<a href="archive.php">Архив</a>
					</li>
				</ul>
			</li>
            
            
            
            
            
            
            
      
            
            
			

	



		


			

		</ul>


	</div>
	<!-- Left Sidebar End -->

	<!-- Top Content Bar Start -->
	<div class="top-bar">
		<div class="main-container">
		<div class="container">
			<div class="row">

				<div class="col-lg-8 col-sm-8 hidden-xs">
					<form action="request_archive.php" method="post" id="form_main_tpl">
						<ul class="left-icons" style="    font-size: 19px;
		margin-right: 12px;
		margin: 0;
		padding: 0;
		list-style: none;
		display: inline;
		padding-top: 25px;
		position: absolute;">
							<li style="display: inline; margin-right: 18px;"><a href="#" class="sidebar-collapse"><i class="fa fa-dedent"></i></a></li>
							<!--<li style="display: inline;">
								<a href="request.php" style="color: #ff503f;">
									<i class="fa fa-envelope"></i>
									{if $summ_notification != 0}<span id="sound_notify" class="" style="font-size: 15px; font-weight: 600;">{$summ_notification}</span>{/if}
								</a>
								  <!-- <div class="notification-box">
									<div class="inner">
									  <ul class="mail-list">
										<li class="starred">Subject example <span>1 hour ago</span></li>
										<li>Hey! <span>2 hours ago</span></li>
										<li>Welcome back! <span>7 days ago</span></li>
									  </ul>
									</div>
								  </div>
							</li>
							&nbsp;

							<li style="display: inline; margin-right: 18px;"><input type="text" size="8" id="date_from1" style="font-size: 14px; class="form-control" name="data_from" placeholder="От"></li>
							<li style="display: inline; margin-right: 18px;"><input type="text" size="8" id="date_to1" style="font-size: 14px; class="form-control" name="data_to" placeholder="До"></li>
							<li style="display: inline; margin-right: 18px;"><input type="submit" style="font-size: 14px;" name="search" value="Искать"></li>



							<li style="display: inline; margin-right: 18px;"><select style="font-size: 12px; width: 100px;" name="select_period" id="select_period"><option value="cur_month" {if $cm == 1}selected="selected"{/if}>Текущий месяц</option><option value="last_month" {if $lm == 1}selected="selected"{/if}>Прошлый месяц</option><option value="cur_year" {if $cy == 1}selected="selected"{/if}>Текущий год</option><option value="last_year" {if $ly == 1}selected="selected"{/if}>Прошлый год</option></select></li>
							-->

						</ul>
					</form>
				</div>

				<div class="col-lg-4 col-sm-4 col-xs-12">
					<ul class="right-icons" style="    width: 500px;
    p: 16px;
    right: 4px;
    /* margin-right: 78px; */
    margin: 0;
    padding: 0;
    list-style: none;
    display: inline-block;
    padding-top: 25px;
    float: right;
    position: absolute;
		">

						<li style="    display: inline;
    margin-right: 18px;">
							<a href="#" class="welcome-user">Добро пожаловать, {$username}</a>
						</li>
						<li style="display: inline; margin-right: 18px;">
							<a href="#" data-reveal-id="myModal"><i class="fa fa-power-off"></i></a>
             
						</li>
  
					</ul>
				</div>

			</div>
		</div>
		</div>

	</div>
<div id="myModal" class="reveal-modal">
			<h1>Do you really want to exit?</h1>
            <input type="button" value="Exit" class="exit" name="submit1" id="submit1"/>
        
			<!--<p>This is a default modal in all its glory, but any of the styles here can easily be changed in the CSS.</p>-->
			<a class="close-reveal-modal">&#215;</a>
		</div>
        {literal}
       <script type="text/javascript">
        $('#submit1').click(function()
        {
           location.replace("exit.php"); 
        });
       </script>
        {/literal}
	<div class="content" id="content-container">
		<div class="main-container">

			<div class="container">
				<div class="row">







			{$content}



				</div>
			</div>

		</div>
	</div>
	<!-- Content End -->

<!-- Javascript -->
{literal}

<script src="http://sweetbox.cool/p0o9l8m1a2x3/assets/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery-ui.js" type="text/javascript"></script>
	<script src="js/ui.js" type="text/javascript"></script>
	<script src="assets/jquery.tablesorter.min.js" type="text/javascript"></script>

<script src="http://sweetbox.cool/p0o9l8m1a2x3/assets/bootstrap.min.js" type="text/javascript"></script>
<script src="http://sweetbox.cool/p0o9l8m1a2x3/assets/flotcharts-common.js"></script>
<script src="http://sweetbox.cool/p0o9l8m1a2x3/assets/jquery.flot.min.js"></script>
<script src="http://sweetbox.cool/p0o9l8m1a2x3/assets/jquery.flot.resize.min.js"></script>
<script src="http://sweetbox.cool/p0o9l8m1a2x3/assets/jquery.flot.canvas.min.js"></script>
<script src="http://sweetbox.cool/p0o9l8m1a2x3/assets/jquery.flot.image.min.js"></script>
<script src="http://sweetbox.cool/p0o9l8m1a2x3/assets/jquery.flot.categories.min.js"></script>
<script src="http://sweetbox.cool/p0o9l8m1a2x3/assets/jquery.flot.crosshair.min.js"></script>
<script src="http://sweetbox.cool/p0o9l8m1a2x3/assets/jquery.flot.errorbars.min.js"></script>
<script src="http://sweetbox.cool/p0o9l8m1a2x3/assets/jquery.flot.fillbetween.min.js"></script>
<script src="http://sweetbox.cool/p0o9l8m1a2x3/assets/jquery.flot.navigate.min.js"></script>
<script src="http://sweetbox.cool/p0o9l8m1a2x3/assets/jquery.flot.pie.min.js"></script>
<script src="http://sweetbox.cool/p0o9l8m1a2x3/assets/jquery.flot.selection.min.js"></script>
<script src="http://sweetbox.cool/p0o9l8m1a2x3/assets/jquery.flot.stack.min.js"></script>
<script src="http://sweetbox.cool/p0o9l8m1a2x3/assets/jquery.flot.symbol.min.js"></script>
<script src="http://sweetbox.cool/p0o9l8m1a2x3/assets/jquery.colorhelpers.min.js"></script>
<script src="http://sweetbox.cool/p0o9l8m1a2x3/assets/jquery.flot.time.min.js"></script>
<script src="http://sweetbox.cool/p0o9l8m1a2x3/assets/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="http://sweetbox.cool/p0o9l8m1a2x3/assets/sidebar.min-height.js" type="text/javascript"></script>
<script src="http://sweetbox.cool/p0o9l8m1a2x3/assets/all-pages.js" type="text/javascript"></script>




	<script src="js/search_kb.js" type="text/javascript"></script>
	<script src="js/search_archive.js" type="text/javascript"></script>
<script src="assets/scripts.js" type="text/javascript"></script>
<script src="assets/scripts1.js" type="text/javascript"></script>
<script src="assets/scripts2.js" type="text/javascript"></script>
<script src="assets/scripts3.js" type="text/javascript"></script>

	<script>

			jQuery('#select_period').change(function() {
				jQuery('#form_main_tpl').submit();
			});

	</script>

<!-- <script type="text/javascript">
$(document).ready(function () {
	$('.fb').fancybox();
});
</script> -->








<!-- <script type="text/javascript">


//Добавляем HTML5 Audio тэг в HTML Body
$('<audio id="chatAudio"><source src="../sound/notify.ogg" type="audio/ogg"><source src="../sound/notify.mp3" type="audio/mpeg"><source src="../sound/notify.wav" type="audio/wav"></audio>').appendTo('body');
 
var num_not = $('#sound_notify').text();
if($('#sound_notify').text() > 0) {
$('#chatAudio')[0].play();
}

</script> -->




{/literal}










</body>
</html>