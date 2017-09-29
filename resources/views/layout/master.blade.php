<html>
<head>
    <title> @yield('title') </title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    {{-- font family --}}
    <link href="https://fonts.googleapis.com/css?family=Frijole|Yeseva+One" rel="stylesheet">

    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/moment.min.js') }}"></script>

    {{-- P5 JavaScript library --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.5.14/p5.js"></script>
    <script src="{{ asset('js/Clock.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/Calendar.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/weather.js') }}" type="text/javascript"></script>

    {{-- FullCalendar --}}
    <link rel="stylesheet" href="{{ asset('css/fullcalendar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fullcalendar.print.min.css') }}" media="print">
    <script src="{{ asset('js/fullcalendar.min.js') }}"></script>


</head>
<body class="backgroundImage" onload="startTime()">
@include('shared.navbar')
<div class="container-fluid">
    @yield('content')
</div>
{{--@include('shared.footer')--}}
</body>

<script type="text/javascript">
    var currentTime = new Date().getHours();
    if (7 <= currentTime && currentTime < 20) {
        if (document.body) {
            document.body.background = "{{ asset('images/backgrounds/Background_Day.png') }}";
        }
    }
    else {
        if (document.body) {
            document.body.background = "{{ asset('images/backgrounds/Background_Night.jpg') }}";
        }
    }

</script>

</html>