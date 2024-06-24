<?php
namespace class4;

/** 
 * magic methods 
 * similar to polymorphism
 * trait => storage area for funciton 
 * namespace
 * constructor and desctructor
 * php oops with mysql (CRUD , login and signup with javascript )
 */

trait SUM
{

    public function Set_value($t, $q)
    {
        $this->a = $t;
        $this->b = $q;
    }

    public function calculate()
    {
        $result = $this->a + $this->b;

        return $result . "  SUM";
    }
}


trait SUBTRACT
{
    public function calculate()
    {
        $result = $this->a - $this->b;

        return $result . "  SUBTRACT";
    }
}


class ADD
{

    private $a = 45;
    private $b = 0;

    public function __destruct()
    {
        echo "destructor called";
    }

    // public function __construct()
    // {
    //     echo "constructor called";
    // }

    public function __construct()
    {
        echo "constructor called";
    }

    use SUM, SUBTRACT {
        SUM::calculate insteadof SUBTRACT;
        SUBTRACT::calculate as calculate2;
    }


}





?>