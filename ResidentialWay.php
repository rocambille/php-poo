<?php

require_once "./HighWay.php";

final class ResidentialWay extends HighWay
{
    public function __construct()
    {
        parent::__construct(2, 50);
    }

    public function addVehicle(Vehicle $vehicle): void
    {
        $this->setCurrentVehicles(
            [...$this->getCurrentVehicles(), $vehicle]
        );
    }
}
