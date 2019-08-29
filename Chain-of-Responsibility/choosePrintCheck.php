<?php

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
