<?php

require_once "./Vehicle.php";

class Car extends Vehicle
{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    private string $energy;
    private int $energyLevel = 0;
    private bool $hasParkBrake = false;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);

        $this->setEnergy($energy);
    }

    public function start(): void
    {
        if ($this->hasParkBrake) {
            throw new Exception("le frein à main était actif");
        }
    }

    /**
     * Get the value of energy
     *
     * @return string
     */
    public function getEnergy(): string
    {
        return $this->energy;
    }

    /**
     * Set the value of energy
     *
     * @param string $energy
     *
     * @return self
     */
    public function setEnergy(string $energy): self
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }

        return $this;
    }

    /**
     * Get the value of energyLevel
     *
     * @return int
     */
    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    /**
     * Set the value of energyLevel
     *
     * @param int $energyLevel
     *
     * @return self
     */
    public function setEnergyLevel(int $energyLevel): self
    {
        $this->energyLevel = $energyLevel;

        return $this;
    }

    public function setParkBrake(bool $hasParkBrake): self
    {
        $this->hasParkBrake = $hasParkBrake;

        return $this;
    }

    public function toggleParkBrake(): self
    {
        $this->hasParkBrake = !$this->hasParkBrake;

        return $this;
    }
}
