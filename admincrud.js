//comment
var photoname = "";

var strglobal = "";
  var str = "";
  var idvar = "";
  var $idvar = "";
  var idJs = "";
var $idJs = "";
var idPhp = "";
var $idPhp = "";
  var photoid = "";
  var response = ""
  var correctIncorrect = "";
  var photoname = "";
  var fn, mn, man, ln, nn, dob, dobc, dobs, dod, dodc, dods, tel1, email, city, state, comments  ="";

  
//to refresh page
//window.location.reload();



function mySearch() {
	
var myObj = JSON.parse(localStorage["myObj"]);

document.getElementById("myImage").innerHTML= "";
	

  try{
 var myDiv = document.getElementById("myDIV");
myDiv.remove();
 }catch{
 // do nothing
 }

var x = document.getElementById("myTable").rows.length;
var i=x
while (i > 1) {
 document.getElementById("myTable").deleteRow(1);
  i=i-1;
}

searchName = document.getElementById("searchName").value
searchName = searchName.toUpperCase();
  
for (i in myObj) {
nuid=myObj[i].NodeUID;
  fn = myObj[i].FirstName;
  // fn = fn.toUpperCase();
    mn=myObj[i].MiddleName;
 //mn = mn.toUpperCase();
  man=myObj[i].MaidenName;
 //man = man.toUpperCase();
 ln=myObj[i].LastName;
 //ln = ln.toUpperCase();
   nn=myObj[i].NickName;
 //nn = nn.toUpperCase();
  fnn=myObj[i].FirstNickName;
 //fnn = fnn.toUpperCase();
 pobc=myObj[i].PlaceOfBirthCity;
 //pobc = pobc.toUpperCase();
 pobs=myObj[i].PlaceOfBirthState;
 //pobs = pobs.toUpperCase();
 
 dob=myObj[i].DateOfBirth;
 //dob = dob.toUpperCase();
 podc=myObj[i].PlaceOfDeathCity;
 //podc = podc.toUpperCase();
 pods=myObj[i].PlaceOfDeathState;
 //pods = pods.toUpperCase();
 
 dod=myObj[i].DateOfDeath;
 //dod = dod.toUpperCase(); 
 tel1=myObj[i].Tel1;
 //tel1=tel1.toUpperCase();
 email=myObj[i].Email;
 //email=email.toUpperCase();
 city=myObj[i].City;
 //city=city.toUpperCase();
 state=myObj[i].State;
 //state=state.toUpperCase
  comments=myObj[i].Comments;
 
//UpperCase var here  
  fnuc = myObj[i].FirstName;
   fnuc = fnuc.toUpperCase();
    mnuc=myObj[i].MiddleName;
 mnuc = mnuc.toUpperCase();
  manuc=myObj[i].MaidenName;
 manuc = manuc.toUpperCase();
 lnuc=myObj[i].LastName;
 lnuc = lnuc.toUpperCase();
   nnuc=myObj[i].NickName;
 nnuc = nnuc.toUpperCase();
  fnnuc=myObj[i].FirstNickName;
 fnnuc = fnnuc.toUpperCase();
  cityuc=myObj[i].City;
  cityuc = cityuc.toUpperCase();
stateuc=myObj[i].State;
  stateuc = stateuc.toUpperCase();



 if (fnnuc.includes(searchName)==true){
 
  createTable();
  document.getElementById("myTable").style.visibility = "visible";
  document.getElementById("clickForDetails").style.visibility = "visible";
  
   addClickTable();

 }
 
  }

// var x = document.getElementById("myTable").rows.length;
}



 
 function createTable(){
  var x = document.createElement("TBODY");
      var y = document.createElement("TR");
   var z1 = document.createElement("TD");
 var z2 = document.createElement("TD");
  var z3 = document.createElement("TD");
   var z4 = document.createElement("TD");
    var z5 = document.createElement("TD");
	 var z6 = document.createElement("TD");
  z1.innerHTML = (nuid);
 z2.innerHTML = (fn);
 z3.innerHTML = (mn);
 z4.innerHTML = (man);
 z5.innerHTML = (ln);
 z6.innerHTML = (nn);
  y.appendChild(z1);
    y.appendChild(z2);
	y.appendChild(z3);
	y.appendChild(z4);
	y.appendChild(z5);
	y.appendChild(z6);
  x.appendChild(y);
  document.getElementById("myTable").appendChild(x);
  
   var para = document.createElement("p");
var node = document.createTextNode("Click on family member's name for details.");
para.appendChild(node);

}
 
 
 

 
  
 
  function addClickTable(){
   var table = document.getElementById('myTable');
    var rows = table.getElementsByTagName('tr');

    for (var i = 0; i < rows.length; i++) {
        // Take each cell
     var row = rows[i];
        // do something on onclick event for cell
     row.onclick = function () {
	 // alert(idvar);
 // alert(this);
  
   var myDiv = document.createElement("div");
//myDiv.style.cssText = 'position:absolute;width:100%;height:100%;opacity:0.3;z-index:100;background:#000;';
document.body.appendChild(myDiv);
myDiv.id=("myDIV");

            // Get the row id where the cell exists
			rowIndex=(this.rowIndex);
			if (rowIndex==0){
			return;
			}
			//alert(rowIndex);
			nuid = (this.cells[0].innerHTML);
			fn = (this.cells[1].innerHTML);
			mn = (this.cells[2].innerHTML);
			man = (this.cells[3].innerHTML);
			ln = (this.cells[4].innerHTML);
			nn = (this.cells[5].innerHTML);
			
			
			
			photoname = nuid+fn+mn+man+ln+nn;
			// photoname = photoname.replace(" ", "");
			 photoname = photoname.split(" ").join("");
			showPhoto();
			//populateCrudSelect();
			//showFamilyMemberInfo();
			 deleteRows();
			document.getElementById("myTable").style.visibility = "hidden";
			document.getElementById("clickForDetails").style.visibility = "hidden";
   
           				       }
							   }
							   }
	


