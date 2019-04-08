<?php

class Attack
{
	public $attackName;
	public $attackDmg;

	public function __construct($attackName,$attackDmg)
	{
		$this->attackName = $attackName;
		$this->attackDmg = $attackDmg;
	}

	public function attack($attacker, $receiver)
	{	
		
		if($attacker->type === $receiver->weakness->name){
            $attackDmg = $this->attackDmg * $receiver->weakness->multiplier;
            $attackMessage = $attacker->name.' attacked '.$receiver->name.' and the attack was lethal, it did '.$attackDmg.'damage';
		}
		else if ($attacker->type === $receiver->resistance->name) {
            $attackDmg = $this->attackDmg - $receiver->resistance->resistance;
            $attackMessage = $attacker->name. ' attacked '.$receiver->name.' and the attack was non-lethal, it did '.$attackDmg.'damage';
		}
		else{
            $attackDmg = $this->attackDmg;
            $attackMessage = $attacker->name.' attacked '.$receiver->name.' and did '.$attackDmg.'dmg';
        }
        return($attackMessage);
        $receiver->doDmg($receiver, $attackDmg);
	}
}
