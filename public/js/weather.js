function setup() {

    var weather;
    var api = 'http://api.openweathermap.org/data/2.5/weather?';
    var city = 'q=Melbourne,AU&';
    var appID = 'APPID=8c9f87b1916ca231f89f3254eb00c5c4&';
    var units = 'units=metric';

    var url = api + city + appID + units;

    loadJSON(url, printWeather);
}

function printWeather(weather) {

    // Get the loaded JSON data
    console.log(weather); // inspect the weather JSON
    var main = weather.weather[0].main;
    var temp = weather.main.temp; // get the main.humidity out of the loaded JSON
    console.log(temp); // inspect the humidity in the console
    console.log(main);

    document.getElementById('weatherNow').innerHTML = temp + '&deg' + 'C ' + main;


}