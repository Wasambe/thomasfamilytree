<?php
//03 Oct 2020
$NodeUIDOK='';
$CrudOptionOK='';
$CrudOptionErr='';
$NodeUIDErr='';
$CrudOption='';
$NodeUID='';
$FirstName= $MiddleName= $MaidenName= $LastName= $NickName='';
$DateOfBirth= $PlaceOfBirth= $DateOfDeath= $PlaceOfDeath='';
$PlaceOfBirthCity= $PlaceOfBirthState= $PlaceOfDeathCity= $PlaceOfDeathState='';
$Tel1= $Tel2= $Email='';
$StreetAddress= $City= $State= $Comments='';
//$oldName='';

//07 Sep 2020 Added this function in hopes of updating
//myObj after CRUD change.
function myObjUpdate(){
 	//000WebHost Settings
$servername = "localhost";
$username = "id4184148_localhost";
$password = "We135711!";
$dbname = "id4184148_testdatabase";


//connect to database
$conn = @mysqli_connect($servername, $username, $password, $dbname) or die("Couldn't connet to database.");

//echo "Connected successfully";

 $NodeUID = "1";
 //$sql = "SELECT * FROM testtable WHERE NodeUID = '".$NodeUID."'";
	$sql = "SELECT * FROM testtable";
	$result = mysqli_query($conn,$sql);
	
	$rowcount = mysqli_num_rows($result);

 if(!$result){ echo "Couldn't execute the query"; die();}
else{
 //creates an empty array to hold data
 $data = array();
  while($row = mysqli_fetch_assoc($result)){
    $data[]=$row;
	  }
}

$myObj = json_encode($data);
//echo $myObj;



// PHP program to delete a file named gfg.txt  
// using unlink() function  
   
$file_pointer = "jsonMyObj.txt";  
   
// Use unlink() function to delete a file  
if (!unlink($file_pointer)) {  
    echo ("$file_pointer cannot be deleted due to an error");  
}  
else {  
    echo ("$file_pointer has been deleted");  
}  
 
$myfile = fopen("jsonMyObj.txt", "w") or die("Unable to open file!");
$txt = $myObj;
fwrite($myfile, $txt);
fclose($myfile);
	
}

myObjUpdate();

//$CrudOption = ($_POST['CrudOption']);
//echo $CrudOption;
//echo ($_POST['NodeUID']);
//echo ($_POST['FirstName']);


//if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["NodeUID"])) {
    $NodeUIDErr = "Node UID  is required";
	//exit('this is exit');
  } else {
	  $NodeUIDOK = 'ok';
	  $NodeUID = ($_POST['NodeUID']);
   echo $NodeUID;
   //$CrudOption = ($_POST['CrudOption']);
   // echo $CrudOption;
  }
  
   if (empty($_POST["CrudOption"])) {
    $CrudOptionErr = "Crud Option  is required";
	} else {
		$CrudOptionOK = 'ok';
	  $CrudOption = ($_POST['CrudOption']);
   echo $CrudOption;
   //$CrudOption = ($_POST['CrudOption']);
   // echo $CrudOption;
  }
  
  
 
//}

