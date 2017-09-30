{{--@extends('layout.master')--}}
{{--@section('title', 'Cloud Computing Assignment 2')--}}


{{--@section('content')--}}
    {{--<div class="row">--}}
        {{--<div class="col-md-4 col-md-offset-4">--}}
            {{--<button class="btn btn-primary">--}}
                {{--<a href="{{ URL::to('api/calendar') }}">--}}
                    {{--Click to Login--}}
                {{--</a>--}}
            {{--</button>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--@endsection--}}

<html>
<head>
    <title> Cloud Computing Assignment 2 </title>


    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mainStyle.css') }}">
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
</head>
<body>

    <div class="row">
        <div class="col-md-6 col-md-offset-3 text-center h1">
            <div id="typed-strings" style="font-size:30px">
                <p>Welcome to SmartCalendar</p>
            </div>
            <span id="fSentence"></span>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 col-md-offset-3 text-center">
            <div id="loginBtn"></div>
        </div>
    </div>



    <script type="text/javascript" src="{{ asset('../node_modules/typed.js/lib/typed.js') }}"></script>

    <script>
        var fSentence = new Typed('#fSentence', {
            stringsElement: '#typed-strings',
            typeSpeed: 50,
            backSpeed: 50,
            showCursor: false,
            smartBackspace: false,
            onComplete: function(self) {
                var loginBtn = document.getElementById("loginBtn");
                var aTag = document.createElement('a');
                aTag.setAttribute('href','{{ URL::to('api/calendar') }}');
                aTag.setAttribute('style',
                    'color: white;' +
                    'font-size: 30px;' +
                    'background-color: gray;' +
                    'padding: 10px 10px 10px 10px;' +
                    'border-style: outset;' +
                    'text-decoration: none');
                aTag.innerHTML = "Login";
                loginBtn.appendChild(aTag);
            },
        });
    </script>


</body>
</html>
