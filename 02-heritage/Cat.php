<?php

class Cat extends Animal
{
    private int $age;

    public function __construct(string $n, int $a)
    {
        // $this->name = $n;
        parent::__construct($n);
        $this->age = $a;
    }

    protected function isMajor()
    {
        return ! parent::isMajor();
    }

    public function present(): string
    {
        // EasyDump::debug(parent::isMajor());
        // EasyDump::debug($this->isMajor());

        return parent::present() . " qui a {$this->age} ans.";
    }

    public function climbsOnRoof(): string
    {
        return "{$this->name} est sur le toit.";
    }
}
