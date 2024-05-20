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

function pre(array $a)
{
    echo "<pre>";
    print_r($a);
    echo "</pre>";
}

?>