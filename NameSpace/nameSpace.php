<?php
require_once "customer.php";


$customer = new Customer\Customer("Hello World");
echo $customer->getName();
