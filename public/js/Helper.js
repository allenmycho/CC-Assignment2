var currentTime = new Date().getHours();
if (7 <= currentTime && currentTime < 19) {
    if (document.body) {
        document.body.background = "images/backgrounds/Background_Day.png";
    }
}
else {
    if (document.body) {
        document.body.background = "images/backgrounds/Background_Night.jpg";
    }
}