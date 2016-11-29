<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Главная</title>

	<link rel="stylesheet" href="libs/bootstrap/bootstrap-grid-3.3.1.min.css" />
	<!-- <link rel="stylesheet" href="libs/font-awesome/4.6.3/css/font-awesome.css" /> -->
	<link rel="stylesheet" href="libs/fancybox/jquery.fancybox.css" />
	<link rel="stylesheet" href="libs/owl.carousel/assets/owl.carousel.css" />
	<link rel="stylesheet" href="libs/wow/animate.css">
	<link type="text/css" href="css/jquery.jscrollpane.css" rel="stylesheet" media="all" />

	<link rel="shortcut icon" href="favicon.ico" />
	<link rel="stylesheet" href="css/style.css">

</head>
<body>
	<script src="libs/jquery/jquery-1.11.1.min.js"></script>
	<script src="libs/owl.carousel/owl.carousel.js"></script>
	<script src="libs/fancybox/jquery.fancybox.pack.js"></script>
	<script src="libs/wow/wow.min.js"></script>
	<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
	<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>

	<script>
		new WOW().init();
	</script>

	<script src="js/responsiveTabs.js"></script>
	<script src="js/jquery.maskedinput.min.js"></script>
	<script src="js/common.js"></script>
	
	<?php require_once('includes/header.php'); ?>

	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<?php require_once('includes/sidebar-left.php'); ?>
			</div>
			<div class="col-md-6">
				<?php require_once('includes/tabs.php'); ?>
				<?php require_once('includes/mylist.php'); ?>
				<?php require_once('includes/popularlist.php'); ?>
				<?php require_once('includes/onlinelist.php'); ?>
				<?php require_once('includes/seotext.php'); ?>
			</div>
			<div class="col-md-3">
				<?php require_once('includes/sidebar-right.php'); ?>
			</div>
			<div class="clearfix"></div>	
		</div>
	</div>

	<?php require_once('includes/footer.php'); ?>
	
	<button id="btn1">btn1</button>
	<a name='modal' href='pro100pro'>link1</a>
	<div id="mask"></div>
	<div id="zvonok" class="window">
		<form action="" class="common-form form1">			
			<span class="form-title">Войти на сайт</span>
			<div class="an-exit">
				<span class="an-exit__krest"></span>
			</div>
			<div class="de-dashed-line"></div>
			<input type="text" name="ulog" placeholder="Логин..." class="phone">
			<input type="text" name="upas" placeholder="Пароль..." class="phone">
			<input type="checkbox" id="formsaveme" value="checked"><label for="formsaveme">Запомнить меня</label>
			<input type="submit" id="form1_submit" value="Войти">
		</form>
		<div class="de-dashed-line"></div>
		<div class="soc_items">
			<div class="caption">Войти с помощью</div>
			<ul class="soci">
				<li>11</li>
				<li>22</li>
				<li>33</li>
			</ul>
		</div>
		<div class="de-dashed-line"></div>
	</div>
	
</body>
</html>

