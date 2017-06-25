// tab functions
function openTab(evt, tabName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
}
document.getElementById("defaultOpen").click();

// tutorial 1

// Call function
date();
	function date() {
// Get user's local date
var currentDate = new Date();
// Set the date in variables
    day = currentDate.getDate();
    month = currentDate.getMonth() + 1;
    year = currentDate.getFullYear();
// Output the date
$('.date').text(month + "/" + day + "/" + year);
}

// tutorial 2 

// Call function
time();
function time() {
// Get user's local time
    var today = new Date();
// Set the time in variables
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
// Output time
$('.time').text(h + ":" + m + ":" + s );
// Update clock by repeating function every 400 ms
    var t = setTimeout(time, 500);
}
// Add leading zero infront of numbers < 10
function checkTime(i) {
    if (i < 10) {i = "0" + i};
    return i;
}

// // tutorial 3
// Call function
clock();
function clock(){
// Get user's local time
    var currentTime = new Date();
// Set the time in variables
    hours = currentTime.getHours(),
    minutes = currentTime.getMinutes();
// Add leading zero infront of numbers < 10
    if (minutes < 10) {
     minutes = "0" + minutes;
    }
// Add the suffix and display in 12 hr format
    var suffix = "AM";
    if (hours >= 12) {
    suffix = "PM";
    hours = hours - 12;
    }
    if (hours == 0) {
     hours = 12;
    }
// Output time
    $('.clock').text(hours + ":" + minutes + " " + suffix );
}
