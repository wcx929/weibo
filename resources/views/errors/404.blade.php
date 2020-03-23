<!DOCTYPE html>
<html lang="zh" >
<head>
  <meta charset="UTF-8">
  <title>404-nmsl8.club</title>
  <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/css/404style.css">
  <style>
    .font{
      font-family: "Times New Roman",Georgia,Serif ;
    }
  </style>
</head>
<body>
<!-- partial:index.partial.html -->
<div class="moon"></div>
<div class="moon__crater moon__crater1"></div>
<div class="moon__crater moon__crater2"></div>
<div class="moon__crater moon__crater3"></div>

<div class="star star1"></div>
<div class="star star2"></div>
<div class="star star3"></div>
<div class="star star4"></div>
<div class="star star5"></div>

<div class="error">
  <div class="error__title">404</div>
  <div class="error__subtitle">Emmmm...</div>
  <div class="error__description font">页面找不到咯，铁汁</div>
  <button onclick="func()" class="error__button error__button--active font">去主页</button>
</div>

<div class="astronaut">
  <div class="astronaut__backpack"></div>
  <div class="astronaut__body"></div>
  <div class="astronaut__body__chest"></div>
  <div class="astronaut__arm-left1"></div>
  <div class="astronaut__arm-left2"></div>
  <div class="astronaut__arm-right1"></div>
  <div class="astronaut__arm-right2"></div>
  <div class="astronaut__arm-thumb-left"></div>
  <div class="astronaut__arm-thumb-right"></div>
  <div class="astronaut__leg-left"></div>
  <div class="astronaut__leg-right"></div>
  <div class="astronaut__foot-left"></div>
  <div class="astronaut__foot-right"></div>
  <div class="astronaut__wrist-left"></div>
  <div class="astronaut__wrist-right"></div>
  
  <div class="astronaut__cord">
    <canvas id="cord" height="500px" width="500px"></canvas>
  </div>
  
  <div class="astronaut__head">
    <canvas id="visor" width="60px" height="60px"></canvas>
    <div class="astronaut__head-visor-flare1"></div>
    <div class="astronaut__head-visor-flare2"></div>
  </div>
</div>
<!-- partial -->
  <script  src="/js/404script.js"></script>
  <script>
  	function func(){
  		location.href="{{ route('home') }}"
  	}
  </script>

</body>
</html>