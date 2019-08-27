<?php

/**
 * Class of concrete BookingHotel service
 */
class ParisBookingHotel implements AbstractBookingHotel
{
	 public function getPriceHotel(): string
    {
        return 'The hotel room price in Paris.<br/>';
    }
}
