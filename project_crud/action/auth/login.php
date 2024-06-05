<?php
require_once dirname(__DIR__) . "/../layout/user/header.php";

/**
 * crud 
 * 1. $_POST
 * 2. $_GET
 * 3. $_FILES
 * 4. $_SERVER
 * 5. $_REQUEST
 */
?>


<?php


if (isset($_POST["LOGIN"]) && !empty($_POST["LOGIN"])) {

    $email = Filter_data($_POST["Email"]);
    $password = Filter_data($_POST["pswd"]);


    $status = [
        "error" => 0,
        "msg" => []
    ];


    if (!isset($email) || empty($email)) {
        $status["error"]++;

        array_push($status["msg"], "EMAIL IS REQUIRED");

    } else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

            $status["error"]++;

            array_push($status["msg"], "EMAIL FORMAT INVALID");
        }
    }



    if (!isset($password) || empty($password)) {
        $status["error"]++;

        array_push($status["msg"], "PASSWORD IS REQUIRED");
    }




    

    if ($status["error"] > 0) {

        foreach ($status["msg"] as $value) {
            ERROR_MSG($value);
        }


        refresh_url(2, LOGIN);

    } else {


        $encrypt = base64_encode($password);
        // /==============check email==============

        $sql_check = "SELECT * FROM `users` WHERE `email`='{$email}' AND `ptoken`='{$encrypt}'";

        $check_email = $conn->query($sql_check);
        if ($check_email->num_rows > 0) {

            $fetch= $check_email->fetch_assoc();

            $_SESSION["Email"]= $fetch["email"];
            $_SESSION["user_id"]= $fetch["user_id"];


            SUCCESS_MSG("LOGIN SUCCESSFULL");

        } else {
            ERROR_MSG("YOU ARE NOT REGISTER IN OUT PORTAL");
        }




        refresh_url(2, DASHBOARD);





    }
}








?>



<?php
require_once dirname(__DIR__) . "/../layout/user/footer.php";

?>