<?php

class ParisFactory implements AbstractBookingFactory   
{
	public function bookingFlight(): AbstractBookingFlight
	{
		return new ParisBookingFlight;
	}

	public function bookingHotel(): AbstractBookingHotel
	{
		return new ParisBookingHotel;
	}

	public function hireCar(): AbstractHireCar
	{
		return new ParisHireCar;
	}
}
