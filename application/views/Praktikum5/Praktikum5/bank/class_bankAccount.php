<?php
require_once 'class_account.php';

class BankAccount extends Account{
    public $costumer;

    function __construct($no, $saldo_awal, $cust)
    {
        parent::__construct($no, $saldo_awal);
        $this->costumer = $cust;
    }
 
    function cetak()
    {
        parent::cetak();
        echo ', Costumer : ' . $this->costumer . '<br><br>';
    }

    function transfer($obj_account, $uang)
    {
        $obj_account->deposit($uang);
        $this->withdraw($uang);
    }
}

// $awal = new Account()
$bank1 = new BankAccount('C001', 6000000, 'Firdaus');
$bank2 = new BankAccount('C002', 5350000, 'Fadly');
$bank3 = new BankAccount('C003',2500000, 'Faris');
$transaksi1 = [$bank1, $bank2, $bank3];

$bank1->deposit(1000000);
$bank1->transfer($bank2, 500000);
$bank1->transfer($bank3, 1500000);
// $bank1->cetak();
$bank1->withdraw(2500000);

$transaksi2 = [$bank1, $bank2, $bank3];

?>