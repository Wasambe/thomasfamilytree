<?php


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