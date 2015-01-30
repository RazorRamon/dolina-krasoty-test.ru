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
		
		<!— jQuery-вкладки -->
		<!--<script type="text/javascript" src="http://jemand.ru/examples/scripts/jquery.tools-1.1.1.js"></script>-->
		<script type="text/javascript" src="/js/jquery.tools-1.1.1.js"></script>

		<script language="javascript">
			$(document).ready(function (){
				$('#tabs').tabs('#tabsText > li', {effect: 'fade', fadeOutSpeed: 300});
				
				var i=2;
				setInterval(function(){
					$('.imgg').fadeOut(2000);
					$('#img'+i).fadeIn(2000);
					i++;
					if(i==3){i=1;}
				}, 5000);
			});
		</script>
		
		<!-- Cycle2 - Слайдер-баннер -->
		<script type="text/javascript" src="/js/jquery.cycle2.js"></script>
		
		<!-- Проявление/скрытие расширенного поиска -->
		<script type="text/javascript">
			$(document).ready(function(){
				$(".arrov_filtr-up").click(function(){
					$(".arrov_filtr-up").toggle(0);
					$(".middle_block-fields").toggle(0);
					$(".arrov_filtr-down").toggle(0);
				});
				$(".arrov_filtr-down").click(function(){
					$(".arrov_filtr-down").toggle(0);
					$(".middle_block-fields").toggle(0);
					$(".arrov_filtr-up").toggle(0);
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
			<div class="breadcrumb">
				<ul>
					<li>
						<a href="/" title="Главная">Главная</a>
					</li>
					<li>
						<a href="/">Каталог</a>
					</li>
					<li>
						<span>Лаки</span>
					</li>
				</ul>
			</div>
			<div id="catalog_list">
				<h1>Лаки</h1>
				<div class="clear_div" style="height: 0px; margin: 0px;">&nbsp;</div>
				
				<form class="catalog_filtr" method="post" action="#">
					<div class="wrap_fields">
						<div class="head_block-fields">
							<legend>Бренд:</legend>
							<label class="line_checkbox" for="seche">
								<input name="seche" value="1" type="checkbox">Seche
							</label>
							<label class="line_checkbox" for="cg">
								<input name="cg" value="2" type="checkbox">CG
							</label>
							<a href="javascript:void(0)" class="arrov_filtr-up">Скрыть расширенный поиск</a>
							<a href="javascript:void(0)" class="arrov_filtr-down">Раскрыть расширенный поиск</a>
						</div>

						<div class="middle_block-fields">
							<div class="left_block-fields">
								<legend style="margin-bottom: 150px;">Фактура:</legend>
								<label class="line_checkbox vide" for="emal">
									<input name="emal" value="3" type="checkbox">Эмаль
								</label>
								<label class="line_checkbox vide" for="prizma">
									<input name="prizma" value="4" type="checkbox">Призма
								</label>
								<label class="line_checkbox vide" for="perlamutr">
									<input name="perlamutr" value="5" type="checkbox">Перламутр
								</label>
								<label class="line_checkbox vide" for="matovy">
									<input name="matovy" value="6" type="checkbox">Матовый
								</label>
								<label class="line_checkbox vide" for="blestki">
									<input name="blestki" value="7" type="checkbox">Блестки
								</label>
								<label class="line_checkbox vide" for="magnit">
									<input name="magnit" value="8" type="checkbox">Магнит
								</label>
								<label class="line_checkbox vide" for="neon">
									<input name="neon" value="9" type="checkbox">Неон
								</label>
								<label class="line_checkbox vide" for="shimmer">
									<input name="shimmer" value="10" type="checkbox">Шиммер
								</label>
								<label class="line_checkbox vide" for="konfetti">
									<input name="konfetti" value="11" type="checkbox">Конфетти
								</label>
								<label class="line_checkbox vide" for="sluda">
									<input name="sluda" value="12" type="checkbox">Слюда
								</label>
								<label class="line_checkbox vide" for="golograf">
									<input name="golograf" value="13" type="checkbox">Голографический
								</label>
								<label class="line_checkbox vide" for="textur">
									<input name="textur" value="14" type="checkbox">Текстурированный
								</label>
								<label class="line_checkbox vide" for="dvutsvet">
									<input name="dvutsvet" value="15" type="checkbox">Двухцветный
								</label>
								
								<div style="margin-bottom: 10px;" class="clear_div">&nbsp;</div>
								
								<legend>Цена:</legend>
								<label class="line_field" for="price_interval">
									<input type="text" name="price_ot" maxlength="50" size="30" value="" />
									-
									<input type="text" name="price_do" maxlength="50" size="30" value="" />
									руб.
								</label>
							</div>
							
							<div class="right_block-fields">
								<legend style="margin: 0 10px 230px 0;">Цвет:</legend>
								<label class="line_checkbox vide2" for="red">
									<input name="red" value="16" type="checkbox">
									<img src="/images/filtr-color-1.png" /> Красный
								</label>
								<label class="line_checkbox vide2" for="izumrud">
									<input name="izumrud" value="17" type="checkbox">
									<img src="/images/filtr-color-2.png" /> Изумрудный
								</label>
								<label class="line_checkbox vide2" for="bely">
									<input name="bely" value="18" type="checkbox">
									<img src="/images/filtr-color-3.png" /> Белый
								</label>
								<label class="line_checkbox vide2" for="malinovy">
									<input name="malinovy" value="19" type="checkbox">
									<img src="/images/filtr-color-4.png" /> Малиновый
								</label>
								<label class="line_checkbox vide2" for="goluboy">
									<input name="goluboy" value="20" type="checkbox">
									<img src="/images/filtr-color-5.png" /> Голубой
								</label>
								<label class="line_checkbox vide2" for="prozrach">
									<input name="prozrach" value="21" type="checkbox">
									<img src="/images/filtr-color-6.png" /> Прозрачный
								</label>
								<label class="line_checkbox vide2" for="oranj">
									<input name="oranj" value="22" type="checkbox">
									<img src="/images/filtr-color-7.png" /> Оранжевый
								</label>
								<label class="line_checkbox vide2" for="siniy">
									<input name="siniy" value="23" type="checkbox">
									<img src="/images/filtr-color-8.png" /> Синий
								</label>
								<label class="line_checkbox vide2" for="serebro">
									<input name="serebro" value="24" type="checkbox">
									<img src="/images/filtr-color-9.png" /> Серебристый
								</label>
								<label class="line_checkbox vide2" for="jelty">
									<input name="jelty" value="25" type="checkbox">
									<img src="/images/filtr-color-10.png" /> Желтый
								</label>
								<label class="line_checkbox vide2" for="fiolet">
									<input name="fiolet" value="26" type="checkbox">
									<img src="/images/filtr-color-11.png" /> Фиолетовый
								</label>
								<label class="line_checkbox vide2" for="mnogotsvet">
									<input name="mnogotsvet" value="27" type="checkbox">
									<img src="/images/filtr-color-12.png" /> Многоцветный
								</label>
								<label class="line_checkbox vide2" for="telesny">
									<input name="telesny" value="28" type="checkbox">
									<img src="/images/filtr-color-13.png" /> Телесный
								</label>
								<label class="line_checkbox vide2" for="rozovy">
									<input name="rozovy" value="29" type="checkbox">
									<img src="/images/filtr-color-14.png" /> Розовый
								</label>
								<label class="line_checkbox vide2" for="sery">
									<input name="sery" value="30" type="checkbox">
									<img src="/images/filtr-color-15.png" /> Серый
								</label>
								<label class="line_checkbox vide2" for="zolotoy">
									<input name="zolotoy" value="31" type="checkbox">
									<img src="/images/filtr-color-16.png" /> Золотой
								</label>
								<label class="line_checkbox vide2" for="bordovy">
									<input name="bordovy" value="32" type="checkbox">
									<img src="/images/filtr-color-17.png" /> Бордовый
								</label>
								<label class="line_checkbox vide2" for="cherny">
									<input name="cherny" value="33" type="checkbox">
									<img src="/images/filtr-color-18.png" /> Черный
								</label>
								<label class="line_checkbox vide2" for="zeleny">
									<input name="zeleny" value="34" type="checkbox">
									<img src="/images/filtr-color-19.png" /> Зелёный
								</label>
								<label class="line_checkbox vide2" for="korichnevy">
									<input name="korichnevy" value="35" type="checkbox">
									<img src="/images/filtr-color-20.png" /> Коричневый
								</label>
								<label class="line_checkbox vide2" for="natural">
									<input name="natural" value="36" type="checkbox">
									<img src="/images/filtr-color-21.png" /> Натуральный
								</label>
							</div>
						</div>
					</div>
					<div class="bottom_block-fields">
						<button id="set_filter" class="set_filter" name="set_filter" value="" type="submit">Применить фильтр</button>
						<button id="del_filter" class="del_filter" name="del_filter" value="" type="submit">отменить</button>
					</div>
				</form>
				
				<div class="sort_by"><span>Сортировать по:</span>
					<ul>
						<li class="active">
							<a href="#">названию</a>
						</li>
						<li>
							<a href="#">цене</a>
						</li>
						<li>
							<a href="#">новинкам</a>
						</li>
					</ul>
				</div>
				<div class="clear_div" style="height: 0px; margin: 0px;">&nbsp;</div>
				<hr />
				
				<div class="tovar-list">
					<ul>
						<li class="box">
							<a class="tovar-list-img" href="#">
								<img src="/images/novinka-img.png" />
							</a>
							<a class="tovar-list-name" href="#">30172 EzFlow Silky Soft"Pink<br />
								Grapefruit",30мл.-крем-лосьон<br />
								для рук и тела, аромат"Розовый</a>
							<p class="art">Арт: 1234567</p>
							<div class="tovar-list_bottom">
								<div class="price">59 <span>Р.</span></div>
								<a href="#" class="cart_ico-element"></a>
								<a href="#" class="comparison">добавить в сравнение</a>
							</div>
						</li>
						<li class="box">
							<a class="tovar-list-img" href="#">
								<img src="/images/novinka-img2.png" />
							</a>
							<a class="tovar-list-name" href="#">30172 EzFlow Silky Soft"Pink<br />
								Grapefruit",30мл.-крем-лосьон<br />
								для рук и тела, аромат"Розовый</a>
							<p class="art">Арт: 1234567</p>
							<div class="tovar-list_bottom">
								<div class="price">59 <span>Р.</span></div>
								<a href="#" class="cart_ico-element"></a>
								<a href="#" class="comparison">добавить в сравнение</a>
							</div>
						</li>
						<li class="box">
							<a class="tovar-list-img" href="#">
								<img src="/images/novinka-img3.png" />
							</a>
							<a class="tovar-list-name" href="#">30172 EzFlow Silky Soft"Pink<br />
								Grapefruit",30мл.-крем-лосьон<br />
								для рук и тела, аромат"Розовый</a>
							<p class="art">Арт: 1234567</p>
							<div class="tovar-list_bottom">
								<div class="price">59 <span>Р.</span></div>
								<a href="#" class="cart_ico-element"></a>
								<a href="#" class="comparison">добавить в сравнение</a>
							</div>
						</li>
						<li class="box">
							<a class="tovar-list-img" href="#">
								<img src="/images/novinka-img3.png" />
							</a>
							<a class="tovar-list-name" href="#">30172 EzFlow Silky Soft"Pink<br />
								Grapefruit",30мл.-крем-лосьон<br />
								для рук и тела, аромат"Розовый</a>
							<p class="art">Арт: 1234567</p>
							<div class="tovar-list_bottom">
								<div class="price">59 <span>Р.</span></div>
								<a href="#" class="cart_ico-element"></a>
								<a href="#" class="comparison">добавить в сравнение</a>
							</div>
						</li>
						<li class="box">
							<a class="tovar-list-img" href="#">
								<img src="/images/novinka-img3.png" />
							</a>
							<a class="tovar-list-name" href="#">30172 EzFlow Silky Soft"Pink<br />
								Grapefruit",30мл.-крем-лосьон<br />
								для рук и тела, аромат"Розовый</a>
							<p class="art">Арт: 1234567</p>
							<div class="tovar-list_bottom">
								<div class="price">59 <span>Р.</span></div>
								<a href="#" class="cart_ico-element"></a>
								<a href="#" class="comparison">добавить в сравнение</a>
							</div>
						</li>
						<li class="box">
							<a class="tovar-list-img" href="#">
								<img src="/images/novinka-img.png" />
							</a>
							<a class="tovar-list-name" href="#">30172 EzFlow Silky Soft"Pink<br />
								Grapefruit",30мл.-крем-лосьон<br />
								для рук и тела, аромат"Розовый</a>
							<p class="art">Арт: 1234567</p>
							<div class="tovar-list_bottom">
								<div class="price">59 <span>Р.</span></div>
								<a href="#" class="cart_ico-element"></a>
								<a href="#" class="comparison">добавить в сравнение</a>
							</div>
						</li>
						<li class="box">
							<a class="tovar-list-img" href="#">
								<img src="/images/novinka-img2.png" />
							</a>
							<a class="tovar-list-name" href="#">30172 EzFlow Silky Soft"Pink<br />
								Grapefruit",30мл.-крем-лосьон<br />
								для рук и тела, аромат"Розовый</a>
							<p class="art">Арт: 1234567</p>
							<div class="tovar-list_bottom">
								<div class="price">59 <span>Р.</span></div>
								<a href="#" class="cart_ico-element"></a>
								<a href="#" class="comparison">добавить в сравнение</a>
							</div>
						</li>
						<li class="box">
							<a class="tovar-list-img" href="#">
								<img src="/images/novinka-img3.png" />
							</a>
							<a class="tovar-list-name" href="#">30172 EzFlow Silky Soft"Pink<br />
								Grapefruit",30мл.-крем-лосьон<br />
								для рук и тела, аромат"Розовый</a>
							<p class="art">Арт: 1234567</p>
							<div class="tovar-list_bottom">
								<div class="price">59 <span>Р.</span></div>
								<a href="#" class="cart_ico-element"></a>
								<a href="#" class="comparison">добавить в сравнение</a>
							</div>
						</li>
					</ul>
				</div>
				
				<div class="clear_div" style="height: 0px; margin: 0px;">&nbsp;</div>
				<font class="text">Начало&nbsp;|&nbsp;Пред.&nbsp;|			
									<b>1</b>
									<a class="page_nomer" href="#">2</a>
									<a class="page_nomer" href="#">3</a>
									<a class="page_nomer" href="#">4</a>
									| <a href="#">След.</a>&nbsp;|<a href="#">Конец</a>&nbsp;
					<noindex>
						|<a href="#" rel="nofollow">Все</a>
					</noindex>
				</font>
				
				<div class="clear_div">&nbsp;</div>
				<div id="novinki">
					<h1 style="width: 150px;">ВЫ СМОТРЕЛИ</h1>
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