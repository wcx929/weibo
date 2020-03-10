
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>抽象表情包</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="抽象表情包,nmsl表情包,nmsl8.club,嘴臭生成器" />
	<link rel="icon" href="/img/cx.ico">
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">
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
	<link rel="stylesheet" href="/css/layer.css">
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
			@if ($sentence_type->count() > 0)
			@foreach ($sentence_type as $vo)
			<li><a href="{{ route('pic', array('type'=>$vo->id))}}">{{$vo->type_name}}</a></li>
			@endforeach
        	@else
			  <li><a href="#">暂时还没有分类</a></li>
			@endif
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
					<a class="navbar-brand" href="index.html"> u r b b r   g r o yo gai</a>		
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
        		<div class="animate-box" style="margin:1.5rem 0.8rem 1.5rem 1rem;">
        			<p>{{$status->content}}</p>
        			<span class="copys" data-clipboard-text="{{$status->content}}" style="float:right"><svg t="1583825846147" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="4830" width="16" height="16"><path d="M852.683175 1022.699683V852.195556h170.179047V0.812698H171.479365v170.179048H1.137778v851.545397h851.545397v0.16254zM228.205714 57.701587h737.930159v737.930159h-113.452698V171.154286H228.205714V57.701587zM57.864127 227.880635h737.930159v737.930159h-737.930159v-737.930159z" fill="#707070" p-id="4831"></path><path d="M661.048889 433.005714H206.262857c-15.44127 0-28.119365-12.678095-28.119365-28.119365s12.678095-28.119365 28.119365-28.119365h454.786032c15.44127 0 28.119365 12.515556 28.119365 28.119365-0.16254 15.60381-12.840635 28.119365-28.119365 28.119365z m0 181.231746H206.262857c-15.44127 0-28.119365-12.515556-28.119365-28.119365 0-15.44127 12.678095-28.119365 28.119365-28.119365h454.786032c15.44127 0 28.119365 12.515556 28.119365 28.119365-0.16254 15.27873-12.840635 28.119365-28.119365 28.119365z m0 180.906667H206.262857c-15.44127 0-28.119365-12.515556-28.119365-28.119365 0-15.44127 12.678095-28.119365 28.119365-28.119365h454.786032c15.44127 0 28.119365 12.515556 28.119365 28.119365-0.16254 15.44127-12.840635 28.119365-28.119365 28.119365z" fill="#707070" p-id="4832"></path></svg></span>
	        		<!--<a href="{{$status->pic_url}}" class="image-popup fh5co-board-img"><img src="{{$status->pic_url}}" alt="Free HTML5 Bootstrap template"></a>-->
        		</div>
        	</div>
        	@endforeach
        	@else
			  <p>没有数据！</p>
			@endif
        </div>
        </div>
       </div>
	</div>
	<a class="btn-default btn-sm" href="#" role="button" style="position:fixed;right:0;bottom:0">
<svg t="1583819717863" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="2263" width="32" height="32"><path d="M494.23872 296.03328l-409.6 409.59488a17.0496 17.0496 0 0 0 0 24.13568 17.0496 17.0496 0 0 0 24.13056 0l397.53728-397.53728 397.55264 397.54752a17.03936 17.03936 0 0 0 24.13056 0c3.328-3.328 5.00224-7.69536 5.00224-12.06272s-1.66912-8.73984-5.00224-12.06272l-409.6-409.6a17.05984 17.05984 0 0 0-24.15104-0.01536z" p-id="2264"></path></svg>
</a>
    <div class="container col-md-12 text-center">
        {{ $info->appends($filters)->render() }}
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
					<p><small>&copy; <a style="color:#818892" href='{{ route('home') }}'>首页</a>  | <a style="color:#818892" href='{{ route('home') }}'>字词我们</a> | QQ群</small></p>
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
	<script src="/js/clipboard.min.js"></script>
	<script src="/js/layer.js"></script>
	<script>
		 $(function(){
		 	var clipboard = new ClipboardJS('.copys');
			clipboard.on('success', function(e) {
				layer.open({
				    content: '复制成功'
				    ,skin: 'msg'
				    ,time: 1 //2秒后自动关闭
				  });
			});
			clipboard.on('error', function(e) {
				layer.open({
				    content: '复制失败'
				    ,skin: 'msg'
				    ,time: 1 //2秒后自动关闭
				  });
			});
		 })
	</script>
	</body>
</html>
