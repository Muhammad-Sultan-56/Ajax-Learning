<?php

// ============intro of oop =======================//
// class first
// {
//     public $a, $b, $c;

//     function addition()
//     {
//         $this->c = $this->a + $this->b;
//         return $this->c;
//     }
// }
// $sum = new first();

// $sum->a = 30;
// $sum->b = 20;

// echo "The Sum of a and b is " . $sum->addition();


//================constructor===================//
// class learn
// {
//     public $name, $age;

//     function __construct($n, $a)
//     {
//         $this->name = $n;
//         $this->age = $a;
//     }

//     function intro()
//     {
//         echo "My name is " . $this->name . " and my age is " . $this->age;
//     }
// }

// $sayMe = new learn("sultan", 20);

// // $sayMe->name = "Sultan";
// // $sayMe->age = 23;

// $sayMe->intro();


//===================inheritance===============//


class employee
{
    public $name;
    public $age;
    public $salary;

    function __construct($n, $a, $s)
    {
        $this->name = $n;
        $this->age = $a;
        $this->salary = $s;
    }

    function profile()
    {
        echo "<h2>Employee Profile </h2>";
        echo "Employee Name : " . $this->name . "<br>";
        echo "Employee Age : " . $this->age . "<br>";
        echo "Employee Salary : " . $this->salary . "<br>";
    }
}


class manager extends employee
{
    public $ta = 5000;
    public $phone = 1500;
    public $totalSalry;
    function profile()
    {
        $this->totalSalry = $this->salary + $this->ta + $this->phone;

        echo "<h2>Manager Profile </h2>";
        echo "Manager Name : " . $this->name . "<br>";
        echo "Manager Age : " . $this->age . "<br>";
        echo "Manager Salary : " . $this->totalSalry . "<br>";
    }
}

$p1 = new employee("Ali", 20, 12000);
$p2 = new manager("Saad", 30, 20000);

$p1->profile();
$p2->profile();
