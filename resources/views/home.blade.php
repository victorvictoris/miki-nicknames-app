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
        <a href="."><img style="width: 50px" src="{{asset('images/button-image-2.png')}}" alt="quiz-button"></a>
{{--        <a href="{{route('quiz')}}"><img style="width: 50px" src="{{asset('images/button-image-1.png')}}" alt="quiz-button"></a>--}}
{{--        <a href="{{route('report')}}"><img style="width: 50px" src="{{asset('images/button-image-3.png')}}" alt="quiz-button"></a>--}}
    </div>

    <div class="nickname">
        @if(!$nickname)
            <form id="selectForm" method="POST" action="{{route('select.nickname')}}">
                @csrf
                <a href="javascript:{}" onclick="document.getElementById('selectForm').submit();">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    {{$buttonText}}
                </a>
            </form>
        @else
{{--            <span style="color: white">{{$greet}}, {{$nickname->name}}!</span><br>--}}
            <span style="color: white">{{$nickname->name}}!</span><br>
            <span class="nickname-description" style="color: white">~ {{$nickname->description}} ~</span>
        @endif
    </div>


    <div id="stars"></div>
    <div id="stars2"></div>
    <div id="stars3"></div>
    <div id="stars4"></div>
</div>
</body>
</html>
