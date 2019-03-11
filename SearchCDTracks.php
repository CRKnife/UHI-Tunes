<html>
<head>
	<title>UHI Tunes CD Search</title>

	<link rel="stylesheet" type="text/css" href="css/style.css"/>

</head>
<header>
    <h1>UHI Tunes</h1>
</header>
<body>
    <ul>
        <li><a href="home.html">Home</a></li>
        <li><a href="AddCD.php">Add CD</a></li>
        <li><a href="AddTracks.php">Add CD tracks</a></li>
        <li><a href="EnterSearchCDs.php">Search CDs</a></li>
        <li><a class="active" href="EnterSearchCDTracks.php">Search CD Tracks</a></li>
        <li><a href="AboutUs.html">About Us</a></li>
        <li><a href="ContactUs.html">Contact Us</a></li>
    </ul>
    <h1>Results of CD search</h1>

    <table border="1">

    <tr>
    <th>CD number</th>
    <th>CD title</th>
    <th>Release year</th>
    <th>Artist name</th>
    <th>Track title</th>
    </tr>


<?php	

// connect to the database...
    include("DbConnect.php");  

	$CDNbr	 	= $_POST['CDNbr'];
	$CDTitle 	= $_POST['CDTitle'];
	$ReleaseYear= $_POST['ReleaseYear'];
	$ArtistName	= $_POST['ArtistName'];

// 	 phrase the query and report the data...
	$Query = "SELECT CDs.CDNo,CDTitle,ReleaseYear,ArtistName,TrackTitle
                FROM CDs,CDTracks WHERE (CDs.CDNo = '$CDNbr' OR CDTitle LIKE '$CDTitle' 
                OR ReleaseYear LIKE '$ReleaseYear' OR ArtistName LIKE '$ArtistName') AND CDs.CDNo = CDTracks.CDNo ";
	$Result = mysqli_query($DB,$Query);  

	$NumResults = mysqli_num_rows($Result);	
  							   
// echo $NumResults;

  if ($NumResults>0)
	{ 
		// while ( 'is there any data to report?') done with

		   while ($Row = mysqli_fetch_assoc($Result)) 
		{

		 echo '<tr>';
		 echo '<td>'.$Row['CDNo'].'</td>';
		 echo '<td>'.$Row['CDTitle'].'</td>';
		 echo '<td>'.$Row['ReleaseYear'].'</td>';
		 echo '<td>'.$Row['ArtistName'].'</td>';
		 echo '<td>'.$Row['TrackTitle'].'</td>';
		 echo '</tr>';
		}

	}
	else
	echo '<h2>'.'CDs not found'.'</h2>';

?>
</table>

</body>
</html>
