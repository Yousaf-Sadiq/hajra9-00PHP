<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
</head>
<title> BASICS QUESTIONS OF PHP </title>
</head>

<body>
  <?php
  // 1. Find the area of a rectangle where the length is 5 and the width is 8.
// Solution
  
  $length = 5;
  $width = 8;
  $areaOf_Rectangle = $length * $width;

  echo ' <div class="row ">
<div class="d-flex justify-content-center align-items-center flex-column mt-4 col-6 "> 
<p class=" badge text-bg-primary fs-4 " style="width: 26rem;"> AREA OF RECTANGLE </p>';
  echo '<i> The length is ' . $length . ' and width is ' . $width . ' </i> <br>
<p class=" "> The area of Rectangle is: <b> ' . $areaOf_Rectangle . ' </b> </p> </div> ';

  // 2. Find the area of a triangle where the base is 4 and the height is 3.
  $base = 4;
  $height = 3;
  $area_of_triangle = 1 / 2 * $base * $height;

  echo '
<div class="d-flex justify-content-center align-items-center flex-column mt-4 col-6"> 
<p class=" badge text-bg-primary fs-4 " style="width: 26rem;"> AREA OF TRIANGLE </p>';
  echo '<i> The base is ' . $base . ' and height is ' . $height . ' </i> <br>
<p class=" "> The area of Rectangle is: <b> ' . $area_of_triangle . ' </b> </p> </div> ';


  // 3. Find the area of a circle where the radius is 3.
  
  $radius = 3;
  $pie = 3.14;

  $area_of_circle = $pie * $radius * $radius;
  echo '
<div class="d-flex justify-content-center align-items-center flex-column mt-4 col-12"> 
<p class=" badge text-bg-primary fs-4 " style="width: 26rem;"> AREA OF CIRCLE </p>';
  echo '<i> The radius of circle is ' . $radius . ' </i> <br>
<p class=" "> The area of Rectangle is: <b> ' . $area_of_circle . ' </b> </p> </div> ';

  // 4. Convert temperatures from Celsius to Fahrenheit and Fahrenheit to Celsius.
  
  $celcius = 20;
  $Convert_to_Fahrenheit = ($celcius * 1.8) + 32;

  echo '
<div class="d-flex justify-content-center align-items-center flex-column mt-4 col-6"> 
<p class=" badge text-bg-success fs-4 " style="width: 26rem;"> Celsius to Fahrenheit </p>';
  echo '<i> The tempreture : ' . $celcius . ' Degree celcius </i> <br>
<p class=" "> temperatures from Celsius to Fahrenheit: <b> ' . $Convert_to_Fahrenheit . ' </b> </p> </div> ';
  // echo '</div>';
  
  $fahrenheit = 90;
  $Convert_to_Celsius = ($fahrenheit - 32) * (5 / 9);

  echo '
<div class="d-flex justify-content-center align-items-center flex-column mt-4 col-6"> 
<p class=" badge text-bg-success fs-4 " style="width: 26rem;"> Fahrenheit to Celsius </p>';
  echo '<i> The tempreture : ' . $fahrenheit . ' Degree Fahrenheit </i> <br>
<p class=" "> temperatures from  Fahrenheit to Celsius: <b> ' . $Convert_to_Celsius . ' </b> </p> </div> ';




  // 5. Check two given numbers and return true if one of the numbers
//  is 50 or if their sum is 50.
  
  $x = 20;
  $y = 50;
  $sum = $x + $y;
  echo '
<div class="d-flex justify-content-center align-items-center flex-column mt-4 col-12  "> 
<p class=" badge text-bg-warning fs-4 " style="width: 26rem;"> Conditional Questions </p>';
  if (($x == 50) || ($y == 50)) {
    echo "<i> Given Number is equal to 50  </i> <br>";
  } else if ($sum == 50) {
    echo "<i> Sum of Given Number is equal to 50  </i> <br>";
  } else {
    echo "<i> Invalid Conditions </i> <br> ";
  }
  echo '</div>';

  // 6. Check from the given integer, whether it is positive or negative.
  $num = 20;
  echo '
<div class="d-flex justify-content-center align-items-center flex-column mt-4 col-6"> 
<p class=" badge text-bg-warning fs-4 " style="width: 26rem;"> Positive & Negative </p>';
  if ($num > 0) {
    echo "<i> Given Integer is Positive </i> <br>";
  } else {
    echo "<i> Given Integer is Negative </i> <br>";
  }
  echo '</div>';

  // 7. Check whether a given positive number is even or odd.
  $number = -30;
  $numb = 0;
  echo '
<div class="d-flex justify-content-center align-items-center flex-column mt-4 col-6"> 
<p class=" badge text-bg-warning fs-4 " style="width: 26rem;"> Even  & Odd </p>';
  if ($number < 0) {
    $numb = $number * (-1);
  }


  if ($numb % 2 == 0) {
    echo "Number is Even ";
  } else {
    echo "Number is Odd";
  }
  echo '</div>';

  // 8. Check whether a given positive number is a multiple of 3.
  
  $numb = 0;
  echo '
    <div class="d-flex justify-content-center align-items-center flex-column mt-4 col-6"> 
    <p class=" badge text-bg-warning fs-4 " style="width: 26rem;"> Multiple of 3 </p>';
  if ($number < 0) {
    $numb = $number * (-1);
  }

  if ($numb % 3 == 0) {
    echo "Its Multiple of 3 ";
  } else {
    echo " condition false ";
  }
  echo '</div>';

  // 9. Determine whether a given year is a leap year. 
  $year = 2023;
  $output = "";
  $output .='
      <div class="d-flex justify-content-center align-items-center flex-column mt-4 col-6"> 
      <p class=" badge text-bg-warning fs-4 " style="width: 26rem;"> Leap Year'.$year.'</p>';
 
      if (($year % 4 == 0) || (($year % 100 == 0) && ($year % 400 == 0))) {
    $output .= "Yes This Is Leap Year";
  } else {
    $output .= "Not a Leap Year {$year}";
  }
  $output .= '</div>';


  $output .= '</div>';


  echo $output;
  ?>



  <!-- 


-->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

</body>

</html>