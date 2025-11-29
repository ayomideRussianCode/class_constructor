<?php

class User{
    //public:accessible from anywhere
    public $name = "John";

    //protected:accessible within the class and by inheriting classes
    protected $email ="John@gmail.com";

    //private:accessible only within the class
    private $password;

    public function displayEmail(){
        return $this->email;
    }

    public function displayPassword() {
        return $this->password = '123';
    }
}

$user = new User();

class AdminUser extends User {

    public function getEmailAgain(){
        return $this->email . "From AdminUser class";
    }

    public function getPasswordAgain(){
        return $this->password;
    }

}

$admin = new AdminUser();

echo $admin->getPasswordAgain();
// $user = new User();

// echo $user->displayPassword();


// $admin = new AdminUser();

// echo $admin->getEmailAgain();