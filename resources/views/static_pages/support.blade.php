<!DOCTYPE html>
<!-- saved from url=(0044)https://v4.bootcss.com/docs/examples/album/# -->
<html lang="zh"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="_token" content="{{ csrf_token() }}"/>
    <meta name="author" content="wanfeng">
    <title>字词我们</title>
    <link rel="icon" href="/img/cx.ico">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
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
      <p style="color:grey;font-size:14px;">您的捐助将会用在nmsl8.club的网站维护以及服务器的升级和续期。不论多少您的捐助信息都将在此列表展示，如果您不希望进行展示或者漏掉了您的捐助信息，您可以发送邮件到1161993909@qq.com或者进群后联系管理员。最后，感谢感谢感谢您对nmsl8.club的支持</p>
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
    @if ($supports->count() > 0)
    @foreach ($supports as $support)
    <tr>
      <td>{{ $support->name }}</td>
      <td>{{ $support->money }}</td>
      <td>{{ $support->desc }}</td>
      <td>{{ $support->created_at }}</td>
    </tr>
    @endforeach
    @else
        <p>没有数据！</p>
      @endif
  </tbody>
</table>
        <div class="container col-md-12 text-center">
        {{ $supports->render() }}
        </div>
</div>
  </section>

</main>

@include('layouts._footer')
 <script src="{{ mix('js/app.js') }}"></script>
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
