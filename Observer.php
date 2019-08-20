<?php

class Subscription implements \SplSubject {
    private $subscribers;
    private $product1;
    private $product2;

    public function __construct() {
        $this->subscribers = new \SplObjectStorage;
    }

    public function subscribe(\SplObserver $subscriber) {
	$this->subscribers->subscribe($subscriber);
	echo "You are subscribed for this product :)";
    }

    public function unsubscribe(\SplObserver $subscriber) {
	$this->subscribers->unsubscribe($subscriber);
	echo "You are unsubscribed for this product :(";
    }

    public function notify() {
        foreach ($this->subscribers as $subscriber) {
	    $subscriber->update($this);
	}
	    echo "We have just notified the subscribers";
    }

    public function mainLogic() {
	$this->product1 = rand(0, 5);
	$this->product2 = rand(0, 10);

	$this->notify();
	echo "Today we have {$this->product1} of product1 and {$this->product2} of product2.";
    }
}

/**
*  Concrete observers classes
*/
class ConcreteSubscriberA implements \SplObserver {
    public function update(\SplSubject $subscription) {
	if ($subscription->product1 > 1) {
	    echo "Your {$subscription->product1} is available now";
	}
    }
}

class ConcreteSubscriberB implements \SplObserver {
    public function update(\SplSubject $subscription) {
	if ($subscription->product2 >= 5) {
	    echo "Your {$subscription->product2} is available now";
	}
    }
}
