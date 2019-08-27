<?php

/**
 * Class of concrete BookingFlight service
 */
class RomeBookingFlight implements AbstractBookingFlight
{
	 public function getPriceFlight(): string
    {
        return 'The cost of the flight to Rome.<br/>';
    }
}
