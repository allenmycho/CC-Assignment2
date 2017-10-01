function setup() {
    var api = 'http://api.openweathermap.org/data/2.5/weather?';
    var city = 'q=Melbourne,AU&';
    var appID = 'APPID=8c9f87b1916ca231f89f3254eb00c5c4&';
    var units = 'units=metric';

    var url = api + city + appID + units;
    loadJSON(url, printWeather);

    var forecast_api = 'http://api.openweathermap.org/data/2.5/forecast?';
    var forecast_city = 'q=Melbourne,AU&';
    var forecast_appID = 'APPID=8c9f87b1916ca231f89f3254eb00c5c4&';
    var forecast_units = 'units=metric';

    var forecast_url = forecast_api + forecast_city + forecast_appID + forecast_units;
    loadJSON(forecast_url, processForecast);

    //dedicated Async call for UV Index
    var uv_index_url = 'http://api.openweathermap.org/data/2.5/uvi/forecast?APPID=8c9f87b1916ca231f89f3254eb00c5c4&lat=37.8136&lon=144.9631';
    loadJSON(uv_index_url, processUVI);

    var t = setTimeout(setup, 600000);
}

function processForecast(forecast) {

    var res = (forecast.list[0].dt_txt).split("-");
    var day = res[2].split(" ");
    var prevDate = day[0];

    var forecastArray = [];

    for (var i = 0; i < forecast.list.length; i++) {
        res = (forecast.list[i].dt_txt).split("-");
        day = res[2].split(" ");

        if (day[0] === prevDate) {
            date = (forecast.list[i].dt_txt).split(" ");
            forecastArray.push([(forecast.list[i].weather[0].main), date[0]]);
            break;
        }
    }
    for (i = 0; i < forecast.list.length; i++) {

        res = (forecast.list[i].dt_txt).split("-");
        day = res[2].split(" ");

        if (day[0] !== prevDate) {
            prevDate = day[0];
            var date = (forecast.list[i].dt_txt).split(" ");
            forecastArray.push([(forecast.list[i].weather[0].main), date[0]]);
        }
    }

    //Temperature processing begins...

    var tempsArray = [];

    var thisDate = (forecast.list[0].dt_txt).split(" ");
    var maxTempFound = 0;

    for (i = 0; i < forecast.list.length; i++) {
        var d = (forecast.list[i].dt_txt).split(" ");
        if (d[0] !== thisDate[0]) {
            thisDate[0] = d[0];
            maxTempFound = 0;
        }
        else if (forecast.list[i].main.temp_max > maxTempFound) {
            maxTempFound = forecast.list[i].main.temp_max;
        }
        else {
            tempsArray.push([maxTempFound, thisDate[0]]);
        }
    }

    var uniqueTemps = [];
    var itemsFound = {};
    for (var i = 0, l = tempsArray.length; i < l; i++) {
        var stringified = JSON.stringify(tempsArray[i]);
        if (itemsFound[stringified]) {
            continue;
        }
        uniqueTemps.push(tempsArray[i]);
        itemsFound[stringified] = true;
    }

    //Temperature processing ends

    //Wind Speed processing begins...

    var wsArray = [];
    var uniqueWSArray = [];
    var maxWSFound = 0;
    thisDate = (forecast.list[0].dt_txt).split(" ");

    for (i = 0; i < forecast.list.length; i++) {
        var d = (forecast.list[i].dt_txt).split(" ");
        if (d[0] !== thisDate[0]) {
            thisDate[0] = d[0];
            maxWSFound = 0;
        }
        else if (forecast.list[i].wind.speed > maxWSFound) {
            maxWSFound = forecast.list[i].wind.speed;
        }
        else {
            wsArray.push([maxWSFound, thisDate[0]]);
        }
    }

    for (var i = 0, l = wsArray.length; i < l; i++) {
        var stringified = JSON.stringify(wsArray[i]);
        if (itemsFound[stringified]) {
            continue;
        }
        uniqueWSArray.push(wsArray[i]);
        itemsFound[stringified] = true;
    }

    //Wind Speed processing ends

    saveForecast(forecastArray, uniqueTemps, uniqueWSArray);

}

function processUVI(UVI) {

    //dedicated function for handling UV index data

    var uvArray = [];

    for (var i = 0; i < UVI.length; i++) {
        var date = (UVI[i].date_iso).split("T");
        var uv = UVI[i].value;
        uvArray.push([uv, date[0]]);
    }

    saveUVI(uvArray);


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