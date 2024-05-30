<?php

class Kennel
{
    /**
     * @var array<Animal>
     */
    private array $animals = [];

    public function add(Animal $animal)
    {
        $this->animals[] = $animal;
    }

    public function call()
    {
        foreach ($this->animals as $animal) {
            EasyDump::debug($animal->present());
        }
    }
}
