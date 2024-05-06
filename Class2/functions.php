<?php 
declare(strict_types=1);
?>
<!doctype html>
<html lang="en">
    <head>
        <title>Php Functions </title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <style>
            *{
                overflow-x: hidden;
            }
        </style>
    </head>

    <body>

    <!-- 1. Find the area of a rectangle where the length is 5 and the width is 8. -->
        <?php
            function area_of_rectangle(int $length ,int $width): int
            {
                    $area = $length * $width;
                    return  $area ;          
            }

            $len = 6;
            $width = 5;
?>

           <div class='row'> 
            <div class='d-flex justify-content-center align-items-center flex-column mt-4 col-6'> 
            <p class=' badge text-bg-warning fs-4 ' style='width: 26rem;'> Area of Rectangle </p>
            <p>  The length of rectangle is <?php echo $len ?> and width is  <?php echo $width ?>  : </p>
           <?php   area_of_rectangle($len, $width) ?> </div> 

<?php
        // 2. Find the area of a triangle where the base is 4 and the height is 3.
        function area_of_triangle(int|float $base , int|float $height): int|float|string
        {
            $area = 1/ 2 * ($base * $height);

            return " 
            <div class='d-flex justify-content-center align-items-center flex-column mt-4 col-6'> 
            <p class=' badge text-bg-warning fs-4 ' style='width: 26rem;'> Area of Triangle </p>
            <p>  The length of rectangle is {$base} and width is {$height} : </p>
            ". $area . "</div> ";
        }
        $bas = 4;
        $heith = 3;
        echo area_of_triangle($bas, $heith);

        // 3. Find the area of a circle where the radius is 3.
        function area_of_circle(int|float $radius): int|float{
            $area = 3.14 * $radius * $radius ;
            return $area;
        }

        $radis = 5;
        $text = "<div class='row'> 
        <div class='d-flex justify-content-center align-items-center flex-column mt-4 col-12'> 
        <p class=' badge text-bg-warning fs-4 ' style='width: 26rem;'> Area of Circle </p>
        <p>  The raduis of circle is {$radis}  : </p>
        ". area_of_circle($radis) . "</div> ";

        echo $text;

        // 4. Convert temperatures from Celsius to Fahrenheit and Fahrenheit to Celsius.
        function celsius_to_f(int|float $celsius)
        {
            $convert_temp = ($celsius * 1.8 ) +32  ;
            $htm_text = " 
            <div class='d-flex justify-content-center align-items-center flex-column mt-4 col-6'> 
            <p class=' badge text-bg-success fs-4 ' style='width: 26rem;'> Celsius to Fahrenheit </p>
            <p>  The Tempreture is {$celsius} Degree Celsius : </p>
            ";
            return $htm_text . $convert_temp . "</div> " ;
        }
        
        $Cel_degree = 20;
        echo celsius_to_f( $Cel_degree);

        // Fahrenheit to Celsius
        function Fahrenheit_to_C(int $fahrenheit)
        {
            $convert_temp = ($fahrenheit - 32 ) * (5/9)  ;
            $htm_text = " 
            <div class='d-flex justify-content-center align-items-center flex-column mt-4 col-6'> 
            <p class=' badge text-bg-success fs-4 ' style='width: 26rem;'> Celsius to Fahrenheit </p>
            <p>  The Tempreture is {$fahrenheit} Degree Fahrenheit : </p>
            ";
            return $htm_text . $convert_temp . "</div> " ;
        }
        $Fahren_degree = 90;
        echo Fahrenheit_to_C($Fahren_degree);

        /* 5. Check two given numbers and return true if one of the numbers
        is 50 or if their sum is 50. */

        function sum_of_num_50(int $x, int $y ): int|string
        {
            $num1 = $x;
            $num2 = $y;

            $result = $num1 + $num2;

            if(($num1 == 50) || ($num2 == 50)){ 
            return "One of num is 50 " ;
            }
            else if($result == 50){
                return "Yes The sum of number is 50 " ;
            }
            else {
                return "invalid condition ";
            }
        }
        echo  "<div class='d-flex justify-content-center align-items-center flex-column mt-4 col-12'> 
        <p class=' badge text-bg-danger fs-4 ' style='width: 26rem;'> Number = 50 or sum == 50 </p>
        <p>  Sum of Number or One Number is equal to 50 : </p>
        ";
        echo sum_of_num_50(50, 30);
        echo "</div>";


        // 6. Check from the given integer, whether it is positive or negative.
        function Int_Number(int $number) : int|string
        {
            $numb = $number;

            $text = "<div class='d-flex justify-content-center align-items-center flex-column mt-4 col-6'> 
            <p class=' badge text-bg-danger fs-4 ' style='width: 26rem;'> Positive or Negative Number </p>
            <p>  Given Number is {$numb} : </p>
            ";
            if($numb > 0){
                return "{$text}  a Positive NUmber </div>";
            }
            else{
                return "{$text} a Negative Number </div>";
            }

        }
        $num = -50;
        echo Int_Number($num);

        // 7. Check whether a given positive number is even or odd.
        function even_odd(int $number): int|string
        {
            $num = $number;
            if($num % 2 == 0){
                return "Even Number";
            }
            else{
                return "Odd Number ";
            }
        }
        $numb = 50;
        $container = "<div class='d-flex justify-content-center align-items-center flex-column mt-4 col-6'> 
            <p class=' badge text-bg-danger fs-4 ' style='width: 26rem;'> Even And Odd Number </p>
            <p>  Given Number is {$numb} : </p>
            ";

        echo $container . even_odd($numb) ."</div>" ;


        // 8. Check whether a given positive number is a multiple of 3.
        function multiple_of_three(int $number) : string
        {
            $num1 = $number;

            if($num1 < 0){
                $num1 = $num1 * (-1);
                // if($new_num % 3 == 0){
                //     return "positive number is a multiple of 3";
                // }
                // else{
                //     return "it's not multiple of 3";
                // }
            }

            if($num1 % 3 == 0){
                return " number is a multiple of 3 ";
            }
            else{
                return "it's not multiple of 3";
            }
        }
        $No = -93;
        $container = "<div class='d-flex justify-content-center align-items-center flex-column mt-4 col-6'> 
            <p class=' badge text-bg-danger fs-4 ' style='width: 26rem;'> Multiple of 3 </p>
            <p>  Given Number is {$No} : </p>
            ";

        echo $container . multiple_of_three($No) ."</div>" ;

        // 9. Determine whether a given year is a leap year. 

        function leap_year(int $year)
        {
            $given_year = $year;
            if(($year % 4 == 0) || (($year % 100 == 0) && ($year % 400 == 0)) ){
                return $given_year . " is a Leap Year";
            }
            else{
                return "Not a leap Year ";
            }
        }

        $year = 2024;
        $container = "<div class='d-flex justify-content-center align-items-center flex-column mt-4 col-6'> 
            <p class=' badge text-bg-danger fs-4 ' style='width: 26rem;'> Leap Year </p>
            <p>  Given Year is {$year} : </p>
            ";

        echo $container . leap_year($year) ."</div>" ;

        // =================================
        

       

        echo "</div> ";

        echo "<div class='d-flex justify-content-center align-items-center flex-column mt-4 col-12'>
        <p class=' badge text-bg-danger fs-4 ' style='width: 26rem;'> Arrow Function </p>
        ";

        $y = 2;

        $fn1 = fn($x) => $x + $y;


        echo $fn1(20);

        echo "<br>";

        $num1 = 8;
        $fn2 = fn() =>  $num1;
        var_export($fn2());
        
        echo "<br>";

        // $num2 = 55;
        // $fn2 = fn($num) => fn($num1) => $num + $num1 + $num2;
        // var_export($fn2(11, 22));
        echo "</div>";

        ?>



        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous" ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"></script>
    </body>
</html>
