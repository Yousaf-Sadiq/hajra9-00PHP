<!doctype html>
<html lang="en">
    <head>
        <title>Array Question in php </title>
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
    </head>

    <body>
        <?php 
        // Find the largest number in an array by using a loop. select and checking 2d 
        $arr = array(5,6);
        $size = count($arr);

        function MaxValue($arr , $size){
            $array = $arr;
            $n = $size;
            if($n <= 2 ){
                if( $array[0]> $array[1]){
                    echo $array[0];
                }
                else{
                    echo $array[1];
                }
            }

            if($n > 2){
                for($i = 0; $i < $n; $i++ ){
                    if($array[$i]> $array[$i+1]){
                        echo $array[$i];
                    }
                    else{
                        echo $array[$i+1];
                    }
                }
            }
        }

        MaxValue($array, $size);

        
        //  Write a function that checks if a word is a palindrome (reads the same forwards and
        // backward).

        function paladrom($word_check){
            $word = strtolower($word_check);
            $reverse_word = strrev($word);
            // echo $reverse_word;

            if($word == $reverse_word ){
                echo " Yes it is palandrom <br>";
            }
            else{
                echo "  not palandrom <br>";
            }

        }
        $word = "RepAPer";
        paladrom($word);


        //  Write a function to calculate the factorial of a given number.
        function factorial($num){
            $number = $num;
            $factorial = 1;
            if($number > 0){
                for($i = 1; $i <= $num ; $i++){
                    $factorial *= $i;
                }
                echo $factorial . "<br>";
            }
            else{
                echo "Invalid Number <br>";
            }
        }

        factorial(5);
        // echo factorial(5);

        //  Write a function that determines whether a given number is prime or not.
        $num = 20;
        function PrimeNo($number){
            $n = $number;
            $found = false;
            if($n < 0){
                $n = $n * (-1);
            }

            if($n == 1 || $n == 0){
                echo "Not Prime";
            }



            for($i = 2; $i <= $n; $i++){
                if($n % $i == 0){
                    $found = true;  
                }
            }


            if($found == true){
                echo "Not Prime <br>";
            }
            else{
                echo "Yes a Prime number <br>";
            }
        }

        PrimeNo($num);


        //  Print numbers from 1 to 100, but for multiples of 3 print "Fizz", for multiples of 5, print
        // "Buzz" and for numbers that are multiples of both 3 and 5 print "FizzBuzz".

        $num = 100;
        for($i = 0; $i <= $num; $i++){
            if(($i % 5 == 0) && ($i % 3 == 0)){
                echo "{$i} : Fizz Buzz <br>";
            }
            elseif($i % 5 == 0){
                echo "{$i} :  Buzz <br>";
            }
            elseif($i % 3 == 0){
                echo "{$i} : Fizzz <br>";
            }
            else{
                echo "{$i} ... <br>";
            }
        }

        // madam
        
        ?>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
