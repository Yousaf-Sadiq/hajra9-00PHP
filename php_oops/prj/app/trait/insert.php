<?php
declare(strict_types=1);
// INSERT INTO `std_course`(`std_c_id`, `course_id`, `std_id`)
//  VALUES ('[value-1]','[value-2]','[value-3]')
trait Insert
{
    public function insert(string $table, array $data)
    {
        $status = [
            "error" => 0,
            "msg" => []
        ];

        if ($this->Check_table($table)) {


            $key = array_keys($data);
            $col = "`" . implode("` , `", $key) . "`";


            $val = array_values($data);
            $values = "'" . implode("' , '", $val) . "'";


            $this->query = "INSERT INTO `{$table}`  ($col) VALUES ($values)";

            $this->exe = $this->conn->query($this->query);

            if ($this->exe) {
                if ($this->conn->affected_rows > 0) {
                    array_push($status["msg"], "DATA HAS BEEN INSERTED");
                } else {
                    $status["error"]++;
                    array_push($status["msg"], "DATA HAS NOT BEEN INSERTED {$this->query}");
                }
            }
            else{
                $status["error"]++;
                array_push($status["msg"], "ERROR IN QUERY  {$this->query}");

            }

        } else {
            $status["error"]++;
            array_push($status["msg"], "THIS {$table} TABLE IS NOT EXISTED IN OUR DATABASE");

        }



        return json_encode($status);
    }
}

?>