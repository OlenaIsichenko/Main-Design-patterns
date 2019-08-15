<?php

namespace DesignPatterns\AbstractFactory;

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
    public function getPriceFlight(): float 
}

/**
 * Class of concrete BookingFlight service
 */
class RomeBookingFlight implements AbstractBookingFlight
{
    public function getPriceFlight(): float
    {
        return "The cost of the flight to Rome.";
    }
}

class ParisBookingFlight implements AbstractBookingFlight
{
    public function getPriceFlight(): float
    {
        return "The cost of the flight to Paris.";
    }
}

/**
 * Interface of BookingHotel service
 */
interface AbstractBookingHotel
{
    public function getPriceHotel(): float 
}

/**
 * Class of concrete BookingHotel service
 */
class RomeBookingHotel implements AbstractBookingHotel
{
    public function getPriceHotel(): float
    {
        return "The hotel room price in Rome.";
    }
}

class ParisBookingHotel implements AbstractBookingHotel
{
    public function getPriceHotel(): float
    {
        return "The hotel room price in Paris.";
    }
}

/**
 * Interface of HireCar service
 */
interface AbstractHireCar
{
    public function getPriceCar(): float 
}

/**
 * Class of concrete HireCar service
 */
class RomeHireCar implements AbstractHireCar
{
    public function getPriceCar(): float
    {
        return "The car hire cost in Rome.";
    }
}

class ParisHireCar implements AbstractHireCar
{
    public function getPriceCar(): float
    {
        return "The car hire cost in Paris.";
    }
}

/**
 * Call Abstract Factory
 */
function client(AbstractBookingFactory $booking)
{
    $bookingFlight = $booking -> bookingFlight();
    $bookingHotel = $booking -> bookingHotel();
    $hireCar = $booking -> hireCar();

    echo $bookingHotel -> getPriceHotel()
}

client(new RomeFactory);
client(new ParisFactory);

?>
