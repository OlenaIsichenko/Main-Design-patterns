<?php

/**
 * Class of concrete factory
 */
class RomeFactory implements AbstractBookingFactory   
{
	public function bookingFlight(): AbstractBookingFlight
	{
		return new RomeBookingFlight;
	}

	public function bookingHotel(): AbstractBookingHotel
	{
		return new RomeBookingHotel;
	}

	public function hireCar(): AbstractHireCar
	{
		return new RomeHireCar;
	}
}
