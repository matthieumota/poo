<?php

class Calculator
{
    private int $result = 0;
    private array $arithmetics = [];

    public function __construct(int $initial = 0)
    {
        $this->result = $initial;

        if ($initial !== 0) {
            $this->arithmetics[] = $initial;
        }
    }

    public function add(int $n): Calculator
    {
        $this->result += $n;
        $this->arithmetics[] = " + $n";

        return $this;
    }

    public function sub(int $n): Calculator
    {
        $this->result -= $n;
        $this->arithmetics[] = " - $n";

        return $this;
    }

    /**
     * Cette méthode nous permet de formater correctement
     * le résultat...
     */
    private function trimResult(): string
    {
        return ltrim(implode('', $this->arithmetics), ' +*-\\');
    }

    public function display(): string
    {
        return $this->trimResult() . ' = ' . $this->result . '<br />';
    }
}
