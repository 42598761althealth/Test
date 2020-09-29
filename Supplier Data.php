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
$SupplierEmailErr = $SupplierID_Err = $Supplier_Tel ="";
$Supplier_ID =$Contact_Person =$Supplier_Tel =$Supplier_Email =$Bank =$Bank_Code =$Supplier_Banknum =$Supplier_Type_Bank_Account ="";

//check if the data has been submitted,
if ($_SERVER["REQUEST_METHOD"]== "POST") {
  $Supplier_ID = val($_POST["Supplier_ID"]);
  $Contact_Person = val($_POST["Contact_Person"]);
  $Supplier_Tel = val($_POST["Supplier_Tel"]);
  $Bank = val($_POST["Bank"]);
  $Bank_Code = val($_POST["Bank_Code"]);
  $Supplier_Banknum = val($_POST["Supplier_Banknum"]);
  $Supplier_Type_Bank_Account= val($_POST["Supplier_Type_Bank_Account"]);
   

 if (empty($_POST["Supplier_ID "])) {
    $SupplierID_Err = "Id required";
  } else {
    $Supplier_ID = Val($_POST["$Supplier_ID "]);
  }
}



 
  if (empty($_POST["Supplier_Email"])) {
    $SupplierEmailErr = "Email is required";
  } else {
    $Supplier_Email = Val($_POST["Supplier_Email"]);
	// check if e-mail address is well-formed
    if (!filter_var($Supplier_Email, FILTER_VALIDATE_EMAIL)) {
      $SupplierEmailErr = "Invalid email format"; 
   }
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
      <td><h2>Supplier Information </h2></td>
      <td></td>
    </tr>
    <tr>
      <td>Supplier_ID</td>
      <td><input type="text" name="Supplier_ID" maxlength="" value="<?php echo $Supplier_ID;?>" />
	  <span class="error">* <?php echo $SupplierID_Err ;?></span>
     <br><br>
	  
	  
	  </td>
    </tr>
	
	 <tr>
      <td>Supplier Contact_Person</td>
      <td><input type="text" name="Contact_Person" maxlength="50" />
	  </td>
    </tr>
	
    <tr>
      <td>Supplier Telephone</td>
      
	  <td><input type="text" name="Supplier_Tel" maxlength="50" />
	  
   </tr>	
	
    <tr>
      <td>Supplier E-mail Address.</td>
      <td><input type="text" name="Supplier_Email" maxlength="50" />
	  <span class="error">* <?php echo $SupplierEmailErr;?></span>
     <br><br>
	 </td>
    </tr>
	
	<tr>
      <td>Bank</td>
      <td><input type="text" name="Bank" maxlength="50" /></td>
    </tr>
	
	<tr>
      <td>Bank Code</td>
      <td><input type="text" name=" Bank_Code" maxlength="50" /></td>
    </tr>	
	
	<tr>
      <td>Supplier Bank Number</td>
      <td><input type="text" name="Supplier_Banknum" maxlength="50" /></td>
    </tr>
	
	<tr>
      <td>Supplier Bank Number</td>
      <td><input type="text" name="Supplier_Type_Bank_Account" maxlength="50" /></td>
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
echo "Supplier ID: ".$Supplier_ID;
echo"<br>";
echo "Contact Person: ".$Contact_Person;
echo"<br>";
echo "Supplier Telephone: ".$Supplier_Tel;
echo"<br>";
echo "Supplier Email: ".$Supplier_Email;
echo"<br>";
echo "Bank: ".$Bank;
echo"<br>";
echo "Bank Code: ".$Bank_Code;
echo"<br>";
echo "Supplier Bank No.: ".$Supplier_Banknum;
echo"<br>";
echo "Supplier Type Bank Account: ".$Supplier_Type_Bank_Account;
echo"<br>";

?>

</body>
</html>
