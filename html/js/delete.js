var click = 0;
function deleteShow() {
    if (click === 0) {
        document.getElementById("del").style.display = "block";
        click++;
    } else {
        document.getElementById("del").style.display = "none";
        click = 0;
    }
}