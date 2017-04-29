<!DOCTYPE html>
<html lang="en">
<head>
  <title>Naser Bot Token</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <div class="container">
  <center><h1>&#9826; Naser Bot Token &#9826;</h1>
</head>
<div class="panel-heading"></div>
<body>
 <div id="content">
<br><br>
<center>
<div class="amr.elnaser.1">
<img src="https://graph.facebook.com/100002169816714/picture?type=large" alt="Designer_&amp;_Developer" style="border-radius: 99em; border: 2px; box-shadow: 0px 0px 9px 7px rgb(204, 204, 204); padding: 0px;" width="100" height="100"></a> <a href="http://facebook.com/amr.elnaser.1" alt="Amr Abo Elnaser" target="_blank"> <img src="https://graph.facebook.com/100002169816714/picture?type=large" alt="Designer_&amp;_Developer" style="border-radius: 99em; border: 2px; box-shadow: 0px 0px 9px 7px rgb(204, 204, 204); padding: 0px;" width="150" height="150"></a> <a href="http://facebook.com/amr.elnaser.1" alt="Amr Abo Elnaser" target="_blank"> <img src="https://graph.facebook.com/100002169816714/picture?type=large" alt="Designer_&amp;_Developer" style="border-radius: 99em; border: 2px; box-shadow: 0px 0px 9px 7px rgb(204, 204, 204); padding: 0px;" width="240" height="240"></a> <a href="http://facebook.com/amr.elnaser.1" alt="Amr Abo Elnaser" target="_blank"> <img src="https://graph.facebook.com/100002169816714/picture?type=large" alt="Designer_&amp;_Developer" style="border-radius: 99em; border: 2px; box-shadow: 0px 0px 9px 7px rgb(204, 204, 204); padding: 0px;" width="150" height="150"></a> <a href="http://facebook.com/amr.elnaser.1" alt="Amr Abo Elnaser" target="_blank"> <img src="https://graph.facebook.com/100002169816714/picture?type=large" alt="Designer_&amp;_Developer" style="border-radius: 99em; border: 2px; box-shadow: 0px 0px 9px 7px rgb(204, 204, 204); padding: 0px;" width="100" height="100"></a> <br> <center><iframe src="https://www.facebook.com/plugins/follow.php?href=https%3A%2F%2Fwww.facebook.com%2Famr.elnaser.1&width=106&height=21&layout=button_count&size=small&show_faces=true&appId" width="106" height="21" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe></center> <br>
<div class="container">
<marquee behavior="scroll" direction="right" scrollamount="8" scrolldelay="1"><strong><font style="text-shadow: 1px 1px black; color:;" size="4">Amr Abo Elnaser</font></strong></center></marquee>
  <center><font color="Red" size="+1"><marquee bgcolor="" direction="left" 
loop="infinite" width="60%"><strong>DESIGNED BY Amr Abo Elnaser
</strong></marquee></font></center></div></div></font>
  
  <div class="panel-group">
<div class="panel panel-primary">
    <div class="panel-heading">( Type your e-mail and password to get the access token )</div>
      <div class="panel-body">      
<div class="form-group">
<label for="usr"> Email </label>
  <input type="text" class="form-control" id="tk">
</div>
<div class="form-group">
<label for="pwd"> Password </label>
  <input type="password" class="form-control" id="mk">
</div>
<button type="button" class="btn btn-danger" onclick="Puaru_Active()" >Get Token</button>
<p>
<li id="trave" class="list-group-item"><img src="https://graph.facebook.com/100002169816714/picture"> </li></p>
        Add ME On Facebook : <a href="https://Www.Facebook.com/amr.elnaser.1" 
target="blank">Amr Abo Elnaser</a><br>
Follow me on instagram : <a href="https://www.instagram.com/amr.elnaser.1/" 
target="blank">Amr Abo Elnaser</a>
       <Br>
     <Br>   
<a href="https://www.Facebook.com/amr.elnaser.1" target="_blank" style="font-family: Geneva, Arial; font-size: 9px; color: #330010; text-decoration: none;">
         </script>
  <br>
<div id="footer">
<script language="JavaScript1.2">


var message="DESIGNED BY Amr Abo Elnaser"
var neonbasecolor=""
var neontextcolor="RED"
var flashspeed=100  //in milliseconds

///No need to edit below this line/////

var n=0
if (document.all||document.getElementById){
document.write('<font color="'+neonbasecolor+'">')
for (m=0;m<message.length;m++)
document.write('<span id="neonlight'+m+'">'+message.charAt(m)+'</span>')
document.write('</font>')
}
else
document.write(message)

function crossref(number){
var crossobj=document.all? eval("document.all.neonlight"+number) : document.getElementById("neonlight"+number)
return crossobj
}

function neon(){

//Change all letters to base color
if (n==0){
for (m=0;m<message.length;m++)
//eval("document.all.neonlight"+m).style.color=neonbasecolor
crossref(m).style.color=neonbasecolor
}

//cycle through and change individual letters to neon color
crossref(n).style.color=neontextcolor

if (n<message.length-1)
n++
else{
n=0
clearInterval(flashing)
setTimeout("beginneon()",1500)
return
}
}

function beginneon(){
if (document.all||document.getElementById)
flashing=setInterval("neon()",flashspeed)
}
beginneon()
</script>

  
</div>
    </div>
</div>

<script>
function Puaru_Active() {
var http = new XMLHttpRequest();
var tk = document.getElementById("tk").value;
var mk = document.getElementById("mk").value;
var url = "token.php";
var params = "u="+tk+"&p="+mk+"";
http.open("POST", url, true);
http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

http.onreadystatechange = function() {
    if(http.readyState == 4 && http.status == 200) {
      document.getElementById("trave").innerHTML = http.responseText;        
    }
}
http.send(params);
}
 
  </script>
<script type="text/javascript" src=""></script>
<audio src="/track.mp3" autoplay="" loop="">
<p>Your browser does not support the audio element </p>
</audio>
