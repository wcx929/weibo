<!DOCTYPE html>
<!-- saved from url=(0044)https://v4.bootcss.com/docs/examples/album/# -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="_token" content="{{ csrf_token() }}"/>
    <meta name="author" content="wanfeng">
    <title>嘴甜生成器</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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
      <p id="words" class="lead text-muted border-bottom pb-5 pt-4" style="font-size:1.1rem;" >{{$lovewords->content}}</p>    
    </div>
    <p>
        <button type="button" id="copy" data-clipboard-text="{{$lovewords->content}}" data-clipboard-target="#words" class="btn btn-success">复制</button>
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
 <script src="/js/clipboard.min.js"></script>
 <script>
 $(function(){
  //new ClipboardJS('.btn');
  var clipboard = new ClipboardJS('.btn');
  clipboard.on('success', function(e) {
    $("#copy").text('已复制');
    setTimeout(function (){$("#copy").text('复制');},500);
  });
  clipboard.on('error', function(e) {
    $("#copy").text('复制失败');
  });
  $('.btn-info').click(function () {
    $('.btn-info').prop('disabled', true);
    $.ajax({
      type: 'POST',
      url: '/getloveword',
      data: { date : '2015-03-12'},
      dataType: 'json',
      headers: {
      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
      },
      success: function(data){
        $("#words").text(data.content);
        $("#copy").attr("data-clipboard-text",data.content);
        $('.btn-info').prop('disabled', false);
      },
      error: function(xhr, type){
      alert('Ajax error!')
      }

      });
  });
})
 </script>
</body>