If ($NodeUIDOK=='ok' && $CrudOptionOK=='ok'){

 echo ('Labdah');
 $NodeUID = $_POST["NodeUID"];
$FirstName = $_POST["FirstName"];
$MiddleName = $_POST["MiddleName"];
$MaidenName = $_POST["MaidenName"];
$LastName = $_POST["LastName"];
$NickName = ($_POST['NickName']);
$FirstNickName=$FirstName. "   ".$NickName;
$DateOfBirth = ($_POST['DateOfBirth']);
$PlaceOfBirthCity = ($_POST['PlaceOfBirthCity']);
$PlaceOfBirthState = ($_POST['PlaceOfBirthState']);
$DateOfDeath = ($_POST['DateOfDeath']);
$PlaceOfDeathCity = ($_POST['PlaceOfDeathCity']);
$PlaceOfDeathState = ($_POST['PlaceOfDeathState']);
$Tel1 = ($_POST['Tel1']);
//$Tel2 = ($_POST['Tel2']);
$Email = ($_POST['Email']);
//$StreetAddress= $_POST["StreetAddress"];
$City= $_POST["City"];
$State= $_POST["State"];
$Comments=$_POST["Comments"];
	
	
	
	
 	//000WebHost Settings
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

mysqli_select_db($conn,"id4184148_testdatabase");


getOldName();


If ($CrudOption == "insert"){
          //sql here
		  $sql = "INSERT INTO testtable (NodeUID, FirstName, MiddleName, MaidenName,
		  LastName, NickName, FirstNickName, DateOfBirth, PlaceOfBirthCity, PlaceOfBirthState,
		  DateOfDeath, PlaceOfDeathCity, PlaceOfDeathState,
		  Tel1, Email, City, State, Comments)
VALUES ('".$NodeUID."', '".$FirstName."', '".$MiddleName."',
'".$MaidenName."', '".$LastName."', '".$NickName."', '".$FirstNickName."',
'".$DateOfBirth."', '".$PlaceOfBirthCity."', '".$PlaceOfBirthState."',
'".$DateOfDeath."', '".$PlaceOfDeathCity."', '".$PlaceOfDeathState."',
'".$Tel1."', '".$Email."', '".$City."',
'".$State."', '".$Comments."')";

$result = mysqli_query($conn,$sql);
echo ("This is end of SQL Insert");
}elseIf ($CrudOption == "delete"){
		 //sql here
	$sql = "DELETE FROM testtable WHERE NodeUID = '".$NodeUID."'";
	$result = mysqli_query($conn,$sql);
echo ("This is end of SQL DELETE");
   mysqli_close($conn);

}elseIf ($CrudOption == "select"){
   echo ("This is start of SQL Select");
	 //sql here

 $sql = "SELECT * FROM testtable WHERE NodeUID = '".$NodeUID."'";
	$result = mysqli_query($conn,$sql);
	
$rowcount = mysqli_num_rows($result);
echo ($rowcount);
if ($rowcount == 0){
	echo ("This NodeUID not found");
	$NodeUID="";
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
	 
	 
	
	 echo ($NodeUID. "   ".$FirstName. "   ".$LastName);
	 
  }
  
   echo ("This is end of SQL Select");
   mysqli_close($conn);
}elseif ($CrudOption == "update"){
	
	 //sql here
	 	 
	 echo ("This is elseif update");
	 echo ($oldName);
	 echo ($NodeUID. "   ".$FirstName. "   ".$MiddleName. "   ".$MaidenName. "   
	  ".$LastName. "   ".$NickName." ".$DateOfBirth." ".$PlaceOfBirthCity);
	  
	  
	  
	 $sql="UPDATE testtable SET FirstName = '".$FirstName."', 
	 MiddleName = '".$MiddleName."',
	 MaidenName = '".$MaidenName."', 
	 LastName = '".$LastName."', NickName = '".$NickName."',
	 FirstNickName = '".$FirstNickName."',
	 DateOfBirth = '".$DateOfBirth."', PlaceOfBirthCity = '".$PlaceOfBirthCity."',
	 PlaceOfBirthState = '".$PlaceOfBirthState."',
	 DateOfDeath = '".$DateOfDeath."', PlaceOfDeathCity = '".$PlaceOfDeathCity."',
	 PlaceOfDeathState = '".$PlaceOfDeathState."',
     Tel1 = '".$Tel1."', Email = '".$Email."',
	    StreetAddress = '".$StreetAddress."', City = '".$City."', State = '".$State."',
		Comments = '".$Comments."'
	   WHERE NodeUID = '".$NodeUID."'";
   
$result = mysqli_query($conn,$sql);
echo ("This is end of SQL Update");
   mysqli_close($conn);
   
  global $newName; 
  $newName = ($NodeUID.$FirstName.$MiddleName.$MaidenName.$LastName.$NickName);
  $newName = str_replace(' ', '', $newName);
  updatePhotoName();
}

}


