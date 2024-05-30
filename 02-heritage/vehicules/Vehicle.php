<?php

class Vehicle
{
    private string $brand;
    private DateTime $buyAt;
    private int $price;
    // private int $currentPrice;

    public function __construct(
        string $brand,
        DateTime $buyAt,
        int $price
    ) {
        $this->brand = $brand;
        $this->buyAt = $buyAt;
        $this->price = $price;
    }

    /**
     * On va surcharger cela dans Car (2) et Plane (0)
     */
    protected function percent()
    {
        return 1;
    }

    protected function getRangedPrice($price, $times, $percent)
    {
        for ($i = 0; $i < floor($times); $i++) {
            $price -= $price * $percent / 100;
        }

        return round($price);
    }

    public function computePrice()
    {
        $years = (new DateTime())->format('Y') - $this->buyAt->format('Y');

        return $this->getRangedPrice($this->price, $years, $this->percent());
    }

    public function show()
    {
        echo "marque : {$this->brand}, date d'achat : {$this->buyAt->format('Y')}, prix actuel : {$this->price} <br />";
    }
}
