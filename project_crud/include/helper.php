<?php
declare(strict_types=1);

function Filter_data(string $data)
{
    global $conn;
    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = stripslashes($data); 
    $data = $conn->real_escape_string($data);

    return $data;

}



?>