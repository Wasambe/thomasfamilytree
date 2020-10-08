<html>
<head>
<script>
</script>

</head>

<body>
<p>07 Oct 2020</p>
 </body>
</html>



<?php
// 29 Sep 2020
//WIP not sure if update is successful
// This is a one time function.
// It updates fnn to fn+nn 
// This code will be added to AdminCrud.php update

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
echo "<br>";
mysqli_select_db($conn,"id4184148_testdatabase");

//$conn->close();

	
//$sql = SELECT CONCAT(Address, " ", PostalCode, " ", City) AS Address
//FROM Customers;
	
	$sql = "SELECT CONCAT(FirstName, NickName) AS FirstNickName
FROM testtable";
	
	
	/*
	$sql = "SELECT * FROM testtable WHERE NodeUID";
	$result = mysqli_query($conn,$sql);
	
$rowcount = mysqli_num_rows($result);
//echo ($rowcount);

	
	// while ($row = mysqli_fetch_array($result)){   
	 $NodeUID=$row['NodeUID'];
	 $FirstName=$row['FirstName'];
	 $MiddleName=$row['MiddleName'];
	 $MaidenName=$row['MaidenName'];
	 $LastName=$row['LastName'];
	 $NickName=$row['NickName'];
	 $FirstNickName=$row['FirstNickName'];
	 
	 
	$fnn = ($FirstName.$NickName);
	
	// echo ($FirstNickName);
	
	
	 $sqlupdate="UPDATE testtable SET FirstNickName = '".$fnn."'
	   WHERE NodeUID = '".$NodeUID."'";
	   //$resultupdate = mysqli_query($conn,$sqlupdate);
	   //$rowcountupdate = mysqli_num_rows($resultupdate);
//echo ("Number or rows updated ".$rowcountupdate);
	
	 echo ($FirstNickName."   ".$NodeUID."   ".$fnn);
	echo "<br>";


$sql="UPDATE testtable SET FirstNickName = '".$fnn."'
*/
?>
