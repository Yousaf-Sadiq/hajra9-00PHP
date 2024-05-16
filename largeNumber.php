<?php
declare(strict_types=1);

function MaxValue(array $val)
{

    $array = $val;

    $selected_length = count($array);
    $large_val = "";

    for ($select = 0; $select < $selected_length; $select++) {
// 1
        $greater = true;

        for ($check = 0; $check < $selected_length; $check++) {
            
            if ($select != $check) {
                    //   1                  // 2
                if ($array[$select] < $array[$check]) {
                    $greater = false;
                    break;
                }
            }


        }


        if ($greater) {
            $large_val = $array[$select];
        }

    }


    return $large_val;

}



$t = [12, 321, 333, 1111222222222, 2333, 6666, 77777777];

echo MaxValue($t);


?>