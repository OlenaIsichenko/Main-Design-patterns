<?php

/**
 *  Concrete observers classes
 */
class ConcreteSubscriberA implements Subject
{
    private $product;
	
    public function __construct($product) 
    {
        $this->product = $product;
        print_r('Today we have ' . $product . ' item(s)' . '</br>');
    }
	
    public function update() 
    {
	      if ($this->product > 1) {
	          print_r('Your productA is available now </br>');
        } 
    }
}
