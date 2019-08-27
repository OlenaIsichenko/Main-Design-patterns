<?php

/**
 * Interface of Abstaract Factory
 */
interface AbstractBookingFactory
{
    public function bookingFlight(): AbstractBookingFlight;
    public function bookingHotel(): AbstractBookingHotel;
    public function hireCar(): AbstractHireCar;
}

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

/**
 * Class of concrete factory
 */
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

/**
 * Interface of BookingFlight service
 */
interface AbstractBookingFlight
{
    public function getPriceFlight(): string; 
}

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

/**
 * Interface of BookingHotel service
 */
interface AbstractBookingHotel
{
    public function getPriceHotel(): string;
}

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

/**
 * Interface of HireCar service
 */
interface AbstractHireCar
{
    public function getPriceCar(): string; 
}

/**
 * Class of concrete HireCar service
 */
class RomeHireCar implements AbstractHireCar
{
    public function getPriceCar(): string
    {
        return 'The car hire cost in Rome.<br/>';
    }
}

/**
 * Class of concrete HireCar service
 */
class ParisHireCar implements AbstractHireCar
{
    public function getPriceCar(): string
    {
        return 'The car hire cost in Paris.<br/>';
    }
}

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
