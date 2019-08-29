<?php

/**
 *  Concrete observers classes
 */
class ConcreteSubscriberB implements Subject
{
    private $product;
    
    public function __construct($product) 
    {
        $this->product = $product;
        print_r('Today we have ' . $product . ' item(s)' . '</br>');
    }
    
    public function update() 
    {
        if ($this->product >= 5) {
            print_r('Your productB is available now </br>');
        } 
    }
}
