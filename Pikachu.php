<?php

class Pikachu extends Pokemon
{
    protected $type;
    protected $resistance;
    protected $weakness;
    protected $attacks = [];

    public function __construct($name, $type, $hp, $resistance, $weakness, $attacks)
    {
        $this->name = $name;
        $this->type =$type;
        $this->resistance = $resistance;
        $this->weakness = $weakness;
        $this->attacks = $attacks;

    }

}
