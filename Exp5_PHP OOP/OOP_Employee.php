<!--Code written by Abhijit Zende-->
<!--OOP and Advance OOP in PHP-->

<!--All the code must be written inside a function in PHP in order not to voilate OOP concepts-->
<!--As there is no main function(entry point) in php we have to instantiate EmployeeTest class outside of any class-->
<!--And then call the function inside of EmployeeTest class-->
<?php
/*
    Problem Statement:
    Create a class called Employee that includes three pieces of information as instance variables- first name,
    last name and a monthly salary. Your class should have a constructor that initializes the three instance 
    variables. Write a test application named EmployeeTest that demonstrates class Employee's capabilities. 
    Create two Employee objects and display each object's yearly salary. Then give each Employee a 10% raise and 
    display each Employee's yearly salary again.
*/

class Employee
{
    public $fname;
    public $lname;
    public $msalary;
    public $ysalary;
    
    function __construct(string $fname, string $lname,int $msalary)
    {
        $this->fname = $fname;
        $this->lname = $lname;
        $this->msalary = $msalary;
    }

    function getFName()
    {
        return $this->fname;
    }

    function getLName()
    {
        return $this->lname;
    }

    function getMSalary()
    {
        return $this->msalary;
    }
} 

$et = new EmployeeTest();
$et->pmain();

class EmployeeTest
{
    function pmain()
    {

        $emp1 = new Employee("Abhijit","Zende",10000);
        $emp2 = new Employee("Sahil","Patil",5000);

        echo "Yearly salary before raise: ";
        echo "<br>";
        print "".$emp1->getFName()." ".$emp1->getLName().": ".(12*($emp1->getMSalary()))."";
        echo "<br>";
        print "".$emp2->getFName()." ".$emp2->getLName().": ".(12*($emp2->getMSalary()))."";
        echo "<br>";
        echo "<br>";
        echo "Yearly salary after raise: ";
        echo "<br>";
        echo "".$emp1->getFName()." ".$emp1->getLName().": ".(12*($emp1->getMSalary())+(0.10*(12*($emp1->getMSalary()))))."";
        echo "<br>";
        echo "".$emp2->getFName()." ".$emp2->getLName().": ".(12*($emp2->getMSalary())+(0.10*(12*($emp2->getMSalary()))))."";

    }
    
}



?>