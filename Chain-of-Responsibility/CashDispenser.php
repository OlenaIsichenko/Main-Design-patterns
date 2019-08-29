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
