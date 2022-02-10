<?php

require_once "./Vehicle.php";
require_once "./RechargeableInterface.php";

class Truck extends Vehicle implements RechargeableInterface
{
    private int $loadCapacity;
    private int $load = 0;

    public function __construct(string $color, int $nbSeats, $loadCapacity)
    {
        parent::__construct($color, $nbSeats);

        $this->loadCapacity = $loadCapacity;
    }

    public function charge(int $percentage): int
    {
        return 0;
    }

    public function unLoad(int $percentage): int
    {
        return 0;
    }

    /**
     * Get the value of loadCapacity
     *
     * @return int
     */
    public function getLoadCapacity(): int
    {
        return $this->loadCapacity;
    }

    /**
     * Set the value of loadCapacity
     *
     * @param int $loadCapacity
     *
     * @return self
     */
    public function setLoadCapacity(int $loadCapacity): self
    {
        $this->loadCapacity = $loadCapacity;

        return $this;
    }

    /**
     * Get the value of load
     *
     * @return int
     */
    public function getLoad(): int
    {
        return $this->load;
    }

    /**
     * Set the value of load
     *
     * @param int $load
     *
     * @return self
     */
    public function setLoad(int $load): self
    {
        $this->load = $load;

        return $this;
    }

    public function getLoadState(): string
    {
        if ($this->load < $this->loadCapacity) {
            return "in_filling";
        } else {
            return "full";
        }
    }
}
