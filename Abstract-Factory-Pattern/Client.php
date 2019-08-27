<?php

use Main-Design-patterns\Abstract-Factory-Pattern\RomeFactory;
use Main-Design-patterns\Abstract-Factory-Pattern\ParisFactory;
use Main-Design-patterns\Abstract-Factory-Pattern\RomeBookingFlight;
use Main-Design-patterns\Abstract-Factory-Pattern\ParisBookingFlight;
use Main-Design-patterns\Abstract-Factory-Pattern\RomeBookingHotel;
use Main-Design-patterns\Abstract-Factory-Pattern\ParisBookingHotel;
use Main-Design-patterns\Abstract-Factory-Pattern\RomeHireCar;
use Main-Design-patterns\Abstract-Factory-Pattern\ParisHireCar;

/**
 * Call Abstract Factory
 */
function client(AbstractBookingFactory $booking)
{
	$bookingFlight = $booking->bookingFlight();
	$bookingHotel = $booking->bookingHotel();
	$hireCar = $booking->hireCar();

	return $bookingFlight->getPriceFlight() . $bookingHotel->getPriceHotel() . $hireCar->getPriceCar();
}

$tour1 = client(new RomeFactory);
$tour2 = client(new ParisFactory);
print_r('tour1 = ' . $tour1);
print_r('tour2 = ' . $tour2);
