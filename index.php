<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo('name') ?></title>
	<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/normalize.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
	<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/fontawesome-free-5.8.1-web/css/all.min.css">
</head>
<body style="background-color:#206876;">

	<header>
	<div class="container">
		<div class="row ">
			<div class="col-xl-4" id="logo">
				<img src="img/logo.png" alt="">
			</div>	
			<div class="col-xl-8" id="bl-menu">
				<h2>Шумерлнский политехнический техникум</h2>
				<p>Министерства образования и молодежной политики Чувашской Республики.</p>
				
			</div>
		</div>
	</div>
	</header>

	<!-- director -->

	<div class="container">
		<div class="row" id="block2">
			<div class="col-xl-4" id="bl2-cont1">
				<input type="search">
				<input type="search">

				<div class="col-xl-10 offset-xl-1" id="director">
					<img src="<?php bloginfo('template_url') ?>img/director.jpg" alt="" width="85%">
					<br>
					<h5>Ларина Татьяна Александровна</h5>
				</div>
			</div>

			<!-- slider -->

			<div class="col-xl-5" style="height: 400px">
				 <div class="slider" style="height: 100px;">
    				<img src="img/director.jpg" alt="" style="height: 390px;">
    				<img src="img/director.jpg" alt="" style="height: 390px;">
    				<img src="img/director.jpg" alt="" style="height: 390px;">
  				</div>
			</div>
			<div class="col-xl-3 " id="svyaz">
				<div class="col-xl-10 offset-xl-1" id="priem">	
					<h4 style="color:white">Электронная 
					приемная</h4>
					<form action="#" method="post" id="form">
						<div class="input">
  							<input type="text" class="form-control" placeholder="Name" name="name" id="input">
  							<input type="email" class="form-control" placeholder="Email" name="email" id="input">
 							<textarea type="text"  class="form-control" placeholder="Message" name="mess" id="input" cols="30" rows="10"></textarea>
						</div>
							<input type="submit" id="form-submit" class="btn btn-warning btn-lg pull-right " value="Send message" class="full2" name="submit"></input>
					</form>
				</div>
				<script type="text/javascript" src="https://vk.com/js/api/openapi.js?160"></script>

				<!-- VK Widget -->

				<div id="vk_groups"></div>
					<script type="text/javascript">
						VK.Widgets.Group("vk_groups", {mode: 3}, 20003922);
					</script>
			</div>
		</div>
	</div>

	<!-- горизонтальное меню -->

	<div class="container">
		<div class="row" id="block3">
			<div class="col-xl-3" id="info">
				<br>
				<h5><a href="#">Главная страница</a></h5>
				<h5><a href="#">Общие сведения</a></h5>
				<h5><a href="#">Абитуриенту</a></h5>
				<h5><a href="#">Достижения</a></h5>
				<h5><a href="#">Новости</a></h5>
				<h5><a href="#">Реквизиты</a></h5>
				<h5><a href="#">Трудоустройство</a></h5>
				<h5><a href="#">Полезные ссылки</a></h5>
				<br>
				<div class="col-xl-10 offset-xl-1" id="WhiteCube">
					
				</div>
			</div>
			
			<div class="col-xl-6" id="news">
				<h2>Новости ШПТ <i class="far fa-newspaper"></i></h2>
			</div>

			<div class="col-xl-3" id="banners">
				 <div class="slider" style="height: 100px;">
    				<img src="img/director.jpg" alt="" style="height: 100px;">
    				<img src="img/director.jpg" alt="" style="height: 100px;">
    				<img src="img/director.jpg" alt="" style="height: 100px;">
  				</div>
  				<div class="slider" style="height: 100px;">
    				<img src="img/director.jpg" alt="" style="height: 100px;">
    				<img src="img/director.jpg" alt="" style="height: 100px;">
    				<img src="img/director.jpg" alt="" style="height: 100px;">
  				</div>
  				<div class="slider" style="height: 100px;">
    				<img src="img/director.jpg" alt="" style="height: 100px;">
    				<img src="img/director.jpg" alt="" style="height: 100px;">
    				<img src="img/director.jpg" alt="" style="height: 100px;">
  				</div>

			</div>
		</div>
	</div>
	<footer>
		<div class="container">
			<div class="row" id="footer">

			</div>
		</div>
	</footer>

<!-- <script src="bootstrap/js/bootstrap.min.js"></script> -->

<script src="<?php bloginfo('template_url');?>/https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="<?php bloginfo('template_url');?>/https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
<script src="<?php bloginfo('template_url');?>/https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="<?php bloginfo('template_url');?>/fontawesome-free-5.8.1-web/js/all.min.js" ></script>
<script src="<?php bloginfo('template_url');?>/js/script.js"></script>
</body>
</html>