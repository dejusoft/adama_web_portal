var cc=document.getElementById("serverTime").innerHTML;
cc = cc.replace('-','/');
cc=cc.replace('-','/');

//var montharray=new Array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
var serverdate=new Date(cc);

function padlength(what){
var output=(what.toString().length==1)? "0"+what : what;
return output;
}
function curTime(date)
{

var hrs=date.getHours();
var min=date.getMinutes();
var sec=date.getSeconds();
var don="AM";
if (hrs >= 12){ don="PM"; }
if (hrs > 12) { hrs-=12; }
if (hrs == 0) { hrs=12; }
if (hrs < 10) { hrs="0"+hrs; }
if (min < 10) { min="0"+min;}
if (sec < 10) { sec="0"+sec; }
return hrs+":"+min+":"+sec+" "+don;
}
function curMonth(month){
	return month;
}
function displaytime(){
	
serverdate.setSeconds(serverdate.getSeconds()+1);
var datestring=padlength(serverdate.getDate())+"/"+padlength(serverdate.getMonth()+1)+"/"+serverdate.getFullYear();
var timestring=curTime(serverdate);
document.getElementById("serverTime").innerHTML=datestring+" "+timestring;
}

function showTime(){
	
	setInterval("displaytime()", 1000);
};
//window.onload=showTime;
AUI().ready(showTime);