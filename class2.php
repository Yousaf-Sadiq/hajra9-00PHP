<?php
declare(strict_types=1);
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

<body>

    <?php

    // functions
    /**
     * default/normal function with no return 
     * default/normal function with  return 
     * 
     * parametrize/argument function with no return 
     * parametrize/argument function with  return 
     * 
     * 
     * arrow function with return
     * arrow function with no return
     *
     * anonymous function with return 
     * anonymous function with no return 
     * 
     */
    // declaration
// initialization 
// active / call / invoke 
// default/normal function with no return 
// * default/normal function with  return 
// function SUM()
//     {
//         $a = 5;
//         $b = 7;
//         $sum = $a + $b;
    
    //         return $sum;
//         // echo $sum;
//     }
    



    //    echo SUM();
    
    //  security 
    function SUM(int|float $a, int|float $b): int|float
    {
        $x = $a;
        $y = $b;


        $sum = $x + $y;

        // echo $sum;
    

        return $sum;

    }


function CheckEvenOdd(int|float $num){

        if ($num < 0) {
            $num = $num * -1;
        }


        if ($num % 2 == 0) {
            return "EVEN";
        }
        else{
            return "ODD";
        }
    }

?>

<h1> <?php echo  CheckEvenOdd(46); ?> </h1>

<?php 
    // echo SUM(5, 17.6);
// MONDAY TO THURSDAY 
// 9:00PM

    // echo $result;
    

    // fn ()=>"ACTIVE ANOMYMOUS FUNCTION";
    
    $abc = (function ($a, $b) {
        $x = $a;
        $y = $b;


        $sum = $x + $y;

        // echo $sum;
    

        echo $sum;

    });

    // $abc(12, 56);

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