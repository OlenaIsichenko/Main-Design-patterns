<?php

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
