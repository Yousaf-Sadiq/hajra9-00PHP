<?php
declare(strict_types=1);
namespace App\database;

require_once dirname(__FILE__)."/trait/insert.php";
require_once dirname(__FILE__)."/trait/checkTable.php";
class DB
{
    private $host="localhost";
    private $username="root";
    private $pass="";
    private $db="std_management2";

    protected $conn;

    private $query;

    private $exe;

    private $result = [];


    public function __construct(){
        $this->conn= new \mysqli($this->host,$this->username,$this->pass,$this->db);
        
        if ($this->conn) {
            // echo "Established";
        }else{
            echo "Not Established {$this->conn->error}";
        }
    
    }




use \Insert,\CheckTable;

    public function __destruct(){
        $this->conn->close();
    }


}


?>