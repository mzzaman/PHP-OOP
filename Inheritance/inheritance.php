<?php
//class Product{
//    protected $id;
//    protected $title;
//    protected $price;
//
//    public function __construct($id, $title, $price)
//    {
//        $this->id = $id;
//        $this->title = $title;
//        $this->price = $price;
//    }
//    public function setProduct($id, $title, $price){
//        $this->id = $id;
//        $this->title = $title;
//        $this->price = $price;
//    }
//    public function showInfo(){
//        echo "\n ---- Product Info ---- \n";
//        echo "Title: {$this->title} \n";
//        echo "Price: {$this->price} \n";
//    }
//}
//// inheritance
//class Book extends Product{
//
//}
//// inheritance;
//class CD extends Product{
//
//}
//
////$product = new Product(1, 'OOP PHP', 750.00);
////$product->showInfo();
////$product = new Product();
////$product->setProduct(2, "Basic PHP", 550.00);
////$product->showInfo();
//$book = new Book(1, "OOP PHP", 750.0);
//$book->showInfo();
//$cd = new CD(2, "Basic PHP", 900.00);
//$cd->showInfo();

class BankAccount{
    private $balance;
    public function getBalance(){
        return $this->balance;
    }
    public function deposit($amount){
        if ($amount > 0){
            $this->balance +=$amount;
        }
        return $this;
    }

}

class SavingAccount extends BankAccount{
    private $interestRate;
    public function setInterestRate($interestRate){
        $this->interestRate = $interestRate;
    }

    public function addInterest(){
        // calculate interest
        $interest = $this->interestRate * $this->getBalance();
        // deposit interest to the balance
        $this->deposit($interest);
    }

}

$account = new SavingAccount();
$account->deposit(100);
// set interest rate
$account->setInterestRate(0.05);
$account->addInterest();
echo $account->getBalance();