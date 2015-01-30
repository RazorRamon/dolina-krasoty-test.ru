<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>���������</title>
		<meta name="description" content="opisanie" />
		<meta name="keywords" content="keywords" />
		<meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />

		<link rel="stylesheet" type="text/css" href="/css/style.css" />
		<link rel="stylesheet" type="text/css" href="/css/normalize.css" />

		<link rel="icon" href="/favicon.ico" type="image/x-icon" />
		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
		<link rel="alternate" type="application/rss+xml" title="RSS Feed" href="/news/rss/" />
		
		<!� ����������� jQuery -->
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.js"></script>
		
		<!-- �������� ������� �� ������� -->
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
		
		<!� jQuery-������� -->
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
		
		<!-- Cycle2 - �������-������ -->
		<script type="text/javascript" src="/js/jquery.cycle2.js"></script>
		
		<!-- ����������/������� ������������ ������ -->
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
								<li><a href="#">�������</a></li>
								<li><a href="#">������</a></li>
								<li><a href="#">�������</a></li>
								<li><a href="#">SALE</a></li>
								<li><a href="#">�������</a></li>
								<li><a href="#">��������</a></li>
								<li><a href="#">��������</a></li>
								<li><a href="#">������</a></li>
								<li><a href="#">�����</a></li>
							</ul>
						</div>
						<form class="form_search" autocomplete="on" method="get" action="/" >
							<input class='search' name="name" type="text" value="" placeholder='�����' />
							<input class="button_form" type="submit" value="" />
						</form>
						<div class="phone">8-800-333-9007<br /><span>������� �������������� �����</span></div>
						<div class="head_link">
							<ul>
								<li><a href="#">�����</a></li>
								<li><a href="#">�����������</a></li>
								<li><a href="#">�������� �����</a></li>
							</ul>
						</div>
						<div class="cart_light">� �������<br /><a href="#">10 �������</a></div>
					</div>
					<div class="left_menu">
						<ul>
							<li class="roditel"><a href="#">��������� ���<br />����������� ������</a>
								<ul class="open">
									<li><a href="#">������� ����������</a></li>
									<li><a href="#">��������� ����������</a></li>
									<li><a href="#">������� ����</a></li>
								</ul>
							</li>
							<li class="roditel"><a href="#">�������</a>
								<ul class="open">
									<li><a href="#">������� ����������</a></li>
									<li><a href="#">��������� ����������</a></li>
									<li><a href="#">������� ����</a></li>
									<li><a href="#">�����, �����, ����, ���������<br />��� ������� ������</a></li>
									<li><a href="#">�����</a></li>
									<li><a href="#">����� ��� �������</a></li>
									<li><a href="#">��������, �����������,<br />����������</a></li>
								</ul>
							</li>
							<li><a href="#">�������</a></li>
							<li class="roditel"><a href="#">���������</a>
								<ul class="open">
									<li><a href="#">������� ����������</a></li>
									<li><a href="#">��������� ����������</a></li>
									<li><a href="#">������� ����������</a></li>
									<li><a href="#">��������� ����������</a></li>
									<li><a href="#">������� ����</a></li>
								</ul>
							</li>
							<li><a href="#">����������� ������</a></li>
							<li><a href="#">����������� �<br />����������</a></li>
							<li><a href="#">�������� ���������</a></li>
						</ul>
					</div>
				</div>
			</div>
		</header>

		<main>
			<div class="breadcrumb">
				<ul>
					<li>
						<a href="/" title="�������">�������</a>
					</li>
					<li>
						<a href="/">�������</a>
					</li>
					<li>
						<span>����</span>
					</li>
				</ul>
			</div>
			<div id="catalog_list">
				<h1>����</h1>
				<div class="clear_div" style="height: 0px; margin: 0px;">&nbsp;</div>
				
				<form class="catalog_filtr" method="post" action="#">
					<div class="wrap_fields">
						<div class="head_block-fields">
							<legend>�����:</legend>
							<label class="line_checkbox" for="seche">
								<input name="seche" value="1" type="checkbox">Seche
							</label>
							<label class="line_checkbox" for="cg">
								<input name="cg" value="2" type="checkbox">CG
							</label>
							<a href="javascript:void(0)" class="arrov_filtr-up">������ ����������� �����</a>
							<a href="javascript:void(0)" class="arrov_filtr-down">�������� ����������� �����</a>
						</div>

						<div class="middle_block-fields">
							<div class="left_block-fields">
								<legend style="margin-bottom: 150px;">�������:</legend>
								<label class="line_checkbox vide" for="emal">
									<input name="emal" value="3" type="checkbox">�����
								</label>
								<label class="line_checkbox vide" for="prizma">
									<input name="prizma" value="4" type="checkbox">������
								</label>
								<label class="line_checkbox vide" for="perlamutr">
									<input name="perlamutr" value="5" type="checkbox">���������
								</label>
								<label class="line_checkbox vide" for="matovy">
									<input name="matovy" value="6" type="checkbox">�������
								</label>
								<label class="line_checkbox vide" for="blestki">
									<input name="blestki" value="7" type="checkbox">�������
								</label>
								<label class="line_checkbox vide" for="magnit">
									<input name="magnit" value="8" type="checkbox">������
								</label>
								<label class="line_checkbox vide" for="neon">
									<input name="neon" value="9" type="checkbox">����
								</label>
								<label class="line_checkbox vide" for="shimmer">
									<input name="shimmer" value="10" type="checkbox">������
								</label>
								<label class="line_checkbox vide" for="konfetti">
									<input name="konfetti" value="11" type="checkbox">��������
								</label>
								<label class="line_checkbox vide" for="sluda">
									<input name="sluda" value="12" type="checkbox">�����
								</label>
								<label class="line_checkbox vide" for="golograf">
									<input name="golograf" value="13" type="checkbox">���������������
								</label>
								<label class="line_checkbox vide" for="textur">
									<input name="textur" value="14" type="checkbox">����������������
								</label>
								<label class="line_checkbox vide" for="dvutsvet">
									<input name="dvutsvet" value="15" type="checkbox">�����������
								</label>
								
								<div style="margin-bottom: 10px;" class="clear_div">&nbsp;</div>
								
								<legend>����:</legend>
								<label class="line_field" for="price_interval">
									<input type="text" name="price_ot" maxlength="50" size="30" value="" />
									-
									<input type="text" name="price_do" maxlength="50" size="30" value="" />
									���.
								</label>
							</div>
							
							<div class="right_block-fields">
								<legend style="margin: 0 10px 230px 0;">����:</legend>
								<label class="line_checkbox vide2" for="red">
									<input name="red" value="16" type="checkbox">
									<img src="/images/filtr-color-1.png" /> �������
								</label>
								<label class="line_checkbox vide2" for="izumrud">
									<input name="izumrud" value="17" type="checkbox">
									<img src="/images/filtr-color-2.png" /> ����������
								</label>
								<label class="line_checkbox vide2" for="bely">
									<input name="bely" value="18" type="checkbox">
									<img src="/images/filtr-color-3.png" /> �����
								</label>
								<label class="line_checkbox vide2" for="malinovy">
									<input name="malinovy" value="19" type="checkbox">
									<img src="/images/filtr-color-4.png" /> ���������
								</label>
								<label class="line_checkbox vide2" for="goluboy">
									<input name="goluboy" value="20" type="checkbox">
									<img src="/images/filtr-color-5.png" /> �������
								</label>
								<label class="line_checkbox vide2" for="prozrach">
									<input name="prozrach" value="21" type="checkbox">
									<img src="/images/filtr-color-6.png" /> ����������
								</label>
								<label class="line_checkbox vide2" for="oranj">
									<input name="oranj" value="22" type="checkbox">
									<img src="/images/filtr-color-7.png" /> ���������
								</label>
								<label class="line_checkbox vide2" for="siniy">
									<input name="siniy" value="23" type="checkbox">
									<img src="/images/filtr-color-8.png" /> �����
								</label>
								<label class="line_checkbox vide2" for="serebro">
									<input name="serebro" value="24" type="checkbox">
									<img src="/images/filtr-color-9.png" /> �����������
								</label>
								<label class="line_checkbox vide2" for="jelty">
									<input name="jelty" value="25" type="checkbox">
									<img src="/images/filtr-color-10.png" /> ������
								</label>
								<label class="line_checkbox vide2" for="fiolet">
									<input name="fiolet" value="26" type="checkbox">
									<img src="/images/filtr-color-11.png" /> ����������
								</label>
								<label class="line_checkbox vide2" for="mnogotsvet">
									<input name="mnogotsvet" value="27" type="checkbox">
									<img src="/images/filtr-color-12.png" /> ������������
								</label>
								<label class="line_checkbox vide2" for="telesny">
									<input name="telesny" value="28" type="checkbox">
									<img src="/images/filtr-color-13.png" /> ��������
								</label>
								<label class="line_checkbox vide2" for="rozovy">
									<input name="rozovy" value="29" type="checkbox">
									<img src="/images/filtr-color-14.png" /> �������
								</label>
								<label class="line_checkbox vide2" for="sery">
									<input name="sery" value="30" type="checkbox">
									<img src="/images/filtr-color-15.png" /> �����
								</label>
								<label class="line_checkbox vide2" for="zolotoy">
									<input name="zolotoy" value="31" type="checkbox">
									<img src="/images/filtr-color-16.png" /> �������
								</label>
								<label class="line_checkbox vide2" for="bordovy">
									<input name="bordovy" value="32" type="checkbox">
									<img src="/images/filtr-color-17.png" /> ��������
								</label>
								<label class="line_checkbox vide2" for="cherny">
									<input name="cherny" value="33" type="checkbox">
									<img src="/images/filtr-color-18.png" /> ������
								</label>
								<label class="line_checkbox vide2" for="zeleny">
									<input name="zeleny" value="34" type="checkbox">
									<img src="/images/filtr-color-19.png" /> ������
								</label>
								<label class="line_checkbox vide2" for="korichnevy">
									<input name="korichnevy" value="35" type="checkbox">
									<img src="/images/filtr-color-20.png" /> ����������
								</label>
								<label class="line_checkbox vide2" for="natural">
									<input name="natural" value="36" type="checkbox">
									<img src="/images/filtr-color-21.png" /> �����������
								</label>
							</div>
						</div>
					</div>
					<div class="bottom_block-fields">
						<button id="set_filter" class="set_filter" name="set_filter" value="" type="submit">��������� ������</button>
						<button id="del_filter" class="del_filter" name="del_filter" value="" type="submit">��������</button>
					</div>
				</form>
				
				<div class="sort_by"><span>����������� ��:</span>
					<ul>
						<li class="active">
							<a href="#">��������</a>
						</li>
						<li>
							<a href="#">����</a>
						</li>
						<li>
							<a href="#">��������</a>
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
								Grapefruit",30��.-����-������<br />
								��� ��� � ����, ������"�������</a>
							<p class="art">���: 1234567</p>
							<div class="tovar-list_bottom">
								<div class="price">59 <span>�.</span></div>
								<a href="#" class="cart_ico-element"></a>
								<a href="#" class="comparison">�������� � ���������</a>
							</div>
						</li>
						<li class="box">
							<a class="tovar-list-img" href="#">
								<img src="/images/novinka-img2.png" />
							</a>
							<a class="tovar-list-name" href="#">30172 EzFlow Silky Soft"Pink<br />
								Grapefruit",30��.-����-������<br />
								��� ��� � ����, ������"�������</a>
							<p class="art">���: 1234567</p>
							<div class="tovar-list_bottom">
								<div class="price">59 <span>�.</span></div>
								<a href="#" class="cart_ico-element"></a>
								<a href="#" class="comparison">�������� � ���������</a>
							</div>
						</li>
						<li class="box">
							<a class="tovar-list-img" href="#">
								<img src="/images/novinka-img3.png" />
							</a>
							<a class="tovar-list-name" href="#">30172 EzFlow Silky Soft"Pink<br />
								Grapefruit",30��.-����-������<br />
								��� ��� � ����, ������"�������</a>
							<p class="art">���: 1234567</p>
							<div class="tovar-list_bottom">
								<div class="price">59 <span>�.</span></div>
								<a href="#" class="cart_ico-element"></a>
								<a href="#" class="comparison">�������� � ���������</a>
							</div>
						</li>
						<li class="box">
							<a class="tovar-list-img" href="#">
								<img src="/images/novinka-img3.png" />
							</a>
							<a class="tovar-list-name" href="#">30172 EzFlow Silky Soft"Pink<br />
								Grapefruit",30��.-����-������<br />
								��� ��� � ����, ������"�������</a>
							<p class="art">���: 1234567</p>
							<div class="tovar-list_bottom">
								<div class="price">59 <span>�.</span></div>
								<a href="#" class="cart_ico-element"></a>
								<a href="#" class="comparison">�������� � ���������</a>
							</div>
						</li>
						<li class="box">
							<a class="tovar-list-img" href="#">
								<img src="/images/novinka-img3.png" />
							</a>
							<a class="tovar-list-name" href="#">30172 EzFlow Silky Soft"Pink<br />
								Grapefruit",30��.-����-������<br />
								��� ��� � ����, ������"�������</a>
							<p class="art">���: 1234567</p>
							<div class="tovar-list_bottom">
								<div class="price">59 <span>�.</span></div>
								<a href="#" class="cart_ico-element"></a>
								<a href="#" class="comparison">�������� � ���������</a>
							</div>
						</li>
						<li class="box">
							<a class="tovar-list-img" href="#">
								<img src="/images/novinka-img.png" />
							</a>
							<a class="tovar-list-name" href="#">30172 EzFlow Silky Soft"Pink<br />
								Grapefruit",30��.-����-������<br />
								��� ��� � ����, ������"�������</a>
							<p class="art">���: 1234567</p>
							<div class="tovar-list_bottom">
								<div class="price">59 <span>�.</span></div>
								<a href="#" class="cart_ico-element"></a>
								<a href="#" class="comparison">�������� � ���������</a>
							</div>
						</li>
						<li class="box">
							<a class="tovar-list-img" href="#">
								<img src="/images/novinka-img2.png" />
							</a>
							<a class="tovar-list-name" href="#">30172 EzFlow Silky Soft"Pink<br />
								Grapefruit",30��.-����-������<br />
								��� ��� � ����, ������"�������</a>
							<p class="art">���: 1234567</p>
							<div class="tovar-list_bottom">
								<div class="price">59 <span>�.</span></div>
								<a href="#" class="cart_ico-element"></a>
								<a href="#" class="comparison">�������� � ���������</a>
							</div>
						</li>
						<li class="box">
							<a class="tovar-list-img" href="#">
								<img src="/images/novinka-img3.png" />
							</a>
							<a class="tovar-list-name" href="#">30172 EzFlow Silky Soft"Pink<br />
								Grapefruit",30��.-����-������<br />
								��� ��� � ����, ������"�������</a>
							<p class="art">���: 1234567</p>
							<div class="tovar-list_bottom">
								<div class="price">59 <span>�.</span></div>
								<a href="#" class="cart_ico-element"></a>
								<a href="#" class="comparison">�������� � ���������</a>
							</div>
						</li>
					</ul>
				</div>
				
				<div class="clear_div" style="height: 0px; margin: 0px;">&nbsp;</div>
				<font class="text">������&nbsp;|&nbsp;����.&nbsp;|			
									<b>1</b>
									<a class="page_nomer" href="#">2</a>
									<a class="page_nomer" href="#">3</a>
									<a class="page_nomer" href="#">4</a>
									| <a href="#">����.</a>&nbsp;|<a href="#">�����</a>&nbsp;
					<noindex>
						|<a href="#" rel="nofollow">���</a>
					</noindex>
				</font>
				
				<div class="clear_div">&nbsp;</div>
				<div id="novinki">
					<h1 style="width: 150px;">�� ��������</h1>
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
										Grapefruit",30��.-����-������<br />
										��� ��� � ����, ������"�������</a>
									<p class="art">���: 1234567</p>
									<div class="novinka_bottom">
										<div class="price">59 <span>�.</span></div>
										<a href="#" class="cart_ico-element"></a>
										<a href="#" class="comparison">�������� � ���������</a>
									</div>
								</li>
								<li class="box">
									<a class="novinka-img" href="#">
										<img src="/images/novinka-img2.png" />
									</a>
									<a class="novinka-name" href="#">30172 EzFlow Silky Soft"Pink<br />
										Grapefruit",30��.-����-������<br />
										��� ��� � ����, ������"�������</a>
									<p class="art">���: 1234567</p>
									<div class="novinka_bottom">
										<div class="price">59 <span>�.</span></div>
										<a href="#" class="cart_ico-element"></a>
										<a href="#" class="comparison">�������� � ���������</a>
									</div>
								</li>
								<li class="box">
									<a class="novinka-img" href="#">
										<img src="/images/novinka-img3.png" />
									</a>
									<a class="novinka-name" href="#">30172 EzFlow Silky Soft"Pink<br />
										Grapefruit",30��.-����-������<br />
										��� ��� � ����, ������"�������</a>
									<p class="art">���: 1234567</p>
									<div class="novinka_bottom">
										<div class="price">59 <span>�.</span></div>
										<a href="#" class="cart_ico-element"></a>
										<a href="#" class="comparison">�������� � ���������</a>
									</div>
								</li>
								<li class="box">
									<a class="novinka-img" href="#">
										<img src="/images/novinka-img3.png" />
									</a>
									<a class="novinka-name" href="#">30172 EzFlow Silky Soft"Pink<br />
										Grapefruit",30��.-����-������<br />
										��� ��� � ����, ������"�������</a>
									<p class="art">���: 1234567</p>
									<div class="novinka_bottom">
										<div class="price">59 <span>�.</span></div>
										<a href="#" class="cart_ico-element"></a>
										<a href="#" class="comparison">�������� � ���������</a>
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
				<a href="#" class="hits_more">��� ����</a>
				<h1>���� ������</h1>
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
									Grapefruit",30��.-����-������<br />
									��� ��� � ����, ������"�������</a>
								<p class="art">���: 1234567</p>
								<div class="hit_bottom">
									<div class="price">59 <span>�.</span></div>
									<a href="#" class="cart_ico-element"></a>
									<a href="#" class="comparison">�������� � ���������</a>
								</div>
							</li>
							<li class="box">
								<a class="hit-img" href="#">
									<img src="/images/hit-img2.png" />
								</a>
								<a class="hit-name" href="#">30172 EzFlow Silky Soft"Pink<br />
									Grapefruit",30��.-����-������<br />
									��� ��� � ����, ������"�������</a>
								<p class="art">���: 1234567</p>
								<div class="hit_bottom">
									<div class="price">59 <span>�.</span></div>
									<a href="#" class="cart_ico-element"></a>
									<a href="#" class="comparison">�������� � ���������</a>
								</div>
							</li>
							<li class="box">
								<a class="hit-img" href="#">
									<img src="/images/hit-img2.png" />
								</a>
								<a class="hit-name" href="#">30172 EzFlow Silky Soft"Pink<br />
									Grapefruit",30��.-����-������<br />
									��� ��� � ����, ������"�������</a>
								<p class="art">���: 1234567</p>
								<div class="hit_bottom">
									<div class="price">59 <span>�.</span></div>
									<a href="#" class="cart_ico-element"></a>
									<a href="#" class="comparison">�������� � ���������</a>
								</div>
							</li>
							<li class="box">
								<a class="hit-img" href="#">
									<img src="/images/hit-img3.png" />
								</a>
								<a class="hit-name" href="#">30172 EzFlow Silky Soft"Pink<br />
									Grapefruit",30��.-����-������<br />
									��� ��� � ����, ������"�������</a>
								<p class="art">���: 1234567</p>
								<div class="hit_bottom">
									<div class="price">59 <span>�.</span></div>
									<a href="#" class="cart_ico-element"></a>
									<a href="#" class="comparison">�������� � ���������</a>
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
					<li><a href="#">�������</a></li>
					<li><a href="#">������</a></li>
					<li><a href="#">�������</a></li>
					<li><a href="#">SALE</a></li>
					<li><a href="#">�������</a></li>
					<li><a href="#">��������</a></li>
					<li><a href="#">��������</a></li>
					<li><a href="#">������</a></li>
					<li><a href="#">�����</a></li>
				</ul>
			</div>
			<div class="line_footer"></div>
			<div class="soc_seti"></div>
			<div class="platej_systemy">�� ���������:</div>
			<div class="copyright">�������� �������Ȼ.<br />��� ����� �������� � 1996-2013.</div>
		</footer>
		<div class="above_footer"></div>
	</body>
</html>