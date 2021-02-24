
var month = [01,02,03,04,05,06,07,08,09,10,11,12];
var day=[01,02,03,04,05,06,07,08,09,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31];
var hour = [00,01,02,03,04,05,06,07,08,09,10,11,12,13,14,15,16,17,18,19,20,21,22,23];
var minute=[,0001,02,03,04,05,06,07,08,09,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59];
var username=["admin","guess"];
var select_day = document.getElementById("from_day");
for(index in day) {
    select_day.options[select_day.options.length] = new Option(day[index], index);
}
var select_month = document.getElementById("from_month");
for(index in month){
    select_month.options[select_month.options.length] =new Option(month[index],index);
}

var select_hour = document.getElementById("from_hour");
for(index in hour){
    select_hour.options[select_hour.options.length] =new Option(hour[index],index);
}

var select_minute = document.getElementById("from_minute");
for(index in minute){
    select_minute.options[select_minute.options.length] =new Option(minute[index],index);
}


var select_month = document.getElementById("to_month");
for(index in month){
    select_month.options[select_month.options.length] =new Option(month[index],index);
}

var select_day = document.getElementById("to_day");
for(index in day) {
    select_day.options[select_day.options.length] = new Option(day[index], index);
}

var select_hour = document.getElementById("to_hour");
for(index in hour){
    select_hour.options[select_hour.options.length] =new Option(hour[index],index);
}

var select_minute = document.getElementById("to_minute");
for(index in minute){
    select_minute.options[select_minute.options.length] =new Option(minute[index],index);
}

var select_username = document.getElementById("select_username");
for(index in username){
    select_username.options[select_username.options.length] =new Option(username[index],index);
}
 