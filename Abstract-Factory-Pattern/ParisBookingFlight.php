<?php

/**
 * Class of concrete BookingFlight service
 */
class ParisBookingFlight implements AbstractBookingFlight
{
	 public function getPriceFlight(): string
    {
        return 'The cost of the flight to Paris.<br/>';
    }
}
