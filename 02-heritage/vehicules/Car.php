<?php

class Car extends Vehicle
{
    private float $displacement;
    private int $power;
    private int $doors;
    private int $mileage;

    public function __construct(
        string $brand,
        DateTime $buyAt,
        int $price,
        float $displacement,
        int $doors,
        int $power,
        int $mileage
    ) {
        parent::__construct($brand, $buyAt, $price);

        $this->displacement = $displacement;
        $this->doors = $doors;
        $this->power = $power;
        $this->mileage = $mileage;
    }

    protected function percent()
    {
        return 2;
    }

    public function computePrice()
    {
        $range = round($this->mileage / 10000);

        return $this->getRangedPrice(parent::computePrice(), $range, 5);
    }

    public function show()
    {
        echo '---- Voiture ---- <br />';
        parent::show();
        echo "{$this->displacement} litres, {$this->doors} portes, {$this->power} CV, {$this->mileage} km. <br />";
    }
}
