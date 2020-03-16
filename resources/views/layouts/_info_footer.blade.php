	<link rel="stylesheet" href="/css/layer.css">
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
			$("#qun").click(function () {
				//自定义标题风格
			  layer.open({
			    title: [
			      '打开QQ扫一扫加群',
			      'background-color: #8B8B7A; color:#fff;'
			    ]
			    ,content: "<img src='/img/home_logo/qun.png' >"
			  });
			})
		 })
	</script>