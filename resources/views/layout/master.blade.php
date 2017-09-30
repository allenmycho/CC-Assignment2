<html>
<head>
    <title> @yield('title') </title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/moment.min.js') }}"></script>

    {{-- P5 JavaScript library --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.5.14/p5.js"></script>

    {{-- FullCalendar --}}
    <link rel="stylesheet" href="{{ asset('css/fullcalendar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fullcalendar.print.min.css') }}" media="print">
    <script src="{{ asset('js/fullcalendar.min.js') }}"></script>

</head>
<body class="backgroundImage" onload="startTime()">
<div class="container-fluid">
    @yield('content')
</div>
</body>

<script src="{{ asset('js/Clock.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/Calendar.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/weather.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/Helper.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/Notify.js') }}" type="text/javascript"></script>

<footer>
    <div class="container-fluid" style="margin-top: 50px">
        <div class="row">
            <div class="col-lg-12 jumbotron" style="padding: 1.5em;">
                <div style="text-align: center">&lt;/&gt; with &lt;3 by Alex Fonseka & Minyoung Cho</div>
            </div>
        </div>
    </div>
</footer>

</html>