<?php 
class SavingAccount extends BankAccount
{
private $interestRate;
public function setInterestRate($interestRate)
{
$this->interestRate = $interestRate;
}
public function addInterest()
{
// calculate interest
$interest = $this->interestRate * $this->getBalance();
// deposit interest to the balance
$this->deposit($interest);
}
}
?>