function getOldName(){
	  //start function getOldName
	  //This function gets the Name of person before the update takes place.
	  //$oldName = ($FirstNameOld.$MiddleNameOld.$MaidenNameOld.$LastNameOld.$NickNameOld);
	 	  //I'm thinking to use the var $oldName as part of function updatePhotoName
global $oldName;	 
	 echo ("Start getOldName");
	  $NodeUID = ($_POST['NodeUID']);
	  $servername = "localhost";
$username = "id4184148_localhost";
$password = "We135711!";
$dbname = "id4184148_testdatabase";


//connect to database
$conn = @mysqli_connect($servername, $username, $password, $dbname) or die("Couldn't connet to database.");

	   $sql = "SELECT * FROM testtable WHERE NodeUID = '".$NodeUID."'";
	$result = mysqli_query($conn,$sql);
	
$rowcount = mysqli_num_rows($result);
echo ("Row Count " .$rowcount);
if ($rowcount == 0){
	echo ("This NodeUID not found");
	$NodeUID="";
	}
	
	
	while ($row = mysqli_fetch_array($result)){   
	 $NodeUID=$row['NodeUID'];
	 $FirstNameOld=$row['FirstName'];
	 $MiddleNameOld=$row['MiddleName'];
	 $MaidenNameOld=$row['MaidenName'];
	 $LastNameOld=$row['LastName'];
	 $NickNameOld=$row['NickName'];
	 
	
	// echo ($NodeUID. "   ".$FirstName. "   ".$MiddleName. "   ".$MaidenName. "   ".$LastName. "   ".$NickName);
	 $oldName = ($NodeUID.$FirstNameOld.$MiddleNameOld.$MaidenNameOld.$LastNameOld.$NickNameOld);
$oldName = str_replace(' ', '', $oldName);	
	echo $oldName;
  }
  
	
	
	 
  echo ("Old Name is ".$oldName);
   mysqli_close($conn);
	echo ("End getOldName");
//end function getOldName

}


function updatePhotoName(){
echo ("This is function updatePhotoName");
//echo  $GLOBALS['oldName'];
//echo  $GLOBALS['newName'];
$oldName = $GLOBALS['oldName'];
$newName = $GLOBALS['newName'];
echo ("Old Name is ".$oldName);
echo ("New Name is ".$newName);
//rename("images","pictures");
//rename("/test/file1.txt","/home/docs/my_file.txt");
//rename("images/test2.txt","images/test1.txt");
//rename("images/1.png","images/chaney.png");
//$newName = "Chaney.png";
//$newName = "Chaney";
$filetype = ".png";
$oldName = $oldName.$filetype;
$newName = $newName.$filetype;
echo $newName;
if (file_exists($oldName)){
rename("images/".$oldName,"images/".$newName);
}else{
echo ("File ".$oldName." not found");	
}
}

?>






<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="jquery-3.3.1.js"></script>
<!--<script src="myJsFunctions.js"></script>-->
<!--<script src="searchfamilymember.js"></script>-->
<script src="admincrud.js"></script>

<script>
 var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    myObj = (this.responseText);
	localStorage.removeItem("myObj");
localStorage.setItem("myObj", (myObj));
    }
  };
  xhttp.open("GET", "jsonMyObj.txt", true);
  xhttp.send();
</script>

<script>
 var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    pngFiles = (this.responseText);
	localStorage.removeItem("pngFiles");
localStorage.setItem("pngFiles", (pngFiles));
    }
  };
  xhttp.open("GET", "jsonPngFiles.txt", true);
  xhttp.send();
</script>



<style>
table, th, td {
  border: 1px solid black;
}

<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>


<script>
var myTable = document.getElementById("myTable");
var myObj = JSON.parse(localStorage["myObj"]);
var rowIndex;
</script>
  
 </head>
<body>


<a href="index.html">Main Menu</a><br>
<a href="adminMenu.php"> Admin Menu</a><br>

Enter First Name or Nick Name:<br>

  <input id="searchName" type="text"><br><br>
  <button id="SearchButton" onclick="mySearch()">Search</button><br><br>
  
  <p id="demo"></p>
  
  
   <script>
