<?php
declare(strict_types=1);
$multiArr = [
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

// pre($multiArr);
$p=[1,34,54,432,4,32,432];


// Find the largest number in an array by using a loop. select and checking 2d 
//
//  Write a function that checks if a word is a palindrome (reads the same forwards and
// backward).
//  Write a function to calculate the factorial of a given number.
//  Write a function that determines whether a given number is prime or not.
//  Print numbers from 1 to 100, but for multiples of 3 print "Fizz", for multiples of 5, print
// "Buzz" and for numbers that are multiples of both 3 and 5 print "FizzBuzz".

// madam



function pre(array $y)
{
    echo "<pre>";
    print_r($y);
    echo "</pre>";
}



function same_value($multiArr, $index)
{
    $row_index = $index; // 0
    $commonNumbers = [];
    $a = []; // per result 
    // Initialize with the first subarray
    $firstSubarray = $multiArr[$row_index];
    // pre($firstSubarray );
    // [
    //     [12, 32, 13, 34],
    //     [13, 12, 23, 41],
    //     [15, 23, 34, 45],
    // ]
    //                                 0     => [12, 32, 13, 34]

    //  1 x 2 x 3 x 4 x 5
    foreach ($firstSubarray as $subInnerkey => $innerArray) {

        //                        0        12  
        foreach ($innerArray as $key => $number) {
            $isCommon = false;
            // echo $number;


            // checking======================================
            for($i = 0; $i < count($multiArr); $i++) {

                $found = false;
                // pre($multiArr[$i]);
                foreach ($multiArr[$i] as $subCheckKey => $subInnerArray) {
                   
                    //    pre($subInnerArray);
                    //     0                1
                    // echo $subInnerkey ."__".$subCheckKey."<br>";
                    if ($subInnerkey != $subCheckKey) {
                        // echo $number. "<br>";

                        if (in_array($number, $subInnerArray)) {
                            $found = true;
                           
                            $a = [
                                $number => $subInnerArray
                            ];

                            array_push($commonNumbers, $a);

                            break;

                        }


                    }




                }



            }




        }
    }


    // if ( $row_index < (count($multiArr)-1) ) {
    //     $row_index++;
    //     findSameNumbers($multiArr,$row_index);
    // }

    return $commonNumbers;

}



$result = same_value($multiArr, 1);
pre($result);


?>