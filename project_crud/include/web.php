<!-- routes  -->

<?php 

// http://localhost/900_HAjra_%20php/project_crud/
define("SERVER","http://localhost");


define("SERVER2",$_SERVER["DOCUMENT_ROOT"]); //E:\xampp2\htdocs




define("FOLDER","/900_HAjra_php/project_crud");

// absolute path
define("domain1",SERVER.FOLDER);
//  relative path 
define("domain2",SERVER2.FOLDER);

define("Default_image",domain1."/assets/images/default.jpg");


define("DASHBOARD",domain1."/dashboard.php");

define("UPDATE_FORM",domain1."/update.php");


// dashboard file route 

define("INSERT_FORM",domain1."/action/form_action.php");
define("UPDATE_FORM_SUBMIT",domain1."/action/form_action.php");

define("DELETE_FORM",domain1."/action/form_action.php");

define("SIGNUP_SUBMIT",domain1."/action/auth/signup.php");
define("SIGNUP",domain1."/signup.php");

define("LOGIN",domain1."/login.php");
define("LOGIN_SUBMIT",domain1."/action/auth/login.php");
define("LOGOUT",domain1."/logout.php");
?>