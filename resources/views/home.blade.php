@extends('layout.master')
@section('title', 'home')


@section('content')
    <div class="row">
        <div class="col-md-2 col-md-offset-1">
            <div id="clock" style="font-size: 40px"></div>
        </div>
        <div class="col-md-3 col-md-offset-6">
            <div id="weatherNow" style="font-size:40px">

            </div>
        </div>

    </div>


    <div class="row">
        <div class="col-md-6 col-md-offset-1">
            <div id="fullCal"></div>
        </div>
        <div class="col-md-4">
            <div class="jumbotron">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
        </div>
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




