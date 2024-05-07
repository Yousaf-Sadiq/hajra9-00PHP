<?php
declare(strict_types=1);
function pre(array $a)
{
    echo "<pre>";
    print_r($a);
    echo "</pre>";
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body data-bs-theme="dark" class="p-3">


    <?php


    $a = [7, 3, 23, "hello world!", 34, 54, 100]; // array length [1-6] range [0-5]
    

    /**
     *  multidimentional array 
     * rows and columns 
     * 
     */





    // loops
    
    /**

    *
    **
    ***
    ****
    *****
    ******

    ******
    *****
    ****
    ***
    **
    *

     */

    // pre($t);
    
    $t = [
        [1, 3, 4, 543, 654, 4353],
        ["hello world!", 32, 432, 5, 654, 765, 876, 86]
    ];

    $row_length = count($t);



    // outer loop s
    for ($row = 0; $row < $row_length; $row++) {

        $col_length = count($t[$row]);

        echo "Row number : (" . $row . ")&ensp; <br>";

        for ($col = 0; $col < $col_length; $col++) {
            // $t[0][3];
            ?>

            <span>  <?php echo $col ?> => <?php print ($t[$row][$col]); ?> &ensp;</span> <br>

            <?php
        }

        echo "<br>";


    }

    // Find the same numbers from the following multidimensional array
     $amultiArr = [
        [
            [12, 32, 13, 34],
            [13, 12, 23, 41],
            [15, 23, 34, 45],
        ],
        [
            [122, 32, 133, 314],
            [123, 132, 23, 141],
            [155, 23, 334, 465],
        ],
        [
            [12, 342, 135, 234],
            [713, 712, 423, 431],
            [15, 23, 34, 45],
        ],
        [
            [12, 372, 913, 334],
            [13, 162, 243, 341],
            [175, 423, 34, 435],
        ],
    ];

    // outer loop
    // for ($row = 6; $row >= 1; $row--) {
    
    //     // inner loop
    //     for ($col = 1; $col <= $row; $col++) {
    //         echo "*";
    //     }
    
    //     echo "<br>";
    
    // }
    



    ?>




    <?php
    // array_push($a, 12);
    // array_unshift($a, 12);
    // array_splice($a, specific index, how many you want to delete , (optional) for entering new value);
//    array_splice($a,0,3);
    $y = array_slice($a, 0, 3);
    // pre($a);
    // pre($y);
    
    $range = (count($a) - 1);
    // echo $a[$range];
    

    // Find the last element of an array 
// without giving a hard-coded index.
// 2. Check whether the first or the last index of an array has a specified value, 
// let's say 5.
// 3. Make an array to store the names of students and check whether that array has your own
// name or not and also return the index of that value.
// array_search() , array_key() 
// 4. Add the array element at the specified index.
// 5. Delete the array element from the specified index.
    
    ?>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>