<html>
<head>
<script>
</script>

</head>

<body>
<p>01 Oct 2020 839pm</p>
 </body>
</html>



<?php
// 29 Sep 2020
// This is a one time function.
// It renames the current photo using the firstname+middlename+maidenname+lastname+nickname

$servername = "localhost";
$username = "id4184148_localhost";
$password = "We135711!";
$dbname = "id4184148_testdatabase";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}

$connYesNo = ("SqlDB connection successful");
	
echo ($connYesNo);
//echo ($Crud);	
echo "<br>";

mysqli_select_db($conn,"id4184148_testdatabase");




$x = 1;
while($x <= 1300) {
	
	$oldname = $x;
	$filetype = ".png";
	$oldname = $oldname.$filetype;
 // echo "The file name is ".$filename;
 // echo "<br>";
  //$x++;

//echo file_exists("images/1.png");
if (file_exists("images/".$oldname)){
	echo $oldname." Does exists";
	//echo "<br>";
	
	//start
	$sql = "SELECT * FROM testtable WHERE NodeUID = '".$x."'";
	$result = mysqli_query($conn,$sql);
	
$rowcount = mysqli_num_rows($result);
//echo ($rowcount);
if ($rowcount == 0){
	echo ("This NodeUID not found");
	//$NodeUID="";
	}
	
	 while ($row = mysqli_fetch_array($result)){   
	 $NodeUID=$row['NodeUID'];
	 $FirstName=$row['FirstName'];
	 $MiddleName=$row['MiddleName'];
	 $MaidenName=$row['MaidenName'];
	 $LastName=$row['LastName'];
	 $NickName=$row['NickName'];
	 $FirstNickName=$FirstName. "   ".$NickName;
	 $DateOfBirth=$row['DateOfBirth'];
	 $PlaceOfBirthCity=$row['PlaceOfBirthCity'];
	 $PlaceOfBirthState=$row['PlaceOfBirthState'];
	 $DateOfDeath=$row['DateOfDeath'];
	 $PlaceOfDeathCity=$row['PlaceOfDeathCity'];
	  $PlaceOfDeathState=$row['PlaceOfDeathState'];
	 $Tel1=$row['Tel1'];
	 $Tel2=$row['Tel2'];
	 $Email = $row['Email'];
$StreetAddress= $row["StreetAddress"];
$City=$row["City"];
$State= $row["State"];
$Comments=$row["Comments"];
	 
	 
	$newname = ($NodeUID.$FirstName.$MiddleName.$MaidenName.$LastName.$NickName.".png");
	$newname = str_replace(' ', '', $newname);
//echo $newname; // Outputs: Thisisasimplepieceoftext.
	 
	 echo ($oldname."   ".$newname);
	 echo "<br>";
	rename("images/".$oldname,"images/".$newname);
  }

 	//end
	
}

$x++;
}

?>
