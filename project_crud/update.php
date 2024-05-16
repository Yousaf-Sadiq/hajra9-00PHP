<?php

require_once dirname(__FILE__) . "/layout/user/header.php";




?>
<?php
// http://localhost/900_HAjra_php/project_crud/update.php?abc=3
if (isset($_GET["abc"]) && !empty($_GET["abc"])) {
    $userId = $_GET["abc"];
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

?>

<h1>UPDATE FORM</h1>
<form class="p-5 m-5 " action="<?php echo UPDATE_FORM_SUBMIT ?>" style="background-color: black;" method="POST">

    <input type="hidden" name="_token" value="<?php echo base64_encode($userId) ?>">

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