<?php
/**
 *
 * 
1. Find the area of a rectangle where the length is 5 and the width is 8.
2. Find the area of a triangle where the base is 4 and the height is 3.
3. Find the area of a circle where the radius is 3.
4. Convert temperatures from Celsius to Fahrenheit and Fahrenheit to Celsius.
 */


// abstract class process
// {

//     abstract public function calculate();
// }

abstract class process2
{

    // protected $abc;
    // public function abc()
    // {

    // }
    abstract public function calculate2();
}


// alternate of abstract 
interface process
{
    public function calculate();
    public function calculate2();
    public function calculate3();
}

interface T
{
    public function display();
}


class Area_of_rectangle implements process, T
{
    protected $length;
    protected $width;

    private $area;
    public function calculate()
    {
       
        $this->area = $this->length * $this->width;

        return $this->area;
    }

    public function calculate2()
    {
    }

    public function calculate3()
    {

    }


    public function display()
    {

    }
}


class Set_length_width extends Area_of_rectangle
{

    public function SetLength(float $l)
    {
        $this->length = $l;
    }

    public function SetWidth(float $w)
    {
        $this->width = $w;
    }




}

$obj = new Set_length_width;

$obj->SetLength(5);
$obj->SetWidth(8);
echo $obj->calculate();






?>