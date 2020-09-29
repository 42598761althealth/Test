<!DOCTYPE html>

<html>

	<head>
		<title>PHP Form</title>
		<meta charset="utf-8">	

		<style>
		.error {
			color: red;
		}
		</style>
		
	</head>

<body>
<?php
//Define form Variables, intialize to Empty string 
$Supplement_ID =$Supplier_ID =$Supplement_Description =$Cost_Excl =$Cost_Incl =$Min_Level =$Current_Stock_Level =$Nappi_Code =$Inv_Num="";

//check if the data has been submitted,
if ($_SERVER["REQUEST_METHOD"]== "POST") {
  $Supplement_ID = val($_POST["Supplement_ID"]);
  $Supplier_ID = val($_POST["Supplier_ID"]);
  $Supplement_Description = val($_POST["Supplement_Description"]);
  $Cost_Excl = val($_POST["Cost_Excl"]);
  $Cost_Incl = val($_POST["Cost_Incl"]);
  $Min_Level = val($_POST["Min_Level"]);
  $Current_Stock_Level = val($_POST["Current_Stock_Level"]);
  $Nappi_Code= val($_POST["Nappi_Code"]);
  $Inv_Num= val($_POST["Inv_Num"]);
  
      
}

// create a Function to validate user Input 
Function Val ($data) {
 $data=trim($data);
 $data = stripslashes($data);
 $data = htmlspecialchars($data);
 return $data ;
}

?>
<form name="employment" action="<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]);?>" method="post"> 
 <table width="600" border="0" cellspacing="1" cellpadding="1">
    <tr>
      <td><h2>Supplement Information </h2></td>
      <td></td>
    </tr>
    <tr>
      <td>Supplement ID</td>
      <td><input type="text" name="Supplement_ID" maxlength="" />
	  </td>
    </tr>
		  
	  <tr>	
	<td><label for="Supplier_ID">Select Supplier ID:</label></td>
	<td>
   <select name="Supplier_ID" id="Supplier_ID>   
   <option value="SUPPLIER A">SUPPLIER A</option>
   <option value="SUPPLIER B">SUPPLIER B</option>
   <option value="SUPPLIER C">SUPPLIER C</option>   
   <option value="SUPPLIER D">SUPPLIER D</option>
   <option value="SUPPLIER E">SUPPLIER E</option>
   <option value="SUPPLIER F">SUPPLIER F</option>
   <option value="SUPPLIER G">SUPPLIER G</option>
   <option value="SUPPLIER H">SUPPLIER H</option>
   <option value="SUPPLIER I">SUPPLIER I</option>
   </select> 
   </td>
   </tr>
	  </td>
    </tr>
	
    <tr>
      <td>Supplement Description</td>
      
	  <td><input type="text" name="Supplement_Description" maxlength="50" />
	  
   </tr>	
	
    <tr>
      <td>Cost Incl</td>
      <td><input type="text" name="Cost_incl" maxlength="50" /></td>
    </tr>
	
	<tr>
      <td>Cost Excl</td>
      <td><input type="text" name="Cost_Excl" maxlength="50" /></td>
    </tr>
	
	<tr>
      <td>Min Level</td>
      <td><input type="text" name="Min_Level" maxlength="50" /></td>
    </tr>	
	
	<tr>
      <td>Current Stock_Level</td>
      <td><input type="text" name="Current_Stock_Level" maxlength="50" /></td>
    </tr>
	
	<tr>
      <td>Nappi Code</td>
      <td><input type="text" name="Nappi_Code" maxlength="50" /></td>
    </tr>
	
	<tr>
      <td>Inv Num</td>
      <td><input type="text" name="Inv_Num" maxlength="50" /></td>
    </tr>
		
    
    <tr>
      <td></td>
      <td>
	  
	  <input type="submit" name="submit" value="Submit" />
	  <input type="submit" name="Display" value="Display" />
	  <input type="reset" name="reset" value="Reset" />
	  
	  </td>
    </tr>
  </table>
</form>
    


<?php
echo "<h3> Your Input :</h3>";
echo "Supplement ID: ".$Supplement_ID;
echo"<br>";
echo "Supplier ID: ".$Supplier_ID;
echo"<br>";
echo "Supplement_Description: ".$Supplement_Description;
echo"<br>";
echo "Cost Incl: ".$Cost_Incl;
echo"<br>";
echo "Cost Excl: ".$Cost_Excl;
echo"<br>";
echo "Min Level: ".$Min_Level;
echo"<br>";
echo "Current Stock Level: ".$Current_Stock_Level;
echo"<br>";
echo "NappiCode: ".$Nappi_Code;
echo"<br>";
echo "Inv Num: ".$Inv_Num;
echo"<br>";

?>

</body>
</html>
