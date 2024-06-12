<?php
declare(strict_types=1);
//  php oops
/**
 * 4 pillar of oops 

 * 1. encapsulation 
 * 2. inheritance
 * 3. polymorphism
 * 4. abstraction

 */
// with in class variable called properties
//  with in class function called methods
/**
 * Find the area of a rectangle where the length is 5 and the width is 8.
2. Find the area of a triangle where the base is 4 and the height is 3.
3. Find the area of a circle where the radius is 3.
4. Convert temperatures from Celsius to Fahrenheit and Fahrenheit to Celsius.
 */

// $insert="";

// if ($insert) {
    
// } else {
//     $insert = "insert quert ";

// }



class areaOfRectangle
{
    private $length;
    private $width;
    private $area;


  
    public function SetL_W(float|int $l = 0, float|int $w = 0)
    {
        $this->length = $l;
        $this->width = $w;
    }

    public function SetWidth(float|int $w = 0)
    {
        $this->width = $w;
    }
    public function SetLength(float|int $l = 0)
    {
        $this->length = $l;
    }


    public function Calculate()
    {
        $this->area = $this->length * $this->width;

        $abc = [
            $this->length,
            $this->width
        ];

        return $abc;
    }
}


class A
{

    // access modifier public protected private

    //    encapsulation 
// 1. variable must be private according to the scenario 
// 2. we use setter and getter function to use that variable

    private $name;

    public function abc()
    {
        return $this->name;
    }

    public function SetName(string $n)
    {
        $this->name = $n;
    }



}


$abc = new areaOfRectangle;

$abc->SetLength(5);
$abc->SetWidth(8);
$q = $abc->Calculate();
echo "AREA OF RECTANGLE: {$q[0]}";

// $obj = new A();

// $obj->SetName("new name");
// echo $obj->abc();

// echo $obj->abc;

// ==============================
// $obj2 = new A;
// echo $obj2->abc;







?>