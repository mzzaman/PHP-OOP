<?php
class Role{
    const DEFAULT_ROLE = "Admin";
    public function showRole(){
        echo "Default Role is: " .self::DEFAULT_ROLE ."\n";
    }
}
// Declare Object
$admin = new Role();
// access class method;
echo $admin->showRole();
// Access Constant Property Outside the Class;
echo Role::DEFAULT_ROLE;