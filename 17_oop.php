<?php
/*
Object Oriented Programming:

From PHP5 onwards we can write PHP in either a procedural or object oriented way.
OOP consists of classes that can hold 'properties' and 'methods'.
Objects can be created from classes.
*/

class User {
    // Properties are attributes that belonf to a class.

    /*
    Access Modifiers: public , private and protected
    public - can be accessed from anywhere.
    private - can be accessed from inside the class.
    protected - cna only be accessed from inside the class and be inheriting classes.
    */
    public $name;
    public $email;
    public $password;

    // A constructor is a method that runs when an object is created
    public function __construct($name, $email, $password) {
        $this->name = $name;
        $this->password = $password;
        $this->email = $email;
    }

    /*
    function set_name($name) {
        $this->name = $name;
    }

    function get_name() {
        return $this->name;
    }
    */
}

// Instantiate a user object
/*
$user1 = new User();

$user1->email = 'tarpan@email.com';
$user1->set_name('Tarpan');

var_dump($user1);


echo $user1->get_name();
*/

// Instantiate a another object
$user2 = new User('Ram', 'ram@email.com', 'pword1234');
var_dump($user2);

// Inheritance
class Employee extends User {
    public function __construct($name, $email, $password, $title) {
        parent::__construct($name, $email, $password);
        $this->title = $title;
    }
    public function get_title() {
        return $this->title;
    }
}

$employee1 = new Employee('Sara', 'sara@email.com', '234243', 'Manager');
echo $employee1->get_title();
?>