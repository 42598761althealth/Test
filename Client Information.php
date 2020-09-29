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
$C_nameErr = $C_surnameErr = $C_Tel_Err = $C_EmailErr = $ClientIdErr ="";
$Client_ID =$C_name =$C_surname =$Address =$Code =$C_Tel_H =$C_Tel_W =$C_Tel_Cell =$C_Email =$Referrence_ID ="";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["C_name"])) {
    $C_nameErr = "Name is required";
  } else {
    $C_name = test_input($_POST["C_name"]);
	// check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$C_name)) {
      $nameErr = "Only letters and white space allowed"; 
   }
  }
    
    if (empty($_POST["Client_ID"])) {
    $ClientIdErr = "Id required";
  } else {
    $Client_ID = test_input($_POST["Client_ID"]);
  }
}
  
    if (empty($_POST["C_surname"])) {
    $C_surnameErr = "Surname is required";
  } else {
    $C_surname = test_input($_POST["C_surname"]);
	// check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$C_surname)) {
      $C_surnameErr = "Only letters and white space allowed";
   }
  }
   
  if (empty($_POST["C_Email"])) {
    $C_EmailErr = "Email is required";
  } else {
    $C_Email = test_input($_POST["C_Email"]);
	// check if e-mail address is well-formed
    if (!filter_var($C_Email, FILTER_VALIDATE_EMAIL)) {
      $C_EmailErr = "Invalid email format"; 
   }
  }
  

 
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
 }
?>

<form name="employment" action="<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]);?>" method="post"> 
 <table width="600" border="0" cellspacing="1" cellpadding="1">
    <tr>
      <td><h3>Client Information </h3></td>
      <td></td>
    </tr>
	
	<tr>
      <td>Client ID </td>
      <td><input type="text" name="Client_ID" maxlength="" />
	  <span class="error">* <?php echo $C_nameErr;?></span>
     <br><br>
	  </td>
    </tr>
	
    <tr>
      <td>Customer Name</td>
      <td><input type="text" name="C_name" maxlength="" value="<?php echo $C_name;?>" />
	  <span class="error">* <?php echo $C_nameErr;?></span>
     <br><br>
	  </td>
    </tr>
	
	 <tr>
      <td>Customer Surname</td>
      <td><input type="text" name="C_surname" maxlength="50" value="<?php echo $C_surname;?>" />
	  <span class="error">* <?php echo $C_surnameErr;?></span>
     <br><br>
	  </td>
    </tr>
	
	<tr>
      <td>Address</td>
      <td>
	  
	  <textarea name="Address" cols="30" rows="3"> <?php echo $Address;?></textarea>
	  
	  </td>
    </tr>

    <tr>
      <td>Code</td>
      
	  <td><input type="text" name="Code" maxlength="50" value="<?php echo $Code;?>" />
	  
   </tr>	
	
    <tr>
      <td>Home Telephone</td>
      <td><input type="text" name="C_Tel_H" maxlength="50" value="<?php echo $C_Tel_H;?>" />
	  </td>
    </tr>
	
	<tr>
      <td>Work Telephone</td>
      <td><input type="text" name="C_Tel_W" maxlength="50" value="<?php echo $C_Tel_W;?>" />
	  </td>
    </tr>
	
	<tr>
      <td>CellPhone No.</td>
      <td><input type="text" name="C_Tel_Cell" maxlength="50" value="<?php echo $C_Tel_Cell;?>" />
	  </td>
    </tr>
	
	<tr>	
	<td><label for="Referrence_ID">Choose a Referrence:</label></td>
	<td>
   <select name="Referrence_ID" id="Referrence_ID>   
   <option value="Word by Mouth">Word by Mouth</option>
   <option value="Friend">Friend</option>
   <option value="Facebook">Facebook</option>   
   <option value="Myself">Myself</option>
   <option value="Other">Other</option>
   </select> 
   </td>
   </tr>
	
	<tr>
      <td>E-mail Address.</td>
      <td><input type="text" name="C_Email" maxlength="50" />
	  <span class="error">* <?php echo $C_EmailErr;?></span>
     <br><br>
	 </td>
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
echo "Client ID: ".$Client_ID;
echo"<br>";
echo "Customer Name: ".$C_name;
echo"<br>";
echo "Customer Surname: ".$C_surname;
echo"<br>";
echo "Address: ".$Address;
echo"<br>";
echo "Code: ".$Code;
echo"<br>";
echo "Home Telephone: ".$C_Tel_H;
echo"<br>";
echo "Work Telephone: ".$C_Tel_W;
echo"<br>";
echo "CellPhone: ".$C_Tel_Cell;
echo"<br>";
echo "E-mail Address: ".$C_Email;
echo"<br>";
echo "Referrence: ".$Referrence_ID;
?>

</body>
</html>