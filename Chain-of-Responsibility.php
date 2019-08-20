<?php

abstract class cashDispenser {

    public function step();
    public function nextStep();    
}

class chooseLanguage extends cashDispenser {

    private $step = [
        ['language' => 'english'],
        ['language' => 'russian'],
        ['language' => 'ukrainian']
    ];
    private $nextStep;
    
    function step() {
        return this->step;
    }

    function nextStep() {
        if(NULL != $this->step) {
            return this->nextStep;
        } else {
            return 'Please choose language';       
        }
    }
}

class chooseCacheOrRest extends cashDispenser {

    private $step = ['cache', 'rest'];
    private $nextStep;
    
    function step() {
        return this->step;
    }

    function nextStep() {
        if(NULL != $this->step) {
            return this->nextStep;
        } else {
            return 'Please choose cache or rest of money';  
        }
    }
}

class chooseAmountOfMoney extends cashDispenser {

    private $step = ['propose', 'choose_yourself'];
    private $nextStep;
    
    function step() {
        return this->step;
    }

    function nextStep() {
        if(NULL != $this->step) {
            return this->nextStep;
        } else {
            return 'Please choose proposed cache or choose yourself';  
        }
    }
}

class choosePrintCheck extends cashDispenser {

    private $step = ['print check', 'do not print check'];
    private $nextStep;
    
    function step() {
        return this->step;
    }

    function nextStep() {
        if(NULL != $this->step) {
            return this->nextStep;
        } else {
            return 'Please choose to print the check or not';
        }
    }
}

class createChoice extends cashDispenser {

    private $step = ['continue work', 'log out'];
    private $nextStep;
    
    function step() {
        return this->step;
    }

    function nextStep() {
        if(NULL != $this->step) {
            return this->nextStep;
        } else {
            return 'Please choose the step';   
        }
    }
}
