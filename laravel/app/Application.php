<?php

namespace App;

class Application
{
    public string $name;
    public string $status;

    public function __construct(string $n, string $s)
    {
        $this->name = $n;
        $this->status = $s;
    }

    public function color()
    {
        return [
            'active' => 'blue',
            'inactive' => 'red',
        ][$this->status];
    }
}
