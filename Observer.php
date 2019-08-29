<?php

interface Observer 
{
    public function subscribe(Subject $subscriber);
    public function unsubscribe(Subject $subscriber);
}

class Subscription implements Observer  
{
    private $subscribers;
		
    public function __construct() 
    {
        $this->subscribers = [];
    }

    public function subscribe(Subject $subscriber) 
    {
	array_push($this->subscribers, $subscriber);
	print_r("You are subscribed :) </br>");
    }

    public function unsubscribe(Subject $subscriber) 
    {
	array_pop($this->subscribers);
	print_r("You are unsubscribed :( </br>" );
    }

    public function notify()  
    {
	foreach ($this->subscribers as $subscriber) {
            $subscriber->update();
	    print_r("We have just notified the subscriber. </br>");
        }
    }
}

interface Subject
{
    public function update();
}

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

$Subscription = new Subscription();
$SubscriberA =  new ConcreteSubscriberA(rand(0, 5));
$SubscriberB =  new ConcreteSubscriberB(rand(5, 15));

$Subscription->subscribe($SubscriberA);
$Subscription->subscribe($SubscriberA);
$Subscription->subscribe($SubscriberB);
$Subscription->subscribe($SubscriberA);
$Subscription->subscribe($SubscriberB);
$Subscription->subscribe($SubscriberA);

$Subscription->unsubscribe($SubscriberA);
$Subscription->unsubscribe($SubscriberB);

$Subscription->notify();
