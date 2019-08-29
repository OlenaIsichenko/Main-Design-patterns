<?php

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
