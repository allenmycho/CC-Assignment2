var notifications = [];
notifications[0] = "<h3>Heads up!</h3><br>";

var forecastArray = [];
var temperatureArray = [];
var windSpeedArray = [];
var uvIndexArray = [];

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

        var weather = analogizeCondition(eventDate);
        var highTemperature = analogizeTemp(eventDate);
        var strongWinds = analogizeWind(eventDate);
        var uv = analogizeUV(eventDate);

        if (weather === "Rain" || weather === "Thunderstorm") {
            notify(eventName + " on " + eventDayName + " " + date[2], weather, weather.toLowerCase());
        }

        if (highTemperature) {
            notify(eventName + " on " + eventDayName + " " + date[2], "Extreme temperatures", "temperature");
        }

        if (strongWinds) {
            notify(eventName + " on " + eventDayName + " " + date[2], "Strong winds", "wind");
        }

        if (uv) {
            notify(eventName + " on " + eventDayName + " " + date[2], "High levels of UV Radiation", "uv");
        }

    }

    displayNotifications();

}

function analogizeCondition(eventDate) {

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

function analogizeTemp(eventDate) {

    var temperature = 0;

    for (var i = 0; i < temperatureArray.length; i++) {

        if (eventDate === temperatureArray[i][1]) {
            temperature = temperatureArray[i][0];
        }
    }

    return (temperature > 30);
}

function analogizeWind(eventDate) {

    var windSpeed = 0;

    for (var i = 0; i < windSpeedArray.length; i++) {

        if (eventDate === windSpeedArray[i][1]) {
            windSpeed = windSpeedArray[i][0];
        }
    }

    return (windSpeed >= 6);
}

function analogizeUV(eventDate) {

    var index = 0;

    for (var i = 0; i < uvIndexArray.length; i++) {
        if (eventDate === uvIndexArray[i][1]) {
            index = uvIndexArray[i][0];
        }
    }

    return (index >= 8);

}

function saveForecast(forecast, temperature, windSpeed) {

    forecastArray = forecast;
    temperatureArray = temperature;
    windSpeedArray = windSpeed;

}

function saveUVI(UVI) {

    uvIndexArray = UVI;

}


function notify(event, weather, icon) {

    var string = "<img src=\"images/notification_icons/" + icon + ".png" + "\" align=\"left\"/>" + "&nbsp&nbsp&nbsp&nbsp" + "<strong>" + event + "</strong>" +
        "<br>" + "&nbsp&nbsp&nbsp&nbsp" + weather + " expected during this day." + "<br><br>";
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

function enablePreviewMode() {

    notifications.push("<strong>Preview mode activated.<br> Displaying test events and weather conditions.<br><br></strong>");

    notify("Test event 1", "Rain", "rain");
    notify("Test event 2", "Thunderstorm", "thunderstorm");
    notify("Test event 3", "Strong winds", "wind");
    notify("Test event 4", "Extreme temperatures", "temperature");
    notify("Test event 5", "High levels of UV radiation", "uv");

    displayNotifications();

}