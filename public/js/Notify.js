var notifications = [];
notifications[0] = "<h3>Heads up!</h3><br>";

function getEvents(Events) {

    for (i = 0; i < Events.length; i++) {

        var eventName = Events[i].title;
        var rawDate = Events[i].summary.start.dateTime;
        var res = rawDate.split("T");
        var eventDate = res[0];

        var days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
        var d = new Date(res[0]);
        var eventDayName = days[d.getDay()];

        notify(eventName + " on " + eventDayName, "Unknown weather");

    }

    displayNotifications();

}


function notify(event, weather) {

    var string = "<strong>" + event + "</strong>" + "<br>" + weather + " expected during this event." + "<br><br>";
    notifications.push(string);
}

function displayNotifications() {

    if (notifications.length === 1) {
        document.getElementById('notification').innerHTML = "<br><h4><strong>We have no updates for you right now. Check back later!</strong></h4>";
    }

    else {
        document.getElementById('notification').innerHTML = notifications.join("");
    }
}