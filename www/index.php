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
			<div class="about">
				<h1>� ��������</h1>
				<p>��� ������ �������� ��������, ������ ��� ����, ����� ���� �������, ��� ����� �����. ��� ������ �������� ��������, ������ ��� ����, ����� ���� �������, ��� ����� �����. ��� ������ �������� ��������, ������ ��� ����, ����� ���� �������, ��� ����� �����. ��� ������ �������� ��������, ������ ��� ����, ����� ���� �������, ��� ����� �����. ��� ������ �������� ��������, ������ ��� ����, ����� ���� �������, ��� ����� �����.</p>
				<a href="#" class="odostavke">� ��������</a>
				<a href="#" class="oplaty">�� ������</a>
				<a href="#" class="contacts">��������</a>
				<div class="clear_div">&nbsp;</div>
				<a href="#" class="about_more">���������</a>
			</div>

			<div id="action">
				<h1>������ ����</h1>
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
									Grapefruit",30��.-����-������<br />
									��� ��� � ����, ������"�������</a>
								<p class="art">���: 1234567</p>
								<div class="action_bottom">
									<div class="price">59 <span>�.</span></div>
									<a href="#" class="cart_ico-element"></a>
									<a href="#" class="comparison">�������� � ���������</a>
								</div>
							</li>
							<li class="box">
								<a class="action-img" href="#">
									<img src="/images/action-img.png" />
								</a>
								<a class="action-name" href="#">30172 EzFlow Silky Soft"Pink<br />
									Grapefruit",30��.-����-������<br />
									��� ��� � ����, ������"�������</a>
								<p class="art">���: 1234567</p>
								<div class="action_bottom">
									<div class="price">59 <span>�.</span></div>
									<a href="#" class="cart_ico-element"></a>
									<a href="#" class="comparison">�������� � ���������</a>
								</div>
							</li>
							<li class="box">
								<a class="action-img" href="#">
									<img src="/images/action-img.png" />
								</a>
								<a class="action-name" href="#">30172 EzFlow Silky Soft"Pink<br />
									Grapefruit",30��.-����-������<br />
									��� ��� � ����, ������"�������</a>
								<p class="art">���: 1234567</p>
								<div class="action_bottom">
									<div class="price">59 <span>�.</span></div>
									<a href="#" class="cart_ico-element"></a>
									<a href="#" class="comparison">�������� � ���������</a>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="clear_div">&nbsp;</div>
			<div id="novinki">
				<a href="#" class="novinki_more">��� �������</a>
				<h1>�������</h1>
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
			<div id="brends">
				<div class="carousel-box-brends">
					<a href="#"><div class="prev2"></div></a>
					<a href="#"><div class="next2"></div></a>
					<div class="carousel-brends">
						<ul>
							<li class="box">
								<a class="brend-img" href="#">
									<img src="/images/brend-img.png" />
								</a>
							</li>
							<li class="box">
								<a class="brend-img" href="#">
									<img src="/images/brend-img.png" />
								</a>
							</li>
							<li class="box">
								<a class="brend-img" href="#">
									<img src="/images/brend-img.png" />
								</a>
							</li>
							<li class="box">
								<a class="brend-img" href="#">
									<img src="/images/brend-img.png" />
								</a>
							</li>
							<li class="box">
								<a class="brend-img" href="#">
									<img src="/images/brend-img.png" />
								</a>
							</li>
							<li class="box">
								<a class="brend-img" href="#">
									<img src="/images/brend-img.png" />
								</a>
							</li>
							<li class="box">
								<a class="brend-img" href="#">
									<img src="/images/brend-img.png" />
								</a>
							</li>
							<li class="box">
								<a class="brend-img" href="#">
									<img src="/images/brend-img.png" />
								</a>
							</li>
							<li class="box">
								<a class="brend-img" href="#">
									<img src="/images/brend-img.png" />
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="clear_div">&nbsp;</div>
			<div id="news_block">
				<a href="#" class="news_more">��� �������</a>
				<h1>�������</h1>
				<hr />
					<div class="news-previev">
						<div class="date"><span>21</span>01.14</div>
						<a href="#">������� ����������, ����� ������, � 21 �� 27 ���� 2014 �., � ����� ��� �������� �������� ����������-������� � ������� ������ �������� ��� �������� � ��������.</a>
					</div>
					<div class="news-previev">
						<div class="date"><span>21</span>01.14</div>
						<a href="#">������� ����������, ����� ������, � 21 �� 27 ���� 2014 �., � ����� ��� �������� �������� ����������-������� � ������� ������ �������� ��� �������� � ��������.</a>
					</div>
					<div class="news-previev">
						<div class="date"><span>21</span>01.14</div>
						<a href="#">������� ����������, ����� ������, � 21 �� 27 ���� 2014 �., � ����� ��� �������� �������� ����������-������� � ������� ������ �������� ��� �������� � ��������.</a>
					</div>
			</div>
			<div class="clear_div">&nbsp;</div>
		</main>
		<div class="clear_div">&nbsp;</div>

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