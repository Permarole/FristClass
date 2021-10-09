<?php

class Automobile
{

    private int $nbWheels = 4;

    private int $currentSpeed = 0;

    private string $color;

    private int $nbSeats;

    private string $energy;

    private int $currentEnergyLevel = 0;

    private bool $started = false;

    public function __construct(int $nbSeats, string $color, string $energy)
    {
        $this->nbSeats = $nbSeats;
        $this->color = $color;
        $this->energy = $energy;
    }

    public function forward(): string
    {
        if ($this->started) {
            $this->currentSpeed = 50;
            return "Go";
        }
        return "Start the car prior driving";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped";
        return $sentence;
    }

    public  function start(): string
    {
        if (!$this->started && $this->currentEnergyLevel > 0) {
            $this->started = true;
            return "Vroum !";
        } elseif ($this->currentEnergyLevel <= 0) {
            return "Fuel needed to start";
        }
        return "Already Vrouming !";
    }

    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function getEnergyLevel(): int
    {
        return $this->currentEnergyLevel;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    public function addFuel(int $quantityOffuel): void
    {
        $this->currentEnergyLevel += $quantityOffuel;
    }
}
