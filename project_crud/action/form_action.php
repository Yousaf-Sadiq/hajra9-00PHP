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


if (isset($_POST["update"]) && !empty($_POST["update"])) {

    $email = Filter_data($_POST["Email"]);
    $password = Filter_data($_POST["pswd"]);
    $user_name = Filter_data($_POST["user_name"]);
    
    
    
    $user_id = Filter_data(base64_decode($_POST["_token"]));


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


    if (!isset($user_name) || empty($user_name)) {
        $status["error"]++;

        array_push($status["msg"], "USER NAME IS REQUIRED");
    }


    // /==============check email==============

    $sql_check = "SELECT * FROM `users` WHERE `email`='{$email}'";

    $check_email = $conn->query($sql_check);
    if ($check_email->num_rows > 0) {

        $status["error"]++;
        array_push($status["msg"], "EMAIL ALREADY EXIST");

    }

    // /==============check email==============

    if ($status["error"] > 0) {

        foreach ($status["msg"] as $value) {
            ERROR_MSG($value);
        }


        refresh_url(2, DASHBOARD);

    } else {

        $hash = password_hash($password, PASSWORD_BCRYPT);

        $encrypt = base64_encode($password);

        $insert = "INSERT INTO `users` ( `email`, `password`, `ptoken`)
          VALUES ('{$email}','{$hash}','{$encrypt}')";

        $exe = $conn->query($insert);


        if ($exe) {

            if ($conn->affected_rows > 0) {

                SUCCESS_MSG("DATA HAS BEEN INSERTED");
            } else {

                ERROR_MSG("DATA HAS NOT BEEN INSERTED  {$insert}");
            }
        } else {
            ERROR_MSG("ERROR IN EXECUTION  {$insert}");

        }


        refresh_url(2, DASHBOARD);





    }
}



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



    // /==============check email==============

    $sql_check = "SELECT * FROM `users` WHERE `email`='{$email}'";

    $check_email = $conn->query($sql_check);
    if ($check_email->num_rows > 0) {

        $status["error"]++;
        array_push($status["msg"], "EMAIL ALREADY EXIST");

    }

    // /==============check email==============

    if ($status["error"] > 0) {

        foreach ($status["msg"] as $value) {
            ERROR_MSG($value);
        }


        refresh_url(2, DASHBOARD);

    } else {

        $hash = password_hash($password, PASSWORD_BCRYPT);

        $encrypt = base64_encode($password);

        $insert = "INSERT INTO `users` ( `email`, `password`, `ptoken`)
          VALUES ('{$email}','{$hash}','{$encrypt}')";

        $exe = $conn->query($insert);


        if ($exe) {

            if ($conn->affected_rows > 0) {

                SUCCESS_MSG("DATA HAS BEEN INSERTED");
            } else {

                ERROR_MSG("DATA HAS NOT BEEN INSERTED  {$insert}");
            }
        } else {
            ERROR_MSG("ERROR IN EXECUTION  {$insert}");

        }


        refresh_url(2, DASHBOARD);





    }
}


?>



<?php
require_once dirname(__DIR__) . "/layout/user/footer.php";

?>