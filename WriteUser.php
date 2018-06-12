<html>
<head>
	<title>UHI Tunes register user</title>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
<?php
  include("DbConnect.php");              // Add in the database connection details

  // Get the information from  RegUser.php

  $Email		 = $_POST['Email'];
  $Password   	 = $_POST['Password'];
 
  
//  echo $Email;
//  echo $Password;
  
  
  // At this point we have the information from the form and we can process accordingly.
  
  // Create the SQL statement - Thie SQL statement follows the general insert statement which is :
  // insert into [TableName] [Fieldnames] Values [values to insert] - we are inserting into the users table 
  // so our SQl statement will be
  
  $Query = "insert into UsersAuto (Email,passwd) values ('$Email','$Password')";
  
  // Now run the query - i.e. Insert the data into the table
  
  $Result = mysqli_query($DB,$Query); 	 // $Result gives us a boolean value to check if the insert was completed ok. 
					 // indicates success. This is very useful for debugging purposes
//  echo $Result;

 if ($Result)
	
	echo 'User login details inserted';		
     else

	echo 'Sorry - unable to complete the operation at present';
  

?>

<FORM METHOD="LINK" ACTION="Login.php">


<INPUT TYPE="submit" VALUE="Back to Login">
</FORM>

</body>
</html>


