<?php  
require_once dirname(__FILE__)."/app/database.php";

use App\database\DB as DB;

$obj = new DB;

$abc=[
    "email"=>"email@email.com",
    "password"=>"1234",
    "ptoken"=>"1234",
];
// ["email","pass","ptoken"]
echo $obj->insert("admin",$abc);
?>