<?php

require_once dirname(__FILE__) . "/layout/user/header.php";
    
// crud  complete 
// login and signup

if (isset($_SESSION["user_id"]) && !empty($_SESSION["user_id"])) {
    redirect_url(DASHBOARD);
}

?>

<h1> LOGIN </h1>
<form class="p-5 m-5 " action="<?php echo LOGIN_SUBMIT ?>" style="background-color: black;" method="POST">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" name="Email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" name="pswd" class="form-control" id="exampleInputPassword1">
    </div>

    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <input type="submit" value="LOGIN" name="LOGIN" class="btn btn-primary">
</form>




<?php

require_once dirname(__FILE__) . "/layout/user/footer.php";


?>
