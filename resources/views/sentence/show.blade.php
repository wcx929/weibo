<!DOCTYPE html>
<!-- saved from url=(0044)https://v4.bootcss.com/docs/examples/album/# -->
<html lang="zh"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="_token" content="{{ csrf_token() }}"/>
    <meta name="author" content="wanfeng">
    <link rel="icon" href="/img/cx.ico">
    <title>{{$sentence->type_name}}</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link href="/css/album.css" rel="stylesheet">
  </head>
  <body>
    <header>
  <div class="navbar navbar-dark {{$sentence->bg}} shadow-sm">
    <div class="container d-flex justify-content-between">
      <a href="#" class="navbar-brand d-flex align-items-center">
        <img src="{{$sentence->logo}}" chpalt="">
        <strong>{{$sentence->type_name}}</strong>
      </a>
    </div>
  </div>
</header>
<main role="main">
  <section class="jumbotron text-center">
    <div class="container" style="height:300px;">
      <!-- <h1>Album example</h1> -->
      <p id="words" class="lead text-muted border-bottom pb-5 pt-4" style="font-size:1.1rem;" >{{$sentence->content}}</p>    
    </div>
    <p>
    	<a href="{{route('senlist', array('type'=>$sentence->type))}}" class="btn btn-info" role="button">列表查看</a> 
        <button type="button" id="copy" data-clipboard-text="{{$sentence->content}}" data-clipboard-target="#words" class="btn btn-success">复制</button>
        <button type="button" class="btn btn-info getwords">换一句</button>    
      </p>
  </section>
</main>

@include('layouts._footer')
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
  $('.getwords').click(function () {
    $('.getwords').prop('disabled', true);
    var type = {{$sentence->type}}
    $.ajax({
      type: 'GET',
      url: '/getloveword',
      data: { type : type},
      dataType: 'json',
      headers: {
      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
      },
      success: function(data){
        $("#words").text(data.content);
        $("#copy").attr("data-clipboard-text",data.content);
        $('.getwords').prop('disabled', false);
      },
      error: function(xhr, type){
      alert('Ajax error!')
      }

      });
  });
})
 </script>
</body>