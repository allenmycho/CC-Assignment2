@extends('layout.master')
@section('title', 'home')


@section('content')
    <div class="row">
        <div class="col-md-2 col-md-offset-1">
            <div id="clock" style="font-size: 40px"></div>
        </div>
        <div class="col-md-3 col-md-offset-6">
            <div id="weatherHigh"></div>
            <div id="weatherNow" style="font-size:40px"></div>
            <div id="weatherLow"></div>
            <img id="weatherIcon" src="" alt="Weather Icon" height="60" width="60">
        </div>


    </div>


    <div class="row">
        <div class="col-md-6 col-md-offset-3" style="margin-top: 50px">
            <div id="fullCal"></div>

        </div>






    <script>
        $(document).ready(function () {
            $('#fullCal').fullCalendar({


                // url
                events: 'api/calendar',

                eventClick: function(event, element) {

                    event.title = "CLICKED!";

                    $('#fullCal').fullCalendar('updateEvent', event);

                },

                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay,listMonth'
                },

            });
        });
    </script>
@endsection




