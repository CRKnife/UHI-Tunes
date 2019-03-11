<html>
<head>
	<title>UHI Tunes register user</title>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
<header>
    <h1>UHI Tunes</h1>
</header>

<nav>
    <ul>
        <li><a href="home.html">Home</a></li>
        <li><a class="active" href="AddCD.php">Add CD</a></li>
        <li><a href="EnterSearchCDs.php">Search CDs</a></li>
        <li><a href="EnterSearchCDTracks.php">Search CD Tracks</a></li>
		<li><a href="TableReportCalc.php">CD Report</a></li>
        <li><a href="AboutUs.html">About Us</a></li>
        <li><a href="ContactUs.html">Contact Us</a></li>
    </ul>
</nav>  

<body>
<h1>Add CD</h1>

<?php
  include("DbConnect.php");              // Add in the database connection details

  // Get the information from  AddCD.php

	$CDTitle 	= $_POST['CDTitle'];
	$NoTracks	= $_POST['NoTracks'];
	$ReleaseYear= $_POST['ReleaseYear'];
	$Label		= $_POST['Label'];
	$ArtistName	= $_POST['ArtistName'];
	$CDPrice	= $_POST['CDPrice'];
 
  

	echo $CDTitle;
    echo $ReleaseYear;
	echo $NoTracks;
	echo $Label;
	echo $ArtistName;
	echo $CDPrice;

  
  
  // At this point we have the information from the form and we can process accordingly.
  
  // Create the SQL statement - Thie SQL statement follows the general insert statement which is :
  // insert into [TableName] [Fieldnames] Values [values to insert]
  
  $Query = "insert into CDsAuto (CDtitle,NoTracks,Label,ReleaseYear,Artistname) values ('$CDTitle','$NoTracks','$Label','$ReleaseYear','$ArtistName')";
  
  // Now run the query - i.e. Insert the data into the table
  
  $Result = mysqli_query($DB,$Query); 	 // $Result gives us a boolean value to check if the insert was completed ok. 
					 // indicates success. This is very useful for debugging purposes
//  echo $Result;

 if ($Result)
	
	echo 'CD details inserted';		
     else

	echo 'Sorry - unable to complete the operation at present';
  

?>

<FORM METHOD="LINK" ACTION="AddCD.php">
<INPUT TYPE="submit" VALUE="Back to Add CD">
</FORM>
<FORM METHOD="LINK" ACTION="AddTracks.php">
<INPUT TYPE="submit" VALUE="Add tracks to CD">
</FORM>

</body>
</html>


