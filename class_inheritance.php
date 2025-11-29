<?php
class User{

    public $name;
    public $email;

    public function __construct($name, $email) 
    {
        $this->name = $name;
        $this->email = $email;
    }

    public function displayUserInfo(){
        return "User: {$this->name}, Email: {$this->email}";
    }
}

// $user = new User('Alice', 'alice@gmail.com');

class AdminUser extends User{
    public $role;

    public function __construct($name, $email,$role){
        parent:: __construct($name, $email);
        $this->role = $role;
    }

    public function displayAdminInfo(){
        return "Admin: {$this->name}, Email:{$this->email}, Role:{$this->role} ";
    }


}
$admin = new AdminUser('Admin', 'admin@gmail.com', 'SuperAdmin');

echo $admin->displayAdminInfo();

// echo $user->displayUserInfo();

