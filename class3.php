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

<body data-bs-theme="dark">


    <?php


    $a = [7, 3, 23, "hello world!", 34, 54,100]; // array length [1-6] range [0-5]
    
    //   var_dump($a[3]);
    


    ?>
    <h1>before push new element in array </h1>

    <?php
    pre($a);



    ?>

    <h1>after pushing new element </h1>
    <?php
    // array_push($a, 12);
    // array_unshift($a, 12);
    // array_splice($a, specific index, how many you want to delete , (optional) for entering new value);
//    array_splice($a,0,3);
$y= array_slice($a,0,3);
    // pre($a);
pre($y);

$range= (count($a) - 1 );
 echo $a[$range];
// Find the last element of an array 
// without giving a hard-coded index.
// 2. Check whether the first or the last index of an array has a specified value, let's say 5.
// 3. Make an array to store the names of students and check whether that array has your own
// name or not and also return the index of that value.
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