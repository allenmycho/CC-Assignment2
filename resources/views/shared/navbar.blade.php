{{--<div id="myNav" class="overlay">--}}
    {{--<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>--}}
    {{--<div class="overlay-content">--}}
        {{--<a href="{{ url('/') }}">Home</a>--}}
        {{--<a href="{{ url('faq') }}">FAQ</a>--}}

        {{--<!-- Authentication Links -->--}}
        {{--@if (Auth::guest())--}}
            {{--<a href="{{ route('login') }}">Login</a>--}}
            {{--<a href="{{ route('register') }}">Register</a>--}}
        {{--@else--}}
            {{--<a href="{{ route('user.create') }}">Create User</a>--}}
            {{--<a href="{{ route('ticket.create') }}">Create Ticket</a>--}}
        {{--@endif--}}
    {{--</div>--}}
{{--</div>--}}

{{--<div class="container-fluid">--}}

    {{--<div class="row">--}}

        {{--<div class="col-md-2 col-md-offset-9">--}}
            {{--<div class="navbar navbar-right">--}}
                {{--@if (Auth::check())--}}
                    {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">--}}
                        {{--Welcome, {{ Auth::user()->name }} <span class="caret"></span>--}}
                    {{--</a>--}}

                    {{--<ul class="dropdown-menu" role="menu">--}}
                        {{--<li>--}}
                            {{--<a href="{{ route('logout') }}"--}}
                               {{--onclick="event.preventDefault();--}}
                                                 {{--document.getElementById('logout-form').submit();">--}}
                                {{--Logout--}}
                            {{--</a>--}}

                            {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                                {{--{{ csrf_field() }}--}}
                            {{--</form>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--@endif--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<div class="col-md-1">--}}
            {{--<span class="navbar navbar-right" style="font-size:40px;cursor:pointer;color:rosybrown" onclick="openNav()">&#9776;</span>--}}
        {{--</div>--}}
    {{--</div>--}}

{{--</div>--}}


{{--<script>--}}
    {{--function openNav() {--}}
        {{--document.getElementById("myNav").style.height = "100%";--}}
    {{--}--}}

    {{--function closeNav() {--}}
        {{--document.getElementById("myNav").style.height = "0%";--}}
    {{--}--}}
{{--</script>--}}

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Cloud Project</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Page 1-1</a></li>
                    <li><a href="#">Page 1-2</a></li>
                    <li><a href="#">Page 1-3</a></li>
                </ul>
            </li>
            <li><a href="#">Page 2</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
    </div>
</nav>