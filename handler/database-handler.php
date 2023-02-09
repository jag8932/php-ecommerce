<?php 

// Heroku ClearDB connection
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$dbServername = $url["host"];
$dbUsername = $url["user"];
$dbPassword =  $url["pass"];
$dbName = substr($cleardb_url["path"], 1);

//connection 
$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
