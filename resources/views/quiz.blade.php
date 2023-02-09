<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MIKI {{$version}}</title>
    <link rel="icon" type="image/png" href="path-to-your-favicon"/>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body>
<div class="bg-animation">
    <div class="interactive-buttons">
        <a href="{{route('home')}}"><img style="width: 50px" src="{{asset('images/button-image-2.png')}}" alt="quiz-button"></a>
        <a href="{{route('quiz')}}"><img style="width: 50px" src="{{asset('images/button-image-1.png')}}" alt="quiz-button"></a>
        <a href="{{route('report')}}"><img style="width: 50px" src="{{asset('images/button-image-3.png')}}" alt="quiz-button"></a>
    </div>


    <div id="stars"></div>
    <div id="stars2"></div>
    <div id="stars3"></div>
    <div id="stars4"></div>
</div>
</body>
</html>
