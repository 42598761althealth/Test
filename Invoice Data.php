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
$Inv_Num =$Client_ID =$Inv_Paid_Date =$comments ="";
$Inv_Date = strtotime()

/*
//check if the data has been submitted,
if ($_SERVER["REQUEST_METHOD"]== "POST") {
  $Inv_Num = val($_POST["Inv_Num"]);
  $Client_ID = val($_POST["Client_ID"]);
  $Inv_Date = val($_POST["Inv_Date"]);
  $Inv_Paid = val($_POST["Inv_Paid"]);
  $Inv_Paid_Date= val($_POST["Inv_Paid_Date"]);
  $comments = val($_POST["comments"]);
      
}
*/
?>
<form name="employment" action="<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]);?>" method="post"> 
 <table width="600" border="0" cellspacing="1" cellpadding="1">
    <tr>
      <td><h2>Invoice Information </h2></td>
      <td></td>
    </tr>
    <tr>
      <td>Invoice Number</td>
      <td><input type="text" name="Inv_Num" maxlength="50" />
	  </td>
    </tr>
	
	  <tr>
      <td>Client ID</td>
      <td>
	  
			  <select name="Client_ID">
			  
				<option value="Accountant">Accountant</option>
				<option value="Receptionist">Receptionist</option>
				<option value="Administrator">Administrator</option>
				<option value="Supervisor">Supervisor</option>
			  
			  </select>
			  	  
	  </td>
    </tr>
	
	
	<tr>
      <td>Invoice Date</td>
      <td><input type="text" name="Inv_Date" maxlength="50" />
	  </td>
    </tr>
	
      <tr>
      <td>Invoice Paid</td>
      <td>	  
	  <input type="radio" name="Inv_Paid" value="No" checked />No
	  <input type="radio" name="Inv_Paid" value="Yes" />Yes
	 
	  </td>
    </tr>
	
	
      <td>Invoice Paid date</td>
      <td><input type="text" name="Inv_Paid_Date" maxlength="50" />
	  </td>
    </tr>
	
    <tr>
      <td>Comments</td>
      <td>
	  
	  <textarea name="comments" cols="45" rows="5"></textarea>
	  
	  </td>
    </tr>
    <tr>
      <td></td>
      <td>
	  
	  <input type="submit" name="submit" value="Submit" />
	  <input type="reset" name="reset" value="Reset" />
	  
	  </td>
    </tr>
  </table>
</form>
    


<?php
echo "<h2> Your Input :</h2>";
echo"<br>";
echo "Invoice Number: ".$Inv_Num;
echo"<br>";
echo "Client ID: ".$Client_ID;
echo"<br>";
echo "Invoice Date: ".$Inv_Date;
echo"<br>";
echo "Inv Paid: ".$Inv_Paid;
echo"<br>";
echo "Invoice Paid Date: ".$Inv_Paid_Date;
echo"<br>";
echo "Comments: ".$comments;
echo"<br>";
?>

</body>
</html>
