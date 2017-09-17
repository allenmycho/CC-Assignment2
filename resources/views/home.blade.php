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
                events: 'api/calendar',

                customButtons: {
                    myCustomBtn: {
                        text: 'weather',
                        click: function() {

                            var weather;
                            var api = 'http://api.openweathermap.org/data/2.5/weather?';
                            var city = 'q=Melbourne&';
                            var appID = 'APPID=8c9f87b1916ca231f89f3254eb00c5c4&';
                            var units = 'units=metric';

//                            function setup() {
//                                createCanvas(400,200);
//                                var url = api + city + appID + units;
//                                loadJSON(url, gotData);
//                            }
//
//                            function gotData(data) {
//                                weather = data;
//                            }
//
//                            function draw() {
//                                background(0);
//                                if (weather) {
//                                    var temp = weather.main.temp;
//                                    var humidity = weather.main.humidity;
//                                    ellipse(100, 100, temp, temp);
//                                    ellipse(300, 100, humidity, humidity);
//                                }
//
//
//                            }

                            var url = api + city + appID + units;

                            window.location.href = url;
                        }
                    }
                },
                header: {
                    left: 'prev,next today myCustomBtn',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay,listMonth'
                }

            });
        });
    </script>

    {{--<script>--}}
        {{--var weather;--}}
        {{--var api = 'http://api.openweathermap.org/data/2.5/weather?';--}}
        {{--var city = 'q=Melbourne&';--}}
        {{--var appID = 'APPID=8c9f87b1916ca231f89f3254eb00c5c4&';--}}
        {{--var units = 'units=metric';--}}


        {{--function setup() {--}}
            {{--createCanvas(400,200);--}}
            {{--var url = api + city + appID + units;--}}
            {{--loadJSON(url, gotData);--}}
        {{--}--}}

        {{--function gotData(data) {--}}
            {{--weather = data;--}}
        {{--}--}}

        {{--function draw() {--}}
            {{--background(0);--}}
            {{--if (weather) {--}}
                {{--var temp = weather.main.temp;--}}
                {{--var humidity = weather.main.humidity;--}}
                {{--ellipse(100, 100, temp, temp);--}}
                {{--ellipse(300, 100, humidity, humidity);--}}
            {{--}--}}
        {{--}--}}
    {{--</script>--}}
@endsection




