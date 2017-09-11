@extends('layout.master')
@section('title', 'home')


@section('content')
    {{--<div class="row">--}}
    {{--<div class="col-md-12">--}}
    {{--<img id="image1" src="images/rmit_bg.jpg" alt="rmit background image" style="width:100%;height:100%" />--}}
    {{--</div>--}}
    {{--</div>--}}




    {{--<div class="row" style="margin-top:-20px">--}}
    {{--<div class="col-md-6 col-md-offset-1">--}}
    {{--<img class="img-responsive" src="{{asset('images/bld80.jpg')}}" style="margin:10px 0px 10px 0px" />--}}
    {{--</div>--}}

    {{--<div class="col-md-4">--}}
    {{--<p class="h3 text-center">Resolve your IT issues with ITS today!</p><br />--}}
    {{--<p>Information Technology Services (ITS) provides RMIT University with information and communication technology in support of RMIT’s research, learning teaching and administrative activities.</p><br />--}}
    {{--<div class="row">--}}
    {{--<div class="col-md-6 col-md-offset-3">--}}
    {{--<a class="btn btn-primary btn-group-justified btn-lg" href="{{ URL::to('ticket/create') }}">Request a Service</a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="row" style="margin-top:10px">--}}
    {{--<div class="col-md-5 col-md-offset-1">--}}
    {{--<p class="h3 text-center">Want to find out more about ITS?</p><br />--}}
    {{--<p>RMIT students as well as staff can get support by ITS. Request any issue and resolve it as soon as possible!</p><br />--}}
    {{--<div class="row">--}}
    {{--<div class="col-md-4 col-md-offset-4">--}}
    {{--<a class="btn btn-danger btn-group-justified btn-lg" href="{{ URL::to('faq') }}">Go to FAQ</a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-md-5">--}}
    {{--<img class="img-responsive" src="{{ asset('images/its_image.jpg') }}" />--}}
    {{--</div>--}}
    {{--</div>--}}


    <div class="row">
        <div class="col-md-12">
            <div id="fullCal"></div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#fullCal').fullCalendar({

                // url
                events: 'cc-ass2/public/cal'


            });
        });
    </script>
@endsection




