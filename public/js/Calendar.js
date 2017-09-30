$(document).ready(function () {
    $('#fullCal').fullCalendar({

        // url
        events: 'api/calendar',


        eventClick: function(event) {

            var myEvents = $('#fullCal').fullCalendar('clientEvents');
            getEvents(myEvents);

            $('#fullCal').fullCalendar('updateEvent', event);


        },
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay,listMonth'
        },


    });
});



