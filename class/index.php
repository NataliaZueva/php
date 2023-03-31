<?php

interface Study
{
    public function study();
}


trait NameTrait
{
    protected $firstName;
    protected $lastName;

    public function setFirstName($name)
    {
        $this->firstName = $name;
    }

    public function setLastName($name)
    {
        $this->lastName = $name;
    }

    public function getFullName()
    {
        return $this->firstName . ' ' . $this->lastName;
    }
}

class Human
{
    protected $age;
    private $gender;

    use NameTrait;

    public function __construct($firstName, $lastName, $age, $gender)
    {
        $this->setFirstName($firstName);
        $this->setLastName($lastName);
        $this->age = $age;
        $this->gender = $gender;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function setGender($value)
    {
        $this->gender = $value;
    }

    public function sayHello()
    {
        if ($this->gender == 'Female' or $this->gender == 'female') {
            echo "Hi, I'm a girl " . $this->firstName . ' ' . $this->lastName . " and I'm " . $this->age . " years old.\n";
        } elseif ($this->gender == 'Male' or $this->gender == 'male') {
            echo "Hi, I'm a guy " . $this->firstName . ' ' . $this->lastName . " and I'm " . $this->age . " years old.\n";
        }
    }
}

class Student extends Human implements Study
{
    public $specialization;

    public function __construct($firstName, $lastName, $age, $gender, $specialization)
    {
        parent::__construct($firstName, $lastName, $age, $gender);
        $this->specialization = $specialization;
    }

    public function study()
    {
        echo $this->firstName . " is studying " . $this->specialization . ".\n";
    }
}


$student = new Student("John", "Lennon", 20, 'Male', "computer technoligies");
$student->sayHello(); // Hi, I'm a guy John Lennon and I'm 20 years old.
echo '<br>';
$student->study(); // John is studying computer technoligies.

echo '<br>';
$student2 = new Student("Sophia", "Adamson", 18, 'female', "design");
$student2->study(); // Sophia is studying design.
echo '<br>';
$student2->sayHello(); // Hi, I'm a girl Sophia Adamson and I'm 18 years old.
