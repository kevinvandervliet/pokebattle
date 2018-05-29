<?php

class Pokemon {

    public $name;
    public $type;
    public $hitpoints;
    public $health;
    private $weakness;
    private $attacks;
    private $restistance;

    public function __construct($name, $type, $hitpoints)
    {
        $this->name = $name;
        $this->type = $type;
        $this->hitpoints = $hitpoints; // Apparently these are the same
        $this->health = $hitpoints; // Apparently these are the same
    }

    public function setWeakness($wk) {
        $this->weakness = $wk;
    }

    public function getWeakness() {
        return $this->weakness;
    }

    public function setRestistance($rs) {
        $this->restistance = $rs;
    }

    public function getRestistance() {
        return $this->restistance;
    }

    public function addAttack(Attack $attackobj) {
        $attackobj->setOwner($this);
        $this->attacks[] = $attackobj;
    }

    public function getAttacks() {
        return $this->attacks;
    }

    public function getEnergytype() {
        return $this->type;
    }

    public function doDamage($target, $health, $name, $energytype, $points) {
        echo $name . ' attacked ' . $target->name . ' with an ' . $energytype . ' attack for ' . $points . ' points. <br>';

        // If owner energy type is equal with the target weakness energytype
        if($energytype == $target->getWeakness()->EnergyType) {
            $newHealth = $health - $points * $target->getWeakness()->Multiplier;
        }
        // Else
        else {
            $newHealth = $health -  $points;
        }

        echo 'Previous health: ' . $health . ' and is now: ' . $newHealth . '<br>';
    }

    public function __toString() {
        return json_encode($this);
    }
}