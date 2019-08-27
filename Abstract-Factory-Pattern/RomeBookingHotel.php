<?php

/**
 * Class of concrete BookingHotel service
 */
class RomeBookingHotel implements AbstractBookingHotel
{
	 public function getPriceHotel(): string
    {
        return 'The hotel room price in Rome.<br/>';
    }
}
