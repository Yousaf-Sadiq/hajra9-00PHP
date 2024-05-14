<?php
require_once dirname(__DIR__) . "/layout/user/header.php";

/**
 * 1. $_POST
 * 2. $_GET
 * 3. $_FILES
 * 4. $_SERVER
 * 5. $_REQUEST
 */
?>


<?php

if (isset($_POST["insert"]) && !empty($_POST["insert"])) {

    $email = Filter_data($_POST["Email"]);
    $password = Filter_data($_POST["pswd"]);


    $status = [
        "error" => 0,
        "msg" => []
    ];


    if (!isset($email) || empty($email)) {
        $status["error"]++;

        array_push($status["msg"], "EMAIL IS REQUIRED");
    }



    if (!isset($password) || empty($password)) {
        $status["error"]++;

        array_push($status["msg"], "PASSWORD IS REQUIRED");
    }




    if ($status["error"] > 0) {

        foreach ($status["msg"] as $value) {
            echo $value . "<br>";
        }
    }
}


?>



<?php
require_once dirname(__DIR__) . "/layout/user/footer.php";

?>