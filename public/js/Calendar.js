$(document).ready(function () {
    $('#fullCal').fullCalendar({
        
        // url
        events: 'api/calendar',

        eventClick: function(event) {

            event.title = "CLICKED!";
//

            $('#fullCal').fullCalendar('updateEvent', event);

            var myEvents = $('#fullCal').fullCalendar('clientEvents');
            console.log("result: " + myEvents[0].title);

        },
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay,listMonth'
        },


    });
});
