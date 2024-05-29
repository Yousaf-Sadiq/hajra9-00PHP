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

function ERROR_MSG(string $msg)
{
    $html = "<div class='alert alert-danger' role='alert'>
    {$msg}
 </div>";

    echo $html;
}

function SUCCESS_MSG(string $msg)
{
    $html = "<div class='alert alert-success' role='alert'>
    {$msg}
 </div>";

    echo $html;
}

function refresh_url(int $sec, string $url)
{
    header("Refresh:{$sec},url='{$url}'");

    // header("Refresh:2,url='home.php'");
}

function redirect_url(string $url)
{
    header("Location:{$url}");
}

function pre( $a)
{
    echo "<pre>";
    print_r($a);
    echo "</pre>";
}


function File_upload(string $input, array $ext, string $destination)
{

    $file = $_FILES[$input];

    $file_name = rand(1, 99) . "_" . $file["name"];

    $tmp_name = $file["tmp_name"];



    // checking extention ===================================
    $extention = $ext;

    $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);

    $file_ext = strtolower($file_ext);


    if (!in_array($file_ext, $extention)) {
        return 1;
    }


    $relative_path = domain2 . $destination . $file_name; // saving or removing 

    $absolute_path = domain1 . $destination . $file_name; // fetching 


    
    if (move_uploaded_file($tmp_name, $relative_path)) {

        $status = [
            "relative_path" => $relative_path,
            "absolute_path" => $absolute_path
        ];

        return $status;

    } else {
        return false;
    }

}

?>