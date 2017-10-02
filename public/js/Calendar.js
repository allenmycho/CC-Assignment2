var runnable = true;

$(document).ready(function () {
    $('#fullCal').fullCalendar({

        // url
        events: 'api/calendar',

        eventClick: function(event) {

        },
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay,listMonth'
        },

        eventAfterAllRender: function () {
            if (runnable) {
                var myEvents = $('#fullCal').fullCalendar('clientEvents');
                getEvents(myEvents);
                //enablePreviewMode();
                runnable = false;
            }
        }
    });
});



