<html>
<head>
</head>
<body>
<?php
  include("DbConnect.php");              // Add in the database connection details


  $CDNo		 = $_POST['CDNbr'];
  $TrackNo   		 = $_POST['Tracknbr'];
  $TrackTitle		 = $_POST['TrackTitle'];
  
  // echo $CDNo;
  // echo $TrackNo;		 
  // echo $TrackTitle;   	
  

  
  $Query = "INSERT INTO CDTracks (CDno,TrackNo,TrackTitle) VALUES('$CDNo','$TrackNo','$TrackTitle')";
  
  // Now run the query - i.e. Insert the data into the table
  
  $Result = mysqli_query($DB,$Query); 	 // $Result gives us a boolean value to check if the insert was completed ok. 
					 // indicates success. This is very useful for debugging purposes
//  echo $Result;

 if ($Result)
	
	echo 'Track details inserted';		
     else

	echo 'Sorry - unable to complete the operation at present';
  

?>

<FORM METHOD="LINK" ACTION="AddTracks.php">


<INPUT TYPE="submit" VALUE="Back to Track Insert">
</FORM>



</body>
</html>
