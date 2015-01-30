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
		
		<!-- Подключение jQuery -->
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
		
		<!-- Highslide - увеличитель изображений -->
		
		<script type="text/javascript" src="/js/highslide.js"></script>
		<link rel="stylesheet" type="text/css" href="/js/highslide.css">

		<script type="text/javascript">
			hs.graphicsDir = '/js/graphics/';
			hs.align = 'center';
			hs.transitions = ['expand', 'crossfade'];
			hs.outlineType = 'rounded-white';
			hs.fadeInOut = true;

			//hs.dimmingOpacity = 0.75;

			// Add the controlbar
			hs.addSlideshow({
				//slideshowGroup: 'group1',
				interval: 5000,
				repeat: false,
				useControls: true,
				fixedControls: 'fit',
				overlayOptions: {
					opacity: 0.75,
					position: 'bottom center',
					hideOnMouseOut: true
				}
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
		
			<div class="breadcrumb">
				<ul>
					<li>
						<a href="/" title="Главная">Главная</a>
					</li>
					<li>
						<a href="/">Каталог</a>
					</li>
					<li>
						<span>NP Foot Paddle - пилка для педикюра (чёрная)</span>
					</li>
				</ul>
			</div>
		
			<div class="tovar_block">
				<h1>NP Foot Paddle - пилка для педикюра (чёрная)</h1>
				<div class="tovar_img-block">
					<a href="/images/tovar_img-1.png" class="img_wrap highslide" onclick="return hs.expand(this)">
						<img src="/images/tovar_img-1.png" />
						<img class="zoom" src="/images/zoom-ico.png" />
					</a>
					
					<div class="soc_seti">поделиться: <img src="/images/soc_seti-tovar.png" /></div>
				</div>
				<div class="tovar_text-block">
					<p class="tovar_article">Артикул: 28406
						<span>Бренд: IBD</span>
					</p>
					<p class="tovar_there">Товар в наличии
						<a href="#" class="">Добавить к сравнению</a>
					</p>
					<p class="tovar_no">Нет в наличии
						<a href="#" class="">сообщить о наличии</a>
					</p>
					<div class="counter_block">
						<div class="count">
							<span>Количество:</span>
							<input class='count_input' name="count" type="text" value="1" />
							<div class="up-down">
								<a href="#" class="up"></a>
								<a href="#" class="down"></a>
							</div>
						</div>
						<div class="price">159 <span>Р.</span><a href="#" class="cart_ico-element"></a></div>
					</div>
					<div class="description">
						<h3>ОПИСАНИЕ</h3>
						<p>ШЛИФОВЩИК "АЛМАЗ"</p>
						<p>Придает блеск акриловым, гелевым инатуральным ногтям. Не<br/ >
						требует дополнительной полировки. Абразивность: 220/280 грит.</p>
						<p>Пилки «Драгоценные камни»<br/ >
						Рубин Ruby File –100/100 грит<br/ >
						Сапфир Saphire File –150/150 грит<br/ >
						Изумруд Emerald File –180/180 грит<br/ >
						Бриллиант Diamond Buffer – 220/280 грит<br/ >
						Полировщик .ibd.: 600/4000 грит</p>
					</div>
				</div>
			</div>

			<div id="action" class="smotreli">
				<h1>ВЫ СМОТРЕЛИ</h1>
				<div class="carousel-box">
					<a href="#"><div class="prev"></div></a>
					<a href="#"><div class="next"></div></a>
					<div class="carousel">
						<ul>
							<li class="box">
								<a class="action-img" href="#">
									<img src="/images/action-img.png" />
								</a>
								<a class="action-name" href="#">30172 EzFlow Silky Soft"Pink<br />
									Grapefruit",30мл.-крем-лосьон<br />
									для рук и тела, аромат"Розовый</a>
								<p class="art">Арт: 1234567</p>
								<div class="action_bottom">
									<div class="price">59 <span>Р.</span></div>
									<a href="#" class="cart_ico-element"></a>
									<a href="#" class="comparison">добавить в сравнение</a>
								</div>
							</li>
							<li class="box">
								<a class="action-img" href="#">
									<img src="/images/action-img.png" />
								</a>
								<a class="action-name" href="#">30172 EzFlow Silky Soft"Pink<br />
									Grapefruit",30мл.-крем-лосьон<br />
									для рук и тела, аромат"Розовый</a>
								<p class="art">Арт: 1234567</p>
								<div class="action_bottom">
									<div class="price">59 <span>Р.</span></div>
									<a href="#" class="cart_ico-element"></a>
									<a href="#" class="comparison">добавить в сравнение</a>
								</div>
							</li>
							<li class="box">
								<a class="action-img" href="#">
									<img src="/images/action-img.png" />
								</a>
								<a class="action-name" href="#">30172 EzFlow Silky Soft"Pink<br />
									Grapefruit",30мл.-крем-лосьон<br />
									для рук и тела, аромат"Розовый</a>
								<p class="art">Арт: 1234567</p>
								<div class="action_bottom">
									<div class="price">59 <span>Р.</span></div>
									<a href="#" class="cart_ico-element"></a>
									<a href="#" class="comparison">добавить в сравнение</a>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="clear_div">&nbsp;</div>
			<img src="/images/tovar_bottom.png" style="margin-bottom: 15px;" />

			<div id="novinki">
				<a href="#" class="novinki_more">все новинки</a>
				<h1>С ЭТИМ ТОВАРОМ ПОКУПАЮТ</h1>
				<hr />
				
				<div class="carousel-box-novinki">
					<a href="#"><div class="prev1"></div></a>
					<a href="#"><div class="next1"></div></a>
					<div class="carousel-novinki">
						<ul>
							<li class="box">
								<a class="novinka-img" href="#">
									<img src="/images/novinka-img.png" />
								</a>
								<a class="novinka-name" href="#">30172 EzFlow Silky Soft"Pink<br />
									Grapefruit",30мл.-крем-лосьон<br />
									для рук и тела, аромат"Розовый</a>
								<p class="art">Арт: 1234567</p>
								<div class="novinka_bottom">
									<div class="price">59 <span>Р.</span></div>
									<a href="#" class="cart_ico-element"></a>
									<a href="#" class="comparison">добавить в сравнение</a>
								</div>
							</li>
							<li class="box">
								<a class="novinka-img" href="#">
									<img src="/images/novinka-img2.png" />
								</a>
								<a class="novinka-name" href="#">30172 EzFlow Silky Soft"Pink<br />
									Grapefruit",30мл.-крем-лосьон<br />
									для рук и тела, аромат"Розовый</a>
								<p class="art">Арт: 1234567</p>
								<div class="novinka_bottom">
									<div class="price">59 <span>Р.</span></div>
									<a href="#" class="cart_ico-element"></a>
									<a href="#" class="comparison">добавить в сравнение</a>
								</div>
							</li>
							<li class="box">
								<a class="novinka-img" href="#">
									<img src="/images/novinka-img3.png" />
								</a>
								<a class="novinka-name" href="#">30172 EzFlow Silky Soft"Pink<br />
									Grapefruit",30мл.-крем-лосьон<br />
									для рук и тела, аромат"Розовый</a>
								<p class="art">Арт: 1234567</p>
								<div class="novinka_bottom">
									<div class="price">59 <span>Р.</span></div>
									<a href="#" class="cart_ico-element"></a>
									<a href="#" class="comparison">добавить в сравнение</a>
								</div>
							</li>
							<li class="box">
								<a class="novinka-img" href="#">
									<img src="/images/novinka-img3.png" />
								</a>
								<a class="novinka-name" href="#">30172 EzFlow Silky Soft"Pink<br />
									Grapefruit",30мл.-крем-лосьон<br />
									для рук и тела, аромат"Розовый</a>
								<p class="art">Арт: 1234567</p>
								<div class="novinka_bottom">
									<div class="price">59 <span>Р.</span></div>
									<a href="#" class="cart_ico-element"></a>
									<a href="#" class="comparison">добавить в сравнение</a>
								</div>
							</li>
						</ul>
					</div>
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