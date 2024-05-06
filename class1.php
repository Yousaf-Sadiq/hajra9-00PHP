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

<body>
    <?php

    // programming phase 
    /**
     * functions 
     * loops 
     * arrays 
     * if statements 
     * mini project with crud 
     * PHP and MYSQL  
     */

    // oops PHP 
//laravel 
    
    $a = 5;

    /**
     * =  saving value in variable 
     * == comparing value of different  variables 
     * ===  comparing value and datatype of different variable
     */

    /**
     * strings
     * char
     * integer
     * float => long double 
     * arrays 
     * functions
     * object 
     * boolean
     */

    //   5 == '5'  => true
//   5 === '5'  => false 
/*
AND   &&
OR    ||
NOT   ! 
    F             T         => T    
!((5 > 10)  &&  (10 < 11))  

1. Find the area of a rectangle where the length is 5 and the width is 8.
2. Find the area of a triangle where the base is 4 and the height is 3.
3. Find the area of a circle where the radius is 3.
4. Convert temperatures from Celsius to Fahrenheit and Fahrenheit to Celsius.

5. Check two given numbers and return true if one of the numbers
 is 50 or if their sum is 50.

6. Check from the given integer, whether it is positive or negative.
7. Check whether a given positive number is even or odd.
8. Check whether a given positive number is a multiple of 3.
9. Determine whether a given year is a leap year.
*/


    $a = -9;

    if ($a % 2 == 0) {
        echo "EVEN";
    } else {
        echo "ODD";
    }

    // $x=10;
// $y=20;
    
    // $sum = $x + $y;
    
    // if (($x == 50) || ($y == 50) ) {
//     echo "either one of the variable is equal to 50";
// }
// else if ($sum == 50){
//     echo "Their sum is equal to 50";
// }
// else{
//   echo "invalid";  
// }
    

    $length = 5;
    $width = 8;
    $area = $length * $width;

    echo "<h1>AREA OF RECTANGLE IS : {$area}</h1>";

    $age = 19;


    // if($age >= 20 ){
    
    //     echo "greater then 20"; // echo print php output
// }
// else{
//     echo "less then 20 ";
// }
    
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