@extends('layout.master')
@section('title', 'home')


@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div id="fullCal"></div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#fullCal').fullCalendar({


                // url
                events: 'cal',

//                customButtons: {
//                    myCustomButton: {
//                        text: 'custom!',
//                        click: function() {
//                            alert('clicked the custom button!');
//                        }
//                    }
//                },
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay,listMonth'
                }

            });
        });
    </script>
@endsection




