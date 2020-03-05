<!DOCTYPE html>
<!-- saved from url=(0044)https://v4.bootcss.com/docs/examples/album/# -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="wanfeng">
    <title>嘴甜生成器</title>
    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="/css/album.css" rel="stylesheet">
  </head>
  <body>
    <header>
  <div class="navbar navbar-dark bg-info shadow-sm">
    <div class="container d-flex justify-content-between">
      <a href="#" class="navbar-brand d-flex align-items-center">
        <img src="/img/chp.png" alt="">
        <strong>嘴甜生成器</strong>
      </a>
    </div>
  </div>
</header>

<main role="main">

  <section class="jumbotron text-center">
    <div class="container" style="height:300px;">
      <!-- <h1>Album example</h1> -->
      <p class="lead text-muted border-bottom pb-5 pt-4" style="font-size:1.1rem;" >{{$lovewords->content}}</p>
      
    </div>
    <p>
        <button type="button" id="copy" class="btn btn-success">复制</button>
        <button type="button" class="btn btn-info">换一句</button>
        
      </p>
  </section>
</main>

<footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">© 2017-2020 nmsl8.club</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">首页</a></li>
      <li class="list-inline-item"><a href="#">字词我们</a></li>
      <li class="list-inline-item"><a href="#">QQ群</a></li>
    </ul>
</footer>
 <script src="{{ mix('js/app.js') }}"></script>
 <script>
  $('.btn-success').click(function () {
    alert(123)
  });
 </script>
</body>