<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Заголовок</title>
		<meta name="description" content="opisanie" />
		<meta name="keywords" content="keywords" />
		<meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />

		<link rel="stylesheet" type="text/css" href="/css/style.css" />
		<link rel="stylesheet" type="text/css" href="/css/normalize.css" />

		<link rel="icon" href="/favicon.ico" type="image/x-icon" />
		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
		<link rel="alternate" type="application/rss+xml" title="RSS Feed" href="/news/rss/" />
		
		<!— Подключение jQuery -->
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.js"></script>
		
		<!-- Карусель Брэндов на главной -->
		<script src="/js/jcarousellite.js" type="text/javascript"></script>
		<script type="text/javascript">
			$(document).ready(function(){
			  $("a.new_window").attr("target", "_blank");
			  
			  //action
			  $(".carousel").jCarouselLite({
				  visible: 1,
				  btnNext: ".next",
				  btnPrev: ".prev"
			  });

			  //novinki
			  $(".carousel-novinki").jCarouselLite({
				  visible: 4,
				  btnNext: ".next1",
				  btnPrev: ".prev1"
			  });
			  
			  //brends
			  $(".carousel-brends").jCarouselLite({
				  visible: 8,
				  btnNext: ".next2",
				  btnPrev: ".prev2"
			  });
			  
			  //hits
			  $(".carousel-hits").jCarouselLite({
				  visible: 4,
				  btnNext: ".next3",
				  btnPrev: ".prev3"
			  });
			});
		</script>

	</head>
	<body>
		<header>
			<div class="bg_header">
				<div class="bg_top_header"></div>
				<div class="wrap_bg_header_deva"><div class="bg_header_deva"></div></div>
			</div>
			<div class="wrap_head_block">
				<div class="head_block">
					<a href="/" id="logo"></a>
					<div class="top_head_content">
						<div class="top_menu">
							<ul>
								<li><a href="#">НОВОСТИ</a></li>
								<li><a href="#">БРЕНДЫ</a></li>
								<li><a href="#">КАТАЛОГ</a></li>
								<li><a href="#">SALE</a></li>
								<li><a href="#">НОВИНКИ</a></li>
								<li><a href="#">КОНТАКТЫ</a></li>
								<li><a href="#">ДОСТАВКА</a></li>
								<li><a href="#">СКИДКИ</a></li>
								<li><a href="#">ФОРУМ</a></li>
							</ul>
						</div>
						<form class="form_search" autocomplete="on" method="get" action="/" >
							<input class='search' name="name" type="text" value="" placeholder='поиск' />
							<input class="button_form" type="submit" value="" />
						</form>
						<div class="phone">8-800-333-9007<br /><span>горячая круглосуточная линия</span></div>
						<div class="head_link">
							<ul>
								<li><a href="#">войти</a></li>
								<li><a href="#">регистрация</a></li>
								<li><a href="#">обратная связь</a></li>
							</ul>
						</div>
						<div class="cart_light">В корзине<br /><a href="#">10 товаров</a></div>
					</div>
					<div class="left_menu">
						<ul>
							<li class="roditel"><a href="#">МАТЕРИАЛЫ ДЛЯ<br />НАРАЩИВАНИЯ НОГТЕЙ</a>
								<ul class="open">
									<li><a href="#">Гелевая технология</a></li>
									<li><a href="#">Акриловая технология</a></li>
									<li><a href="#">Гелевые лаки</a></li>
								</ul>
							</li>
							<li class="roditel"><a href="#">МАНИКЮР</a>
								<ul class="open">
									<li><a href="#">Гелевая технология</a></li>
									<li><a href="#">Акриловая технология</a></li>
									<li><a href="#">Гелевые лаки</a></li>
									<li><a href="#">Типсы, формы, клей, препараты<br />для ремонта ногтей</a></li>
									<li><a href="#">Пилки</a></li>
									<li><a href="#">Кисти для дизайна</a></li>
									<li><a href="#">Аппараты, инструменты,<br />аксессуары</a></li>
								</ul>
							</li>
							<li><a href="#">ПЕДИКЮР</a></li>
							<li class="roditel"><a href="#">ДЕПИЛЯЦИЯ</a>
								<ul class="open">
									<li><a href="#">Гелевая технология</a></li>
									<li><a href="#">Акриловая технология</a></li>
									<li><a href="#">Гелевая технология</a></li>
									<li><a href="#">Акриловая технология</a></li>
									<li><a href="#">Гелевые лаки</a></li>
								</ul>
							</li>
							<li><a href="#">НАРАЩИВАНИЕ РЕСНИЦ</a></li>
							<li><a href="#">ИНСТРУМЕНТЫ И<br />АКСЕССУАРЫ</a></li>
							<li><a href="#">ПЕЧАТНАЯ ПРОДУКЦИЯ</a></li>
						</ul>
					</div>
				</div>
			</div>
		</header>

		<main>
		
			<div class="breadcrumb"><a href="#">Главная</a>  /  Внутренняя</div>
			<div id="error404">
				<h1>Извините, такой страницы не существует</h1>
				<div class="nomer_error">404</div>
				<div class="error_navigation">
					<p>К сожалению, страницы, которую вы запросили, не существует, вы можете:</p>
					<p><span>&#9679;</span> <a href="javascript:history.back();">Перейти к предыдущей странице</a></p>
					<p><span>&#9679;</span> <a href="#">Перейти в каталог товаров</a></p>
					<p><span>&#9679;</span> Воспользоваться поиском вверху страницы</p>
				</div>
			</div>

			<div class="clear_div">&nbsp;</div>
		</main>
		<div class="clear_div">&nbsp;</div>
		
		
		<? if(substr_count($_SERVER['REQUEST_URI'],"/company/")){?>


		<? } elseif(substr_count($_SERVER['REQUEST_URI'],"/")){?>

			<div id="hit">
				<a href="#" class="hits_more">все хиты</a>
				<h1>ХИТЫ ПРОДАЖ</h1>
				<hr />
				
				<div class="carousel-box-hit">
					<a href="#"><div class="prev3"></div></a>
					<a href="#"><div class="next3"></div></a>
					<div class="carousel-hits">
						<ul>
							<li class="box">
								<a class="hit-img" href="#">
									<img src="/images/hit-img.png" />
								</a>
								<a class="hit-name" href="#">30172 EzFlow Silky Soft"Pink<br />
									Grapefruit",30мл.-крем-лосьон<br />
									для рук и тела, аромат"Розовый</a>
								<p class="art">Арт: 1234567</p>
								<div class="hit_bottom">
									<div class="price">59 <span>Р.</span></div>
									<a href="#" class="cart_ico-element"></a>
									<a href="#" class="comparison">добавить в сравнение</a>
								</div>
							</li>
							<li class="box">
								<a class="hit-img" href="#">
									<img src="/images/hit-img2.png" />
								</a>
								<a class="hit-name" href="#">30172 EzFlow Silky Soft"Pink<br />
									Grapefruit",30мл.-крем-лосьон<br />
									для рук и тела, аромат"Розовый</a>
								<p class="art">Арт: 1234567</p>
								<div class="hit_bottom">
									<div class="price">59 <span>Р.</span></div>
									<a href="#" class="cart_ico-element"></a>
									<a href="#" class="comparison">добавить в сравнение</a>
								</div>
							</li>
							<li class="box">
								<a class="hit-img" href="#">
									<img src="/images/hit-img2.png" />
								</a>
								<a class="hit-name" href="#">30172 EzFlow Silky Soft"Pink<br />
									Grapefruit",30мл.-крем-лосьон<br />
									для рук и тела, аромат"Розовый</a>
								<p class="art">Арт: 1234567</p>
								<div class="hit_bottom">
									<div class="price">59 <span>Р.</span></div>
									<a href="#" class="cart_ico-element"></a>
									<a href="#" class="comparison">добавить в сравнение</a>
								</div>
							</li>
							<li class="box">
								<a class="hit-img" href="#">
									<img src="/images/hit-img3.png" />
								</a>
								<a class="hit-name" href="#">30172 EzFlow Silky Soft"Pink<br />
									Grapefruit",30мл.-крем-лосьон<br />
									для рук и тела, аромат"Розовый</a>
								<p class="art">Арт: 1234567</p>
								<div class="hit_bottom">
									<div class="price">59 <span>Р.</span></div>
									<a href="#" class="cart_ico-element"></a>
									<a href="#" class="comparison">добавить в сравнение</a>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>

		<? } ?>

		<div class="clear_div">&nbsp;</div>
		<footer>
			<div class="footer_menu">
				<ul>
					<li><a href="#">НОВОСТИ</a></li>
					<li><a href="#">БРЕНДЫ</a></li>
					<li><a href="#">КАТАЛОГ</a></li>
					<li><a href="#">SALE</a></li>
					<li><a href="#">НОВИНКИ</a></li>
					<li><a href="#">КОНТАКТЫ</a></li>
					<li><a href="#">ДОСТАВКА</a></li>
					<li><a href="#">СКИДКИ</a></li>
					<li><a href="#">ФОРУМ</a></li>
				</ul>
			</div>
			<div class="line_footer"></div>
			<div class="soc_seti"></div>
			<div class="platej_systemy">Мы принимаем:</div>
			<div class="copyright">Компания «ВИКТОРИ».<br />Все права защищены © 1996-2013.</div>
		</footer>
		<div class="above_footer"></div>
	</body>
</html>