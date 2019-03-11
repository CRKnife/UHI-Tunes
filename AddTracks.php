<html>
<head>
    <title>Track Insert</title>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<header>
    <h1>UHI Tunes</h1>
</header>
<nav>
    <li><a href="home.html">Home</a></li>
    <li><a href="AddCD.php">Add CD</a></li>
    <li><a class="active" href="AddTracks.php">Add CD Tracks</a></li>
    <li><a href="EnterSearchCDs.php">Search CDs</a></li>
    <li><a href="EnterSearchCDTracks.php">Search CD Tracks</a></li>
	<li><a href="TableReportCalc.php">CD Report</a></li>
    <li><a href="AboutUs.html">About Us</a></li>
    <li><a href="ContactUs.html">Contact Us</a></li>  
</nav>

<body>
    <h1>Please enter the details of the Track</h1>

    <form method="post" action="WriteTrack.php">
        <table>
            <tr>
                <td>CD Number:</td>
                <td><input type="text" name="CDNbr" size="30"/></td>
            </tr>
            <tr>
                <td>Track Number:</td>
                <td><input type="text" name="Tracknbr" size="30"/></td>
            </tr>
            <tr>
                <td>Track Title:</td>
                <td><input type="text" name="TrackTitle" size="30"/></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Insert Track"/></td>
            </tr>
        </table>
    </form>

<form>
<form method="link" action="EnterSearchCDTracks.php">


<input type="submit" value="Search Tracks">
</form>

</body>
</html>