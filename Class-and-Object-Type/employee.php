<?php
class Employee{
    // property declaration
    public $employee_name = "";
    public $employee_dob = "";
    public $employee_gender = "";
    public $employee_designation = "";
    public $employee_salary = 0;
}
// declare array
$employees = [];

$employee = new  Employee();
$employee->employee_name = "Moniruzzaman";
$employee->employee_dob = "10/09/1994";
$employee->employee_gender = "Male";
$employee->employee_designation = "N/A";
$employee->employee_salary = 0;

// adding to array;
$employees[] = $employee;

$employee = new  Employee();
$employee->employee_name = "Milon";
$employee->employee_dob = "10/09/1994";
$employee->employee_gender = "Male";
$employee->employee_designation = "N/A";
$employee->employee_salary = 0;

// adding to array
$employees[] = $employee;
foreach ($employees as $employee){
    echo "==== Employee Information ==== \n";
    echo "Name: " .$employee->employee_name ."\n";
    echo "DoB: " .$employee->employee_dob ."\n";
    echo "Gender: " .$employee->employee_gender ."\n";
    echo "Designation: " .$employee->employee_designation ."\n";
    echo "Salary: " .$employee->employee_salary ."\n";
}