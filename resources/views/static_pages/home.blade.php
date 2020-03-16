<!DOCTYPE html>
<!-- saved from url=(0048)https://v4.bootcss.com/docs/examples/offcanvas/# -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>抽象APP</title>
    <!-- Bootstrap core CSS -->
<link href="/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Favicons -->
<link rel="icon" href="/img/cx.ico">
<meta name="theme-color" content="#563d7c">
    <!-- Custom styles for this template -->
    <link href="/css/offcanvas.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
  <a class="navbar-brand mr-auto mr-lg-0" href="https://v4.bootcss.com/docs/examples/offcanvas/#">抽象APP</a>
</nav>
<main role="main" class="container">
  <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-green rounded shadow-sm">
    <!--<img class="mr-3" src="./Offcanvas template · Bootstrap_files/bootstrap-outline.svg" alt="" width="48" height="48">-->
    <div class="lh-100">
      <!--<h6 class="mb-0 text-white lh-100">每日一句</h6>-->
      <small>且随疾风前行，身后亦需留心</small>
    </div>
  </div>

  <div class="my-3 p-3 bg-white rounded shadow-sm">
  	
    <!--<h6 class="border-bottom border-gray pb-2 mb-0">抽象表情包</h6>-->
    
    <div class="media text-muted pt-3" >
      <img src="/img/home_logo/bqb.png" alt="">
      
      <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
      	<a href="{{ route('pic') }}">
          <strong class="d-block text-primary">抽象表情包</strong>
          <span style="color:#6c757d">🏄‍人用的表情包</span>
        </a>
      </p>
      
    </div>
    <div class="media text-muted pt-3">
      <img src="/img/home_logo/nmsl.png" alt="">
      
      <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
      	<a href="{{ route('loveword', array('type'=>2))}}">
          <strong class="d-block text-primary">嘴臭生成器</strong>
          <span style="color:#6c757d">最简单的嘴臭，最极致的享受</span>
        </a>
      </p>
      
    </div>
    <div class="media text-muted pt-3">
      <img src="/img/home_logo/zt.png" alt="">
      <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
        <a href="{{ route('loveword', array('type'=>1))}}">
          <strong class="d-block text-primary">嘴甜生成器</strong>
          <span style="color:#6c757d">谁不想要甜甜的恋爱💑</span>
        </a>
      </p>
    </div>
    <div class="media text-muted pt-3">
      <img src="/img/home_logo/pyq.png" alt="">
      <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
        <a href="{{ route('loveword', array('type'=>3))}}">
          <strong class="d-block text-primary">朋友圈文案生成器</strong>
          <span style="color:#6c757d">不知道发什么？来选一条吧</span>
        </a>
      </p>
    </div>
    <div class="media text-muted pt-3">
      <img src="/img/home_logo/djt.png" alt="">
      <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
        <a href="{{ route('loveword', array('type'=>4))}}">
          <strong class="d-block text-primary">毒鸡汤生成器</strong>
          <span style="color:#6c757d">‘有时候你不逼自己一把，你都不知道什么叫绝望’</span>
        </a>
      </p>
    </div>
    <div class="media text-muted pt-3">
      <img src="/img/home_logo/fsj.png" alt="">
      
      <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
      	<a href="{{ route('fsj') }}">
          <strong class="d-block text-primary">浮生记</strong>
          <span style="color:#6c757d">你在山上，看着我死.</span>
        </a>
      </p>
      
    </div>
    <div class="media text-muted pt-3">
      <img src="/img/home_logo/cxh.png" alt="">
      <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
      	<a href="{{ route('cx') }}" target="_blank">
        <strong class="d-block text-primary">抽象话生成器</strong>
        <span style="color:#6c757d">🌶是💉🉐🐂🍺</span>
        </a>
      </p>
    </div>
    <div class="media text-muted pt-3">
      <img src="/img/home_logo/rjsg.png" alt="">
      <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
      	<a href="http://k.nmsl8.club/" target="_blank">
        <strong class="d-block text-primary">人间失格-交流社区</strong>
        <span style="color:#6c757d">胆小鬼连幸福都会害怕,碰到棉花都会受伤,有时还被幸福所伤。 --《人间失格》</span>
        </a>
      </p>
    </div>
    <small class="d-block text-right mt-3">
      <a href="#">🌶🌶🌶</a>
    </small>
  </div>

  <!--   <div class="my-3 p-3 bg-white rounded shadow-sm">
    <h6 class="border-bottom border-gray pb-2 mb-0">Suggestions</h6>
    <div class="media text-muted pt-3">
      <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"></rect><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>
      <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
        <div class="d-flex justify-content-between align-items-center w-100">
          <strong class="text-gray-dark">Full Name</strong>
          <a href="https://v4.bootcss.com/docs/examples/offcanvas/#">Follow</a>
        </div>
        <span class="d-block">@username</span>
      </div>
    </div>
    <div class="media text-muted pt-3">
      <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"></rect><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>
      <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
        <div class="d-flex justify-content-between align-items-center w-100">
          <strong class="text-gray-dark">Full Name</strong>
          <a href="https://v4.bootcss.com/docs/examples/offcanvas/#">Follow</a>
        </div>
        <span class="d-block">@username</span>
      </div>
    </div>
    <div class="media text-muted pt-3">
      <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"></rect><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>
      <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
        <div class="d-flex justify-content-between align-items-center w-100">
          <strong class="text-gray-dark">Full Name</strong>
          <a href="https://v4.bootcss.com/docs/examples/offcanvas/#">Follow</a>
        </div>
        <span class="d-block">@username</span>
      </div>
    </div>
    <small class="d-block text-right mt-3">
      <a href="https://v4.bootcss.com/docs/examples/offcanvas/#">All suggestions</a>
    </small>
  </di -->
  @include('layouts._footer')
</main>
</body>
</html>