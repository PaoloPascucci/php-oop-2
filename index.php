<?php


class OLShop{
    public $product;
    public $price;
    public $category;
}


class User {
    public $userName;
    public $age;
    private $nameCard;
    private $number;
 function  __construct($userName, $age){

            $this->userName = $userName;
        $this->age = $age;

 }
    public function setPassword(int $number){
        $this->number = hash('md5',$number);
    }
        public function setCreditCard(string $nameCard){
        $this->nameCard = $nameCard;
    }
}

class PremUser extends User{
    protected $discount;
    protected $Acc_Points;

 function  __construct($userName, $password, $age, $nameCard, $number, int $discount, int $Acc_Points) 
    {
        parent::__construct($userName, $password, $age, $nameCard, $number);
        $this->discount = $discount;
        $this->Acc_Points = $Acc_Points;
    }
}

$user_1 = new User('Paolo', 22);

$user_1 ->setCreditCard(4256321789998855);
$user_1->setPassword('Lallerolalala');
var_dump($user_1);