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
		
			<div class="breadcrumb"><a href="#">�������</a>  /  ����������</div>
			<div id="error404">
				<h1>��������, ����� �������� �� ����������</h1>
				<div class="nomer_error">404</div>
				<div class="error_navigation">
					<p>� ���������, ��������, ������� �� ���������, �� ����������, �� ������:</p>
					<p><span>&#9679;</span> <a href="javascript:history.back();">������� � ���������� ��������</a></p>
					<p><span>&#9679;</span> <a href="#">������� � ������� �������</a></p>
					<p><span>&#9679;</span> ��������������� ������� ������ ��������</p>
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