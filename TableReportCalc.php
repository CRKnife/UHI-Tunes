<html>
<head>
	<title>SQL table data reporter</title>

	<link rel="stylesheet" type="text/css" href="css/style.css"/>

</head>

<body>
<h1>Report data row(s) from SQL table</h1>

﻿<table border="1">

<tr>
<th>CD title</th>
<th>Label</th>
<th>Artist name</th>
<th>CD price</th>
</tr>

<?php	

// connect to the database...
    include("DbConnect.php");                                     
//
// 	 phrase the query you want to ask... e.g.
//
   
    $Nrecs=0;
	$Query = "SELECT COUNT(CDTitle) FROM CDs";
	$Result = mysqli_query($DB,$Query);                         // Store the resulting data in the $Result array
	$row=mysqli_fetch_row($Result);

	$Nrecs=$row[0];

?>



<?php
//   now report the data...
	$Query = "SELECT CDTitle,Label,ArtistName,CDPrice FROM CDs";
	$Result = mysqli_query($DB,$Query);                     
// while ( 'is there any data to report?') done with

   while ($Row = mysqli_fetch_assoc($Result)) 
{

 echo '<tr>';
 echo '<td>'.$Row['CDTitle'].'</td>';
 echo '<td>'.$Row['Label'].'</td>';
 echo '<td>'.$Row['ArtistName'].'</td>';
 echo '<td>'.$Row['CDPrice'].'</td>';
 echo '</tr>';
}
echo 'Number of records: '.$Nrecs;
?>
</table>
<?php
//   now report the data...
	$Query = "SELECT SUM(CDPrice),ROUND(AVG(CDPrice),2),MIN(CDPrice), MAX(CDPrice) FROM CDs";
	$Result = mysqli_query($DB,$Query);                     
// while ( 'is there any data to report?') done with

   while ($Row = mysqli_fetch_row($Result)) 
{

 echo '</br>';
 echo '<p>Total cost: £'.$Row[0].'</br>';
 echo 'Average cost: £'.$Row[1].'</br>';
 echo 'Minimum cost: £'.$Row[2].'</br>';
 echo 'Maximum cost: £'.$Row[3].'</p>';
}
?>
</body>
</html>
