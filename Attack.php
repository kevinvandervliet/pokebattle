<?php

class Attack {
    public $name;
    public $attackPoints;
    public $resistance;
    public $owner;

    public function __construct($nme, $attack_points) {
        $this->name = $nme;
        $this->attackPoints = $attack_points;
    }

    public function setOwner($own) {
        $this->owner = $own;
    }

    public function Execute(Pokemon $target) {
        if ($target == null) {
            echo 'Cant attack. Target is null.';
        }

        $target->doDamage($target, $target->health, $this->owner->name, $this->owner->getEnergytype(), $this->attackPoints);
    }
}

