
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Hydrogen &mdash; A free HTML5 Template </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<!-- Google Webfonts -->
	<link href='http://fonts.useso.com/css?family=Roboto:400,300,100,500' rel='stylesheet' type='text/css'>
	<link href='http://fonts.useso.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

	<!-- Animate.css -->
	<link rel="stylesheet" href="/css/picss/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="/css/picss/icomoon.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="/css/picss/magnific-popup.css">
	<!-- Salvattore -->
	<link rel="stylesheet" href="/css/picss/salvattore.css">
	<!-- Theme Style -->
	<link rel="stylesheet" href="/css/picss/style.css">
	<!-- Modernizr JS -->
	<script src="/js/picjs/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div id="fh5co-offcanvass">
		<a href="#" class="fh5co-offcanvass-close js-fh5co-offcanvass-close">菜单 <img src="/img/home_logo/cd.png" alt=""> </a>
		<h1 class="fh5co-logo"><a class="navbar-brand" href="index.html">选一张喜欢的吧</a></h1>
		<ul>
			<li class="active"><a href="index.html">派大星</a></li>
			<li><a href="about.html">海绵宝宝</a></li>
			<li><a href="pricing.html">猫和老鼠</a></li>
			<li><a href="contact.html">药水哥</a></li>
		</ul>
		<h3 class="fh5co-lead">搜索进入[ 抽象APP ]小程序浏览更佳</h3>
		<p class="fh5co-social-icons">
			<img src="/img/chp.png" alt="">
		</p>
	</div>
	<header id="fh5co-header" role="banner">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<a href="#" class="fh5co-menu-btn js-fh5co-menu-btn">菜单 <img src="/img/home_logo/cd.png" alt=""></a>
					<a class="navbar-brand" href="index.html">冲冲冲</a>		
				</div>
			</div>
		</div>
	</header>
	<!-- END .header -->
	<div id="fh5co-main">
		<div class="container">

			<div class="row">

        <div id="fh5co-board" data-columns>
			
			@if ($info->count() > 0)
			@foreach ($info as $status)
        	<div class="item">
        		<div class="animate-box">
        			<!-- <p>{{$status->pic_url}}</p> -->
	        		<a href="{{$status->pic_url}}" class="image-popup fh5co-board-img" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, eos?"><img src="{{$status->pic_url}}" alt="Free HTML5 Bootstrap template"></a>
        		</div>
        	</div>
        	@endforeach
        	@else
			  <p>没有数据！</p>
			@endif
        	<!-- <div class="item">
        		<div class="animate-box">
        		        		<a href="/img/img_2.jpg" class="image-popup fh5co-board-img"><img src="/img/img_2.jpg" alt="Free HTML5 Bootstrap template"></a>
        		</div>
        	</div>
        	<div class="item">
        		<div class="animate-box">
        		        		<a href="/img/img_3.jpg" class="image-popup fh5co-board-img"><img src="/img/img_3.jpg" alt="Free HTML5 Bootstrap template"></a>
        		        		<div class="fh5co-desc">Optio commodi quod vitae, vel, officiis similique quaerat odit dicta.</div>
        		</div>
        	</div>
        	<div class="item">
        		<div class="animate-box">
        		        		<a href="/img/img_4.jpg" class="image-popup fh5co-board-img"><img src="/img/img_4.jpg" alt="Free HTML5 Bootstrap template"></a>
        		        		<div class="fh5co-desc">Dolore itaque deserunt sit, at exercitationem delectus, consequuntur quaerat sapiente.</div>
        		</div>
        	</div>
        	<div class="item">
        		<div class="animate-box">
        		        		<a href="/img/img_5.jpg" class="image-popup fh5co-board-img"><img src="/img/img_5.jpg" alt="Free HTML5 Bootstrap template"></a>
        		        		<div class="fh5co-desc">Tempora distinctio inventore, nisi excepturi pariatur tempore sit quasi animi.</div>
        		</div>
        	</div>
        	<div class="item">
        		<div class="animate-box">
        		        		<a href="/img/img_6.jpg" class="image-popup fh5co-board-img"><img src="/img/img_6.jpg" alt="Free HTML5 Bootstrap template"></a>
        		        		<div class="fh5co-desc">Sequi, eaque suscipit accusamus. Necessitatibus libero, unde a nesciunt repellendus!</div>
        		</div>
        	</div>
        	<div class="item">
        		<div class="animate-box">
        		        		<a href="/img/img_7.jpg" class="image-popup fh5co-board-img"><img src="/img/img_7.jpg" alt="Free HTML5 Bootstrap template"></a>
        		        		<div class="fh5co-desc">Necessitatibus distinctio eos ipsam cum hic temporibus assumenda deleniti, soluta.</div>
        		</div>
        	</div>
        	<div class="item">
        		<div class="animate-box">
        		        		<a href="/img/img_8.jpg" class="image-popup fh5co-board-img"><img src="/img/img_8.jpg" alt="Free HTML5 Bootstrap template"></a>
        		        		<div class="fh5co-desc">Debitis voluptatum est error nulla voluptate eum maiores animi quasi?</div>
        		</div>
        	</div>
        	<div class="item">
        		<div class="animate-box">
        		        		<a href="/img/img_9.jpg" class="image-popup fh5co-board-img"><img src="/img/img_9.jpg" alt="Free HTML5 Bootstrap template"></a>
        		        		<div class="fh5co-desc">Maxime qui eius quisquam quidem quos unde consectetur accusamus adipisci!</div>
        		</div>
        	</div>
        	<div class="item">
        		<div class="animate-box">
        		        		<a href="/img/img_21.jpg" class="image-popup fh5co-board-img"><img src="/img/img_21.jpg" alt="Free HTML5 Bootstrap template"></a>
        		        		<div class="fh5co-desc">Deleniti aliquid, accusantium, consectetur harum eligendi vitae quaerat reiciendis sit?</div>
        		</div>
        	</div>
        	<div class="item">
        		<div class="animate-box">
        		        		<a href="/img/img_10.jpg" class="image-popup fh5co-board-img"><img src="/img/img_10.jpg" alt="Free HTML5 Bootstrap template"></a>
        		        		<div class="fh5co-desc">Incidunt, eaque et. Et odio excepturi, eveniet facilis explicabo assumenda.</div>
        		</div>
        	</div>
        	<div class="item">
        		<div class="animate-box">
        		        		<a href="/img/img_11.jpg" class="image-popup fh5co-board-img"><img src="/img/img_11.jpg" alt="Free HTML5 Bootstrap template"></a>
        		        		<div class="fh5co-desc">Laborum dolores nihil voluptates quas alias distinctio fugiat tempora sit.</div>
        		</div>
        	</div>
        	<div class="item">
        		<div class="animate-box">
        		        		<a href="/img/img_12.jpg" class="image-popup fh5co-board-img"><img src="/img/img_12.jpg" alt="Free HTML5 Bootstrap template"></a>
        		        		<div class="fh5co-desc">Sit, quis nulla amet numquam fugit, in reiciendis laboriosam dolor.</div>
        		</div>
        	</div>
        	<div class="item">
        		<div class="animate-box">
        		        		<a href="/img/img_13.jpg" class="image-popup fh5co-board-img"><img src="/img/img_13.jpg" alt="Free HTML5 Bootstrap template"></a>
        		        		<div class="fh5co-desc">Possimus explicabo voluptatem natus nisi similique ipsa repudiandae? Quibusdam, fuga.</div>
        		</div>
        	</div>
        	<div class="item">
        		<div class="animate-box">
        		        		<a href="/img/img_14.jpg" class="image-popup fh5co-board-img"><img src="/img/img_14.jpg" alt="Free HTML5 Bootstrap template"></a>
        		        		<div class="fh5co-desc">Magni repellendus iusto mollitia, quibusdam facilis incidunt. Sunt, repellat, voluptatem.</div>
        		</div>
        	</div>
        	<div class="item">
        		<div class="animate-box">
        		        		<a href="/img/img_15.jpg" class="image-popup fh5co-board-img"><img src="/img/img_15.jpg" alt="Free HTML5 Bootstrap template"></a>
        		        		<div class="fh5co-desc">Unde iure rerum cupiditate explicabo quam aut vel earum numquam.</div>
        		</div>
        	</div>
        	<div class="item">
        		<div class="animate-box">
        		        		<a href="/img/img_16.jpg" class="image-popup fh5co-board-img"><img src="/img/img_16.jpg" alt="Free HTML5 Bootstrap template"></a>
        		        		<div class="fh5co-desc">Qui nisi error dolorum dolor delectus, alias doloremque perspiciatis nemo.</div>
        		</div>
        	</div>
        	<div class="item">
        		<div class="animate-box">
        		        		<a href="/img/img_18.jpg" class="image-popup fh5co-board-img"><img src="/img/img_18.jpg" alt="Free HTML5 Bootstrap template"></a>
        		        		<div class="fh5co-desc">Neque porro vero cumque natus nam voluptatibus, ratione, commodi labore.</div>
        		</div>
        	</div>
        	<div class="item">
        		<div class="animate-box">
        		        		<a href="/img/img_17.jpg" class="image-popup fh5co-board-img"><img src="/img/img_17.jpg" alt="Free HTML5 Bootstrap template"></a>
        		        		<div class="fh5co-desc">Quisquam quia totam, sit ea maxime sint sed excepturi quod.</div>
        		</div>
        	</div>
        	<div class="item">
        		<div class="animate-box">
        		        		<a href="/img/img_19.jpg" class="image-popup fh5co-board-img"><img src="/img/img_19.jpg" alt="Free HTML5 Bootstrap template"></a>
        		        		<div class="fh5co-desc">Nesciunt non iste ex nemo sapiente eum, provident nam corporis.</div>
        		</div>
        	</div>
        	<div class="item">
        		<div class="animate-box">
        		        		<a href="/img/img_20.jpg" class="image-popup fh5co-board-img"><img src="/img/img_20.jpg" alt="Free HTML5 Bootstrap template"></a>
        		        		<div class="fh5co-desc">Harum repellat labore est cum ipsa, nesciunt neque mollitia adipisci?</div>
        		</div>
        	</div>
        	
        	<div class="item">
        		<div class="animate-box">
        		        		<a href="/img/img_22.jpg" class="image-popup fh5co-board-img"><img src="/img/img_22.jpg" alt="Free HTML5 Bootstrap template"></a>
        		        		<div class="fh5co-desc">Quos repellendus repudiandae debitis reprehenderit cupiditate cumque accusamus exercitationem, harum.</div>
        		</div>
        	</div>
        	<div class="item">
        		<div class="animate-box">
        		        		<a href="/img/img_23.jpg" class="image-popup fh5co-board-img"><img src="/img/img_23.jpg" alt="Free HTML5 Bootstrap template"></a>
        		        		<div class="fh5co-desc">Sunt numquam itaque delectus, dignissimos dolorem obcaecati vel, atque eos.</div>
        		</div>
        	</div>
        	<div class="item">
        		<div class="animate-box">
        		        		<a href="/img/img_24.jpg" class="image-popup fh5co-board-img"><img src="/img/img_24.jpg" alt="Free HTML5 Bootstrap template"></a>
        		        		<div class="fh5co-desc">Adipisci consequuntur ipsa fugit perspiciatis eligendi. Omnis blanditiis, totam placeat.</div>
        		</div>
        	</div>
        	<div class="item">
        		<div class="animate-box">
        		        		<a href="/img/img_25.jpg" class="image-popup fh5co-board-img"><img src="/img/img_25.jpg" alt="Free HTML5 Bootstrap template"></a>
        		        		<div class="fh5co-desc">Quos repellendus repudiandae debitis reprehenderit cupiditate cumque accusamus exercitationem, harum.</div>
        		</div>
        	</div>
        	<div class="item">
        		<div class="animate-box">
        		        		<a href="/img/img_26.jpg" class="image-popup fh5co-board-img"><img src="/img/img_26.jpg" alt="Free HTML5 Bootstrap template"></a>
        		        		<div class="fh5co-desc">Sunt numquam itaque delectus, dignissimos dolorem obcaecati vel, atque eos.</div>
        		</div>
        	</div>
        	<div class="item">
        		<div class="animate-box">
        		        		<a href="/img/img_27.jpg" class="image-popup fh5co-board-img"><img src="/img/img_27.jpg" alt="Free HTML5 Bootstrap template"></a>
        		        		<div class="fh5co-desc">Adipisci consequuntur ipsa fugit perspiciatis eligendi. Omnis blanditiis, totam placeat.</div>
        		</div>
        	</div>
        	<div class="item">
        		<div class="animate-box">
        		        		<a href="/img/img_28.jpg" class="image-popup fh5co-board-img"><img src="/img/img_28.jpg" alt="Free HTML5 Bootstrap template"></a>
        		        		<div class="fh5co-desc">Adipisci consequuntur ipsa fugit perspiciatis eligendi. Omnis blanditiis, totam placeat.</div>
        		</div>
        	</div>
        	<div class="item">
        		<div class="animate-box">
        		        		<a href="/img/img_29.jpg" class="image-popup fh5co-board-img"><img src="/img/img_29.jpg" alt="Free HTML5 Bootstrap template"></a>
        		        		<div class="fh5co-desc">Adipisci consequuntur ipsa fugit perspiciatis eligendi. Omnis blanditiis, totam placeat.</div>
        		</div>
        	</div>
        	<div class="item">
        		<div class="animate-box">
        		        		<a href="/img/img_30.jpg" class="image-popup fh5co-board-img"><img src="/img/img_30.jpg" alt="Free HTML5 Bootstrap template"></a>
        		        		<div class="fh5co-desc">Adipisci consequuntur ipsa fugit perspiciatis eligendi. Omnis blanditiis, totam placeat.</div>
        		</div>
        	</div> -->
        </div>
        </div>
       </div>
	</div>
    <div class="container col-md-12 text-center">
        {{ $info->links() }}
        </div>
	<footer id="fh5co-footer">
		
		<div class="container">
			<div class="row row-padded">
				<div class="col-md-12 text-center">
					<!-- <p class="fh5co-social-icons">
						<a href="#"><i class="icon-twitter"></i></a>
						<a href="#"><i class="icon-facebook"></i></a>
						<a href="#"><i class="icon-instagram"></i></a>
						<a href="#"><i class="icon-dribbble"></i></a>
						<a href="#"><i class="icon-youtube"></i></a>
					</p> -->
					<p><small>&copy; 首页 | 字词我们 | QQ群</small></p>
				</div>
			</div>
		</div>
	</footer>


	<!-- jQuery -->
	<script src="/js/picjs/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="/js/picjs/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="/js/picjs/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="/js/picjs/jquery.waypoints.min.js"></script>
	<!-- Magnific Popup -->
	<script src="/js/picjs/jquery.magnific-popup.min.js"></script>
	<!-- Salvattore -->
	<script src="/js/picjs/salvattore.min.js"></script>
	<!-- Main JS -->
	<script src="/js/picjs/main.js"></script>

	

	
	</body>
</html>
