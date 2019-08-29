<?php

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
