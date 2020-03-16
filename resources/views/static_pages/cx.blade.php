<!DOCTYPE html>
<!-- saved from url=(0044)https://v4.bootcss.com/docs/examples/album/# -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="_token" content="{{ csrf_token() }}"/>
    <meta name="author" content="wanfeng">
    <link rel="icon" href="/img/cx.ico">
    <title>抽象话生成器</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link href="/css/album.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/layer.css">
  </head>
  <body>
    <header>
  <div class="navbar navbar-dark bg-info shadow-sm">
    <div class="container d-flex justify-content-between">
      <a href="#" class="navbar-brand d-flex align-items-center">
        <img src="/img/chp.png" chpalt="">
        <strong>抽象话生成器</strong>
      </a>
    </div>
  </div>
</header>

<body>

    <div class="container">
        <div class="row pb-5 pt-4">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="imei">
                        要转换的语句
                    </label>
                    <input type="text" class="form-control" id="rawText" autofocus placeholder="输入你要转换的语句">
                </div>
                <button class="btn btn-block btn-outline-primary" onclick="getResult()" id="create">
                    生成抽象话
                </button>
                <div class="form-group">
                    <label for="imei">
                        转换结果
                    </label>
                    <input type="text" class="form-control" id="resultText">
                </div>
                <button class="btn btn-block btn-outline-primary" id="d_clip_button"
                    data-clipboard-target="#resultText">
                    复制结果
                </button>
                <br/>
                <br /><br /><br />
            </div>
        </div>
    </div>
    
    <div class="container"><p style="text-align:center;"><a href='https://github.com/chenxuuu/chouxianghua'>源码by 晨旭 | GitHub源码（欢迎star）</a></p></div>
    @include('layouts._footer')
    <script>
        $("#create").attr({"disabled":"disabled"});
        $("#create").text("加载中，请稍候。。。");
        function getResult() {
            if(document.getElementById('rawText').value == ""){
                document.getElementById("resultText").value = "👇🈹🌶里转🈳7⃣呢¿敲🐔🈹字8⃣❕";
            }
            else
            {
                document.getElementById("resultText").value = "生成中，请稍候。。。";
                document.getElementById("resultText").value = chouxiang(document.getElementById('rawText').value);
            }
        }
        function retrenResult() {
            if(document.getElementById('chouxiangText').value == ""){
                document.getElementById("resultText").value = "你搁那里转空气呢？敲几个字吧！";
            }
            else
            {
                document.getElementById("resultText").value = "还原中，请稍候。。。";
                document.getElementById("resultText").value = dechouxiang(document.getElementById('chouxiangText').value);
            }
        }
    </script>
    <script src="/js/layer.js"></script>
    <script type="text/javascript" src="https://cdn.staticfile.org/clipboard.js/2.0.4/clipboard.min.js"></script>
    <script>
        var btn = document.getElementById('d_clip_button');
        var clipboard = new ClipboardJS(btn);
        clipboard.on('success', function (e) {
            layer.open({
				    content: '复制成功'
				    ,skin: 'msg'
				    ,time: 1 //2秒后自动关闭
				  });
        });
        clipboard.on('error', function (e) {
        	layer.open({
				    content: '复制失败了，自己动手吧'
				    ,skin: 'msg'
				    ,time: 1 //2秒后自动关闭
				  });
        });
    </script>
    <script>
        var _hmt = _hmt || [];
        (function () {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?5762197b261e8aa1c5033c7d7b146ecd";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
    <script>
        if(location.search.substring(1)-(new Date()).valueOf() < -1000 * 60)
        {
            if(window.location.href.indexOf("?") < 0)
                location.href = window.location.href+"?"+(new Date()).valueOf();
            else
                location.href = window.location.href.substring(0,window.location.href.indexOf("?")+1)+(new Date()).valueOf();
        }

    </script>
    <script>
        (function () {
            var hm = document.createElement("script");
            hm.src = "./js/chouxiang.js";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
</body>

</html>