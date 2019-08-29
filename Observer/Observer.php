<?php
interface Observer 
{
    public function subscribe(Subject $subscriber);
    public function unsubscribe(Subject $subscriber);
}
