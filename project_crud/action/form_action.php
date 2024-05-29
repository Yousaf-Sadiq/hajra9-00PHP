<?php
require_once dirname(__DIR__) . "/layout/user/header.php";

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

if (isset($_POST["uploadFile"]) && !empty($_POST["uploadFile"])) {

    $extention = ["jpg", "png", "jpeg"];


    //                   input     ext         where to upload 
    $file = File_upload("profile", $extention, "/assets/images/");





    if ($file == 1) {
        $string = strtoupper(implode(" , ", $extention));

        echo "{$string}  ONLY ALLOWED";
    } else {

        $encode = json_encode($file);

        // json_decode($encode,true);

        // foreign keys
        /**
         * one to one 
         * one to many 
         * many to many 
         */
    }

    if ($file == false) {
        echo "UPLOADING ERROR";
    }


    // relative path C:/xampp/htdoc/900_HAjra_php/project_crud/action/form_action.php
// absolute path http://localhost/900_HAjra_php/project_crud/action/form_action.php





}


// case 1

/**
 *  file upload but data remain same 
 * 
 *  sub-case 1 
 * 
 *    if we have old file or not  then we should have to delete that prv file 
 * the upload new file 
 * 
 * 
 * 
 */


//  case 2

/**
 * file is not uploading but data changed  
 * 
 */


//  case 3

/**
 * file and data both are changed
 * sub-case 3 
 * 
 *    if we have old file or not  then we should have to delete that prv file 
 * the upload new file 
 */


// http://localhost/900_HAjra_php/project_crud/update.php?token=Mw==

if (isset($_POST["update"]) && !empty($_POST["update"])) {

    $email = Filter_data($_POST["Email"]);
    $password = Filter_data($_POST["pswd"]);
    $user_name = Filter_data($_POST["user_name"]);

    $inputFile = "profile";

    $file = $_FILES[$inputFile];



    $extention = ["jpg", "png", "jpeg"];


    $user_id = Filter_data(base64_decode($_POST["_token"]));


    $status = [
        "error" => 0,
        "msg" => []
    ];


    // $abc = $status;

    // $abc["error"];
    // ========================================================================

    if (isset($file["name"]) && !empty($file["name"])) {



        // ===================if old file exist then =================================
        $checkAddress = "SELECT * FROM `user_address` WHERE `user_id`='{$user_id}'";

        $check_exe = $conn->query($checkAddress);


        if ($check_exe->num_rows > 0) {

            $address_fetch = $check_exe->fetch_assoc();

            if (isset($address_fetch["image"])) {

                $oldImage = json_decode($address_fetch["image"], true); // json to array

                if (isset($oldImage["relative_path"])) {

                    $relative = $oldImage["relative_path"];

                    if (file_exists($relative)) {

                        unlink($relative);
                    }
                }

            }

        }
        // ====================================

        // new file upload ------------------------------------------------------------------------

        $files = File_upload($inputFile, $extention, "/assets/images/");

        // =============-------file error checking----------------------------------------------------------
        if ($files == 1) {
            $status["error"]++;
            $string = strtoupper(implode(" , ", $extention));

            array_push($status["msg"], "{$string} ONLY ALLOWED");
        }

        if ($files == false) {
            $status["error"]++;


            array_push($status["msg"], "UPLOADING ERROR");
        }
        // ============================----------------------------------------------------




    }
    // =======case 2 and case 3 ==============================================================================================
    // if file is not uploading then
    else {

        $checkAddress = "SELECT * FROM `user_address` WHERE `user_id`='{$user_id}'";

        $check_exe = $conn->query($checkAddress);

        if ($check_exe->num_rows > 0) {

            $exe_fetch = $check_exe->fetch_assoc();

            if (isset($exe_fetch["image"])) {

                $files = json_decode($exe_fetch["image"], true); // json to array
            } else {
                $files = null;
            }
        }
        // if recored in address table is not exist then 
        else {
            $files = null;
        }

    }








    // ========================================================================
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

    $sql_check = "SELECT * FROM `users` WHERE `email`='{$email}' AND `user_id`<>'{$user_id}' ";

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

    }
    // -=========================DATA INSERTION AND UPDATION===========================
    // ==after checking all errors===================================================
    else {

        //  array image or null
        if (is_array($files)) {
            $files = json_encode($files); // array to json
        }
        //  goal image store as a json




        $checkAddress = "SELECT * FROM `user_address` WHERE `user_id`='{$user_id}'";

        $check_exe = $conn->query($checkAddress);


        if ($check_exe->num_rows > 0) {
            // update query 
            $updateAddress = "UPDATE `user_address` SET
             
             `image`='{$files}'
             
              WHERE `user_id`='{$user_id}'";


            $exe = $conn->query($updateAddress);
        } else {

            //   insert 
            $insertAddress = "INSERT INTO `user_address`( `image`, `user_id`) 
            VALUES ('{$files}','{$user_id}')";

            $exe = $conn->query($insertAddress);
        }







        $hash = password_hash($password, PASSWORD_BCRYPT);

        $encrypt = base64_encode($password);

        $update = "UPDATE `users` SET 
        `user_name`='{$user_name}',
        `email`='{$email}',
        `password`='{$hash}',
        `ptoken`='{$encrypt}'
        WHERE `user_id`='{$user_id}' ";

        $exe = $conn->query($update);


        if ($exe) {

            if ($conn->affected_rows > 0) {

                SUCCESS_MSG("DATA HAS BEEN UPDATED");
            } else {

                ERROR_MSG("DATA HAS NOT BEEN UPDATED  {$update}");
            }
        } else {
            ERROR_MSG("ERROR IN EXECUTION  {$update}");

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