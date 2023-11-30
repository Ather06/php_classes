<?php
// solve the problem which a bank account transection (balance,deposit,withdraw)

class BankAccount{
    // declare properties or access modifiers
    public $accountNumber;
    public $name;
    public $mainBalance;

    //apply methods
    function __construct($accountNumber, $name, $mainBalance){
        $this -> accountNumber = $accountNumber;
        $this -> name = $name;
        $this -> mainBalance = $mainBalance;
    }
    function showBalance(){
        echo "{$this -> accountNumber} has total balance {$this -> mainBalance} and this account holder name is {$this -> name}";
    }
    
}

class Transaction extends BankAccount{  //inheritance class declare
    function deposit($deposit){
        $this -> mainBalance = $this -> mainBalance + $deposit;
    }
    function withdraw($withdraw){
        $this -> mainBalance = $this -> mainBalance - $withdraw;
    }
}
$account = new Transaction(205013252689, 'Ather Biswas', 5000); // set parameter
$account -> deposit(2000);
$account -> withdraw(1500);
$account -> showBalance(); // show balance





?>