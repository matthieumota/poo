<?php

class Animal
{
    protected string $name;

    public function __construct(string $n)
    {
        $this->name = $n;
    }

    public function present(): string
    {
        return "Je suis un animal";
    }

    public function move(): string
    {
        return $this->name . " se déplace";
    }

    protected function isMajor()
    {
        return true;
    }
}
