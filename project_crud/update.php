<?php

require_once dirname(__FILE__) . "/layout/user/header.php";




?>
<?php
// http://localhost/900_HAjra_php/project_crud/update.php?abc=3
if (isset($_GET["token"]) && !empty($_GET["token"])) {
    $userId = base64_decode($_GET["token"]);
} else {
    redirect_url(DASHBOARD);
}


$sql = "SELECT * FROM `users` WHERE `user_id`='{$userId}'";

$exe_fetch = $conn->query($sql);

if ($exe_fetch->num_rows > 0) {


    $update = $exe_fetch->fetch_assoc();

} else {
    redirect_url(DASHBOARD);
}




$query_address = "SELECT * FROM `user_address` WHERE  `user_id`='{$update["user_id"]}'";

$exe_address_fetch = $conn->query($query_address);


if ($exe_address_fetch->num_rows > 0) {
    # code...
    $address_row = $exe_address_fetch->fetch_assoc();
    //   echo  $cleanedJsonData = preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $address_row['image']);
    // $address_row["image"];
    // echo $address_row["image"];

    if (isset($address_row["image"])) {
        # code...
        $images = json_decode($address_row["image"], true);

    } else {
        $images = [
            "absolute_path" => Default_image
        ];
    }

} else {
    $images = [
        "absolute_path" => Default_image
    ];
}

?>



<h1>UPDATE FORM</h1>
<form class="p-5 m-5 " enctype="multipart/form-data" action="<?php echo UPDATE_FORM_SUBMIT ?>"
    style="background-color: black;" method="POST">

    <input type="hidden" name="_token" value="<?php echo base64_encode($userId) ?>">

    <div class="row">

        <div class="mb-3 col-6">
            <label for="" class="form-label">IMAGE</label>
            <input type="file" class="form-control" name="profile" id="" placeholder="" aria-describedby="fileHelpId" />
            <div id="fileHelpId" class="form-text">Help text</div>
        </div>

        <div class="col-6 d-flex flex-wrap justify-content-center">
            <img width="200" height="200" src="<?php echo $images["absolute_path"] ?>" alt="">

        </div>
    </div>



    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">USER NAME</label>
        <input type="text" value="<?php echo $update["user_name"] ?>" name="user_name" class="form-control"
            id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" value="<?php echo $update["email"] ?>" name="Email" class="form-control"
            id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" value="<?php echo base64_decode($update["ptoken"]) ?>" name="pswd" class="form-control"
            id="exampleInputPassword1">
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <input type="submit" value="UPDATE" name="update" class="btn btn-primary">
</form>





<?php

require_once dirname(__FILE__) . "/layout/user/footer.php";

?>