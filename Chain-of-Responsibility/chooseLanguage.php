<?php

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
