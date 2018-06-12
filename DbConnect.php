<?php
// This is the version you would use ordinarily...

// the OK and NotOK versions put out messages to screen which screw things up 
// when you do try to use the database for real...


// Sets up the connection parameters to a mysql database

// To use you edit the parameters into the '' below

// If connection fails it's usually one of the parameters has been mistyped
// or the server's down...


DEFINE ('DB_USER', 'inhnc');                           // The username
DEFINE ('DB_PASSWORD','inhnc');                        // The password
DEFINE ('DB_HOST', 'localhost');                        // The mysql server host address 
DEFINE ('DB_NAME', 'inhnc');                           // The database name
@$DB = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
if (mysqli_connect_errno())
  {
  echo 'Cannot connect to the database: ' . mysqli_connect_error();
  }
?>
