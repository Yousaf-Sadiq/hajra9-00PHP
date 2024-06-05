<?php

require_once dirname(__FILE__) . "/layout/user/header.php";
    
// crud  complete 
// login and signup

if (!isset($_SESSION["user_id"]) || empty($_SESSION["user_id"])) {
    redirect_url(LOGIN);
}

session_destroy();

SUCCESS_MSG("LOGOUT SUCCESSFULL");

refresh_url(2,LOGIN);

?>


<?php

require_once dirname(__FILE__) . "/layout/user/footer.php";


?>
