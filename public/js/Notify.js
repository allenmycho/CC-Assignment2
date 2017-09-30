var notifications = [];
notifications[0] = "<h3>Heads up!</h3><br>";

var forecastArray = [];

function getEvents(Events) {

    for (i = 0; i < Events.length; i++) {

        var eventName = Events[i].title;
        var rawDate = Events[i].summary.start.dateTime;
        var res = rawDate.split("T");
        var eventDate = res[0];


        var days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
        var d = new Date(res[0]);
        var eventDayName = days[d.getDay()];

        var date = eventDate.split("-");

        var weather = anologize(eventDate);

        if (weather === "Rain" || weather === "Thunderstorm") {
            notify(eventName + " on " + eventDayName + " " + date[2], weather, weather.toLowerCase());
        }

    }

    displayNotifications();

}

function anologize(eventDate) {

    var applicable = false;
    var condition = null;

    for (var i = 0; i < forecastArray.length; i++) {

        if (eventDate === forecastArray[i][1]) {
            applicable = true;
            condition = forecastArray[i][0];

        }
    }

    if (condition === "Rain") {
        return condition;
    }
    if (condition === "Thunderstorm") {
        return condition;
    }
    if (condition === null) {
        return null;
    }

}

function saveForecast(forecast) {

    forecastArray = forecast;
    console.log(forecastArray);
}


function notify(event, weather, icon) {

    var string = "<img src=\"images/notification_icons/" + icon + ".png" + "\" align=\"left\"/>" + "&nbsp&nbsp&nbsp&nbsp" + "<strong>" + event + "</strong>" +
        "<br>" + "&nbsp&nbsp&nbsp&nbsp" + weather + " expected during this event." + "<br><br>";
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