/*
function rowIndex(){
 var table = document.getElementById("myTable");
                for(var i = 0; i < table.rows.length; i++)   {
                                 table.rows[i].onclick = function()
                    {
						
						//idvar = (this.cells[0].innerHTML);
						//29 Sep 2020 Stopped using idvar for photo id
			//will now use idvar+firstname+middlename+maidenname+lastname+nickname
			idvar = (this.cells[0].innerHTML);
			firstname = (this.cells[1].innerHTML);
			middlename = (this.cells[2].innerHTML);
			maidenname = (this.cells[3].innerHTML);
			lastname = (this.cells[4].innerHTML);
			nickname = (this.cells[5].innerHTML);
			photoname = (idvar+firstname+middlename+maidenname+lastname+nickname);
						       }
							   
                }
}
*/




function showPhoto(){
//	var photoname = '15JosephzzzThomasJoeThomasPapaGrandpa.png';
//	document.getElementById('myImage').src='images/15JosephThomasJoe Thomas Papa Grandpa.png';
//	document.getElementById('myImage').src='images/1ChaneyThomas.png';
	document.getElementById('myImage').src='images/'+photoname+'.png';
	
		}
		
		function deleteRows(){
			var x = document.getElementById("myTable").rows.length;
var i=x
while (i > 1) {
 document.getElementById("myTable").deleteRow(1);
  i=i-1;
}				 
idvar = "";
	 }

  
  function populateCrudSelect(){
	 	  document.getElementById("first").value=(fn);
		  document.getElementById("middle").value=(mn);
		  document.getElementById("maiden").value=(man);
		  document.getElementById("last").value=(ln);
		  document.getElementById("nick").value=(nn);
		 // document.getElementById("dob").value=(dob);
		  document.getElementById("pobc").value=(pobc);
		  document.getElementById("pobs").value=(pobs);
		 // document.getElementById("dod").value=(dod);
		  document.getElementById("podc").value=(podc);
		  document.getElementById("pods").value=(pods);
		  document.getElementById("tel1").value=(tel1);
		  document.getElementById("email").value=(email);
		  document.getElementById("city").value=(city);
		  document.getElementById("state").value=(state);
		  document.getElementById("comments").value=(comments);
		   }
  
  

