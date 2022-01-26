$(document).ready(function() {
    $('#purpose').on('change', function() {
        if (this.value == '1') {
            $("#officeT").show();
            $("#projectT").hide();
        } else {
            $("#officeT").hide();
            $("#projectT").show();
        }
    });
});

// get span value in task create points form stars
var el = document.getElementById('spaM4');
text = (el.innerText || el.textContent);
document.getElementById("re").value = text;


//
function timeConvert() {

    let num = document.getElementById('minId').value;

    var hours = Math.floor(num / 60);
    var minutes = num % 60;

    if (hours == 0) {
        document.getElementById("timeTask").value = minutes + "m";
        document.getElementById("showTime").innerHTML = minutes + "m";
    } else if (minutes == 0) {
        document.getElementById("timeTask").value = hours + "h";
        document.getElementById("showTime").innerHTML = hours + "h";
    } else {
        document.getElementById("timeTask").value = hours + "h " + minutes + "m";
        document.getElementById("showTime").innerHTML = hours + "h " + minutes + "m"
    }


}