<html>
<head>
	<title>UHI Tunes Add CD</title>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
<?php
  include("DbConnect.php");              // Add in the database connection details

  // Get the information from  RegUser.php

 $CDTitle		 = $_POST['CDTitle'];
 $NoTracks   	 = $_POST['NoTracks'];
 $Label     	 = $_POST['Label'];
 $ReleaseYear  	 = $_POST['ReleaseYear'];
 $ArtistName   	 = $_POST['ArtistName'];
 $CDPrice   	 = $_POST['CDPrice'];
    
echo $CDTitle;		 
echo $NoTracks;   	
echo $Label;    	
echo $ReleaseYear;  	 
echo $ArtistName;   	
echo $CDPrice;   
  
  // At this point we have the information from the form and we can process accordingly.
  
  // Create the SQL statement - Thie SQL statement follows the general insert statement which is :
  // insert into [TableName] [Fieldnames] Values [values to insert] - we are inserting into the users table 
  // so our SQl statement will be
  
  $Query = "insert into CDsAuto (CDTitle,NoTracks,Label,ReleaseYear,ArtistName,CDPrice) values ('$CDTitle',$NoTracks,'$Label','$ReleaseYear','$ArtistName','$CDPrice')";
  
  // Now run the query - i.e. Insert the data into the table
  
  $Result = mysqli_query($DB,$Query); 	 // $Result gives us a boolean value to check if the insert was completed ok. 
					 // indicates success. This is very useful for debugging purposes
//  echo $Result;

 if ($Result)
	
	echo '<h1>CD sucessfully added to catalogue</h1>';		
     else

	echo '<h1>Sorry - unable to complete the operation at present<h1>';
  

?>

<FORM METHOD="LINK" ACTION="AddCD.php">


<INPUT TYPE="submit" VALUE="Add another CD">
</FORM>

</body>
</html>


