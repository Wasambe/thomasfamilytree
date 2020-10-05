<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="jquery-3.3.1.js"></script>
  
 </head>
<body>


<a href="index.html">Main Menu</a><br><br>	
Enter First Name or Nick Name:<br>

  <input id="searchName" type="text"><br><br>
  <button id="SearchButton" onclick="mySearch()">Search</button><br><br>
  <button onclick="document.getElementById('myImage').src='images/1ChaneyThomas.png'">Show Photo</button>

<img id="myImage" src="" style="width:100px">

<button onclick="document.getElementById('myImage').src='pic_bulboff.gif'">Turn off the light</button>
 </body>
</html>


<?php

$x = 1;
while($x <= 1300) {
	
	$filename = $x;
	$filetype = ".png";
	$filename = $filename.$filetype;
  echo "The file name is ".$filename;
  echo "<br>";
  $x++;

//echo file_exists("images/1.png");
if (file_exists("images/".$filename)){
	echo $filename." Does exists";
	echo "<br>";
}else{
echo $filename." Does not exists";
echo "<br>";
}
}


fOldName();
fNewName();
fOldNameNewName();

echo ("Test");
echo $voldname;
echo $vnewname;

function fOldName(){

global $voldname;
$voldname = "VarOldName";
//echo $voldname;	
}

function fNewName(){
	global $vnewname;
	$vnewname = "VarNewName";
	//echo $vnewname;
	
}

function fOldNameNewName(){
	echo  $GLOBALS['voldname'];
	echo  $GLOBALS['vnewname'];
}

?>