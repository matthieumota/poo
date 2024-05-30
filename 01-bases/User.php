<?php

class User
{
    private string $name;
    private string $firstname;
    private int $salary;
    private DateTime $birthday;

    public function __construct(string $n, string $f, int $s, DateTime $b)
    {
        $this->name = $n;
        $this->firstname = $f;
        $this->salary = $s;
        $this->birthday = $b;
    }

    public function setFirstname(string $f)
    {
        if (in_array($f, ['toto'])) {
            throw new Exception("Le prénom $f ne peut pas être donné");
        }

        $this->firstname = $f;
    }

    public function getFirstname()
    {
        return ucfirst($this->firstname);
    }

    public function pay(int $n): void
    {
        $this->salary += $n;
    }

    public function age(): int
    {
        $now = new DateTime();

        return $now->diff($this->birthday)->y;
    }

    public function __toString()
    {
        return $this->getFirstname() . " " . $this->name . " a " . $this->age()
            . " ans et gagne " . $this->salary . " euros. <br />";
    }
}
