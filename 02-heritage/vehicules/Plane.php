<?php

class Plane extends Vehicle
{
    private string $type;
    private int $flyDuration;

    public function __construct(
        string $brand,
        DateTime $buyAt,
        int $price,
        string $type,
        int $flyDuration
    ) {
        parent::__construct($brand, $buyAt, $price);

        $this->type = $type;
        $this->flyDuration = $flyDuration;
    }

    protected function percent()
    {
        return 0;
    }

    public function computePrice()
    {
        return $this->getRangedPrice(parent::computePrice(), $this->flyDuration / 100, 10);
    }

    public function show()
    {
        echo "---- Avion à {$this->type} ---- <br />";
        parent::show();
        echo "{$this->flyDuration} heures de vol. <br />";
    }
}
