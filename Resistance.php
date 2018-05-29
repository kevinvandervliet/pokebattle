<?php

class Resistance
{
    public $EnergyType;
    public $Value;

    public function __construct($et, $v) {
        $this->EnergyType = $et;
        $this->Value = $v;
    }

    public function __toString() {
        return json_encode($this);
    }
}