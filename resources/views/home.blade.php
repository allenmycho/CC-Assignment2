@extends('layout.master')
@section('title', 'home')


@section('content')
    <div class="row">
        <div class="col-md-2 col-md-offset-10">
            <button class="btn btn-primary">
                <a href="{{ URL::to('api/calendar') }}"></a>Login
                {{--<a href="api/calendar"></a>Login--}}
            </button>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2 col-md-offset-1">
            <div id="date" style="font-size: 25px"></div>
            <div id="clock" style="font-size: 40px"></div>
        </div>
        <div class="col-md-3 col-md-offset-6">
            <div id="weatherNow" style="font-size:40px"></div>
            <div id="weatherHigh"></div>
            <img id="weatherIcon" src="" alt="Weather Icon" height="60" width="60">
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 col-md-offset-3" style="margin-top: 50px">
            <div id="fullCal"></div>
        </div>
    </div>


@endsection




