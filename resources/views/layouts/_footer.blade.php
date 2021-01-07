<style>
	a{
		color:grey;
		font-size:0.6rem;
	}
</style>
<link rel="stylesheet" href="/css/layer.css">
<script src="/js/layer.js"></script>
<script src="/js/picjs/jquery.min.js"></script>
<footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1"><a href="{{route('home')}}">© 2017-2020 nmsl8.club</a> | <a href="http://www.beian.miit.gov.cn" target="_blank" >浙ICP备19003075号-1</a></p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="{{route('home')}}">首页</a></li>
      <li class="list-inline-item"><a href="{{route('support')}}">字词我们</a></li>
      <li class="list-inline-item qun"><a href="#">QQ群</a></li>
      <li class="list-inline-item wxapp"><a href="#">小程序</a></li>
    </ul>
</footer>
<script>
	$(".qun").click(function () {
				//自定义标题风格
			  layer.open({
			    title: [
			      '打开QQ扫一扫加群',
			      'background-color: #8B8B7A; color:#fff;'
			    ]
			    ,content: "<img src='/img/home_logo/qun.png' >"
			  });
			})
	$(".wxapp").click(function () {
				//自定义标题风格
			  layer.open({
			    title: [
			      '打开微信/QQ扫一扫，进入小程序使用更便捷',
			      'background-color: #8B8B7A; color:#fff;'
			    ]
			    ,content: "<div><img style='width:50%;float: left' src='/img/home_logo/applogo.png' >" +
            "<img style='width:50%;' src='/img/home_logo/qqapp.png' ></div>"
			  });
			})
</script>
