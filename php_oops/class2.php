<?php
declare(strict_types=1);

// base class derived classs
/**
 * Association 
 * aggregration 
 * composition
 * 
 * property  ovveriding 
 * 
 * tringular error 
 * interface (multiple inheritace)
 * abstract class (single inheritance)
 * abstract can not make  any object 
 * 
 */

abstract class person
{

    abstract public function name();
    abstract public function age();
    abstract public function height();
}
abstract class vehical
{

    private $abc;

    public function abc()
    {
        return $this->abc;
    }

    abstract public function display();
    abstract public function ENGINE();
}


class bike extends vehical
{
    public function display()
    {

    }
    public function ENGINE()
    {
        // dlaskjdklsa
    }



}

class A extends vehical
{
    protected $name = "class A";
    protected $age;

    public function getName()
    {
        return $this->name;
    }

    public function display()
    {
        echo "any code";
    }
    public function ENGINE()
    {

    }

}

class B extends A
{


    protected $name = "class B";

    public function set_Name(string $a)
    {
        $this->name = $a;
    }

    public function get_name()
    {
        // association
        $abc = new A;
        $a = [
            $this->name,
            $abc->getName()
            // parent::getName()
        ];


        return $a;
    }


}



$obj = new B;


//  echo $obj->get_name();

// print_r($obj->get_name());


abstract class CALCULATE
{
    abstract public function calculate();
}

class areaOfRectangle extends CALCULATE
{

    protected $length;
    protected $width;

    private $area;
    public function calculate()
    {
        $this->area = $this->length * $this->width;

        return $this->area;
    }
}

class areaFormula extends areaOfRectangle
{

    public function Set_l_w($a, $b)
    {
        $this->length = $a;
        $this->width = $b;
    }
}



$obj = new areaFormula;

$obj->Set_l_w(5,8);
echo  $obj->calculate();
?>