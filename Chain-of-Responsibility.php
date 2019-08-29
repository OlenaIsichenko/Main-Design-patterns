<?php

abstract class CashDispenser 
{
    protected $nextStep;

    abstract public function showMessage($msg);

    public function step($next)
    {
         $this->nextStep = $next;
    }
    public function nextStep()
    {
         return $this->nextStep;
    }    
}

class chooseLanguage extends cashDispenser 
{
    public function showMessage($msg)
    {
        if($msg == 'lang') {
            print_r('Please, choose the language. </br>');
        } else {
             if ($this->nextStep()) {
                $this->nextStep()->showMessage($msg);
             }
        }
    }
}

class chooseCacheOrRest extends cashDispenser 
{
     public function showMessage($msg)
    {
        if($msg == 'choice') {
            print_r('Please, choose cache or rest of money. </br>');
        } else {
             if ($this->nextStep()) {
                $this->nextStep()->showMessage($msg);
            }
        }
    }
}

class chooseAmountOfMoney extends cashDispenser 
{
    public function showMessage($msg)
    {
        if($msg == 'amount') {
			print_r('Please, choose proposed cache or choose yourself. </br>');
        } else {
             if ($this->nextStep()) {
                $this->nextStep()->showMessage($msg);
            }
        }
    }
}

class choosePrintCheck extends cashDispenser 
{
    public function showMessage($msg)
    {
        if($msg == 'check') {
            print_r('Please, choose to print the check or not. </br>');
        } else {
             if ($this->nextStep()) {
                $this->nextStep()->showMessage($msg);
            }
        }
    }
}

$cashDispenser = new chooseLanguage();
$cashDispenser->step(new chooseCacheOrRest());
$cashDispenser = new chooseAmountOfMoney();
$cashDispenser->step(new choosePrintCheck());

$cashDispenser->showMessage('lang');
$cashDispenser->showMessage('choice');
$cashDispenser->showMessage('amount');
$cashDispenser->showMessage('check');
