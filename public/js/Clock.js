

function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var ampm = h >= 12 ? 'PM' : 'AM';
    h = h % 12;
    h = h ? h : 12;
    m = m < 10 ? '0' + m : m;

    document.getElementById('clock').innerHTML = h + ':' + m + ' ' + ampm;
    var t = setTimeout(startTime, 500);
}

