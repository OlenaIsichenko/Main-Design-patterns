<?php

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
