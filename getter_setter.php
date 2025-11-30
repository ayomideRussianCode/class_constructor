<?php

class user {

    private $name;

    private $email;

    public function __construct($name,$email){
        $this->setEmail($email);

        // $this->name =$name;
        // $this->email =$email;
    }
 
    //Getter
    public function getEmail(){
        return $this->email;
    }

    //Setter
    public function setEmail($email) {
        if (filter_var($email,FILTER_VALIDATE_EMAIL)){

            $this->email= $email;
        } else {
            echo "Not a valid email";
        }
    }

    public function displayUserInfo(){
        return "User: ". $this->getEmail();
    }

}
$user = new User('Ayo', 'ayo@gmail.com');

// echo $user->getEmail();

$user->setEmail('ayo_updated@gmail.com');

echo $user->displayUserInfo();

echo "<br>";

$user->setEmail('ayo_updated_again@gmail.com');

echo $user->displayUserInfo();