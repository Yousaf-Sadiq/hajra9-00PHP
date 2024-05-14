<?php
define("HOSTNAME", "localhost");
define("USERNAME", "root");
define("PASSWORD", "");
define("DB", "h_project_crud");


$conn = new mysqli(HOSTNAME, USERNAME, PASSWORD, DB);
// $conn =  mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DB);

if ($conn) {
// echo "ESTABLISHED";
}else{
    $conn->connect_error;
}



?>