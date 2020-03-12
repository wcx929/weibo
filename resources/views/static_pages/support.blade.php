<!DOCTYPE html>
<!-- saved from url=(0044)https://v4.bootcss.com/docs/examples/album/# -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="_token" content="{{ csrf_token() }}"/>
    <meta name="author" content="wanfeng">
    <title>字词我们</title>
    <link rel="icon" href="/img/cx.ico">
    <link href="/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="/css/album.css" rel="stylesheet">
  </head>
  <body>
    <header>
  <div class="navbar navbar-dark bg-zc shadow-sm">
    <div class="container d-flex justify-content-between">
      <a href="#" class="navbar-brand d-flex align-items-center">
        <img src="/img/support.png" alt="">
        <strong>字词我们</strong>
      </a>
    </div>
  </div>
</header>
<main role="main">
  <section class="jumbotron text-center">
    <div class="container pb-5">
      <!-- <h1>Album example</h1> -->
      <img style="width:60%" src="/img/wxzf.jpg" id="wx"  alt="">
      <img style="width:60%;display: none;" src="/img/zfbzf.jpg" id="zfb" alt="">
      <img style="width:60%;display: none;" src="/img/qqzf.jpg" id="qq" alt="">
    </div>
    <p>
    	<button type="button" onclick="wx()"  class="btn btn-success btn-sm">微信支付</button>
        <button type="button" onclick="zfb()"  class="btn btn-info btn-sm">支付宝支付</button>
        <button type="button" onclick="qq()" style="color:#fff;" class="btn btn-warning btn-sm">QQ支付</button>    
      </p>
      <div class="table-responsive">
  <table class="table table-striped">
  <thead>
    <tr>
      <th>名称</th>
      <th>金额</th>
      <th>寄语</th>
      <th>时间</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>晚风</td>
      <td>99</td>
      <td>没什么好说的给兄弟们拜个早年吧</td>
      <td>2020-01-01</td>
    </tr>
    <tr>
      <td>Sachin</td>
      <td>Mumbai</td>
      <td>400003</td>
      <td>560001</td>
    </tr>
    <tr>
      <td>Uma</td>
      <td>Pune</td>
      <td>411027</td>
      <td>560001</td>
    </tr>
  </tbody>
</table>
</div>
  </section>
  
</main>

@include('layouts._footer')
 <script src="{{ mix('js/app.js') }}"></script>
 <script src="/js/clipboard.min.js"></script>
 <script>
  function zfb(){
      $("#zfb").show();
      $("#qq").hide();
      $("#wx").hide();
    }
    function wx(){
      $("#zfb").hide();
      $("#qq").hide();
      $("#wx").show();
    }
    function qq(){
      $("#zfb").hide();
      $("#qq").show();
      $("#wx").hide();
    }
 </script>
</body>