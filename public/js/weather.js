function setup() {
    var weather;
    var api = 'http://api.openweathermap.org/data/2.5/weather?';
    var city = 'q=Melbourne,AU&';
    var appID = 'APPID=8c9f87b1916ca231f89f3254eb00c5c4&';
    var units = 'units=metric';

    var url = api + city + appID + units;
    loadJSON(url, printWeather);
    console.log(url);


    var t = setTimeout(setup, 600000);
}

function retrieveEvents(events) {
    console.log(events);
    weatherForecast(events);
}

function weatherForecast(events) {

    var forecast_api = 'http://api.openweathermap.org/data/2.5/forecast?';
    var forecast_city = 'q=Melbourne,AU&';
    var forecast_appID = 'APPID=8c9f87b1916ca231f89f3254eb00c5c4&';
    var forecast_units = 'units=metric';

    var forecast_url = forecast_api + forecast_city + forecast_appID + forecast_units;

    var forecast = loadJSON(forecast_url);

    console.log(forecast_url);

}

function printWeather(weather) {

    // Get the loaded JSON data
    // console.log(weather); // inspect the weather JSON
    var main = weather.weather[0].main;
    var temp = parseFloat(weather.main.temp); // get the main.humidity out of the loaded JSON
    var high = parseFloat(weather.main.temp_max);
    var low = parseFloat(weather.main.temp_min);
    var iconId = weather.weather[0].icon;

    var tempRounded = Math.round(temp);

    document.getElementById('weatherNow').innerHTML = tempRounded + '&deg' + 'C ' + main;
    document.getElementById('weatherHigh').innerHTML = 'Feels like ' + high + '&deg' + 'C ';
    document.getElementById('weatherIcon').src = "images/icons/" + iconId + ".png";

}