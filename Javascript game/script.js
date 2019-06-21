
var  starttime=(new Date()).getTime();


//function to generate random colors
function getRandomColor() {

    starttime=(new Date()).getTime();

    var letters = '0123456789ABCDEF';
    var color = '#';
    for (var i = 0; i < 6; i++) {
      color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
  }

//function to give random appearance to shape
function makeshape(){

if(Math.random()>0.5){
    document.getElementById("fig").style.borderRadius="50%";
}    
else
document.getElementById("fig").style.borderRadius="0";

var top=Math.random()*200;
var left=Math.random()*200;
var height=Math.random()*300+100;
document.getElementById("fig").style.top=top+"px";
document.getElementById("fig").style.left=left+"px";
document.getElementById("fig").style.height=height+"px";
document.getElementById("fig").style.width=height+"px";
document.getElementById("fig").style.backgroundColor=getRandomColor();
document.getElementById("fig").style.display="block";


}


//function to call makeshape
function calling(){
    setTimeout(function() { makeshape() },Math.random()*2000);
}


calling();

document.getElementById("fig").onclick=function(){
    document.getElementById("fig").style.display="none";

    calling();
    var endtime=(new Date()).getTime();

var totaltime=(endtime-starttime )/1000

document.getElementById("value").innerHTML=totaltime;

}