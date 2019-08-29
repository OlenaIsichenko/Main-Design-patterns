<?php

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
