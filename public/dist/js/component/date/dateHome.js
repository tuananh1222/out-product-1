var today = new Date();
var Day = "";
var Month = "";
var getDay = ""+today.getDate();
var getMonth = ""+(today.getMonth()+1);
if(getDay.length < 2){
	Day = "0"+getDay;
}
if(getMonth.length < 2){
	Month = "0"+getMonth;
}
var date = Day+'/'+Month+'/'+today.getFullYear();
document.write(date);