//document.getElementById("demo").innerHTML=myObj;
</script>
   <script>
var input = document.getElementById("searchName");
input.addEventListener("keyup", function(event) {
  if (event.keyCode === 13) {
   event.preventDefault();
   document.getElementById("SearchButton").click();
  }
});

</script> 
  
 <p id="clickForDetails">Click on family member's name for photo and details.</p>
<table id="myTable">
  <tr>
    <th>NUID</th>
    <th>First Name</th>
    <th>Middle Name</th>
	<th>Maiden Name</th>
    <th>Last Name</th>
    <th>Nick Name</th>
  </tr>
  </table>
  
  <script>
	document.getElementById("myTable").style.visibility = "hidden";
			document.getElementById("clickForDetails").style.visibility = "hidden";
 </script>  

  
  <br>
<img id="myImage" src="" alt="No photo available" style="width:100px">


<h2>CRUD</h2>
<form name="formCrud" action="adminCrud.php "method="POST" >
<select name='CrudOption'>
<option value=''></option>
<option value='delete'>Delete</option>
<option value='insert'>Insert</option>
<option value='select'>Select</option>
<option value='update'>Update</option>
</select>
<input type="submit" name="submit" value="Submit"><br><br>  

 <div>
<label for="node">Node UID:</label>
<input type='text' id='node' name='NodeUID' value="<?php echo $NodeUID;?>"><br>
 </div>
 
  <div>
<label for="first">First Name:</label>
 <input type="text" id='first' name="FirstName" autocomplete='off' value="<?php echo $FirstName;?>"><br>
 </div>
 
  <div>
<label for="middle">Middle Name:</label>
<input type="text" id='middle' name="MiddleName" autocomplete='off' value="<?php echo $MiddleName;?>"><br>
 </div>

  <div>
<label for="maiden">Maiden Name:</label>
<input type="text" id='maiden' name="MaidenName" autocomplete='off' value="<?php echo $MaidenName;?>"><br>
 </div>


<label for="last">Last Name:</label>
 <input  id='last'  type="text" name="LastName" value="<?php echo $LastName;?>"><br>

<label for="nick">Nick Name:</label>
<input  id='nick'  type="text" name="NickName" value="<?php echo $NickName;?>"><br>


Date Of Birth: <input id='dob' type="text" name="DateOfBirth" value="<?php echo $DateOfBirth;?>"><br>
Place Of BirthCity: <input id='pobc' type="text" name="PlaceOfBirthCity" value="<?php echo $PlaceOfBirthCity;?>"><br>
Place Of BirthState: <input id='pobs' type="text" name="PlaceOfBirthState" value="<?php echo $PlaceOfBirthState;?>"><br>


Date Of Death: <input id="dod" type="text" name="DateOfDeath" value="<?php echo $DateOfDeath;?>"><br>
Place Of DeathCity: <input type="text" name="PlaceOfDeathCity" value="<?php echo $PlaceOfDeathCity;?>"><br>
Place Of DeathState: <input type="text" name="PlaceOfDeathState" value="<?php echo $PlaceOfDeathState;?>"><br>


Tel1: <input id="tel1" type="text" name="Tel1" value="<?php echo $Tel1;?>"><br>
<!--Tel2: <input type="text" name="Tel2" value="<?php echo $Tel2;?>"><br>-->
Email: <input id="email" type="text" name="Email" value="<?php echo $Email;?>"><br>
<!--Street Address: <input type="text" name="StreetAddress" value="<?php echo $StreetAddress;?>"><br>-->
City: <input id="city" type="text" name="City" value="<?php echo $City;?>"><br>
State: <input id="state" type="text" name="State" value="<?php echo $State;?>"><br>
Comments: <input id="comments" type="text" name="Comments" value="<?php echo $Comments;?>"><br>


<span class="error"> <?php echo $NodeUIDErr;?></span>
<span class="error"> <?php echo $CrudOptionErr;?></span>
</form>

 </body>
</html>


