function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var ampm = h >= 12 ? 'PM' : 'AM';
    h = h % 12;
    h = h ? h : 12;
    m = m < 10 ? '0' + m : m;

    var days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
    var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
    var nameOfDay = days[today.getDay()];
    var day = today.getDate();
    var month = months[today.getMonth()];

    document.getElementById('clock').innerHTML = h + ':' + m + ' ' + ampm;
    document.getElementById('date').innerHTML = nameOfDay + ", " + day + " " + month;

    var t = setTimeout(startTime, 500);
}