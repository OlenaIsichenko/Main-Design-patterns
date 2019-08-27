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
