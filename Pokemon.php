<?php

class Pokemon
{
	protected $name;
	protected $hp;
	protected $hitpoints;

	protected function __construct($name, $hp)
	{
		$this->name = $name;
		$this->hp = $hp;
		$this->hitpoints = $hp;
		
	}

	public function __get($name)
	{
        return $this->$name;
	}

	public function setProperty($propertyName, $value)
	{
		$this->$propertyName = $value;
	}

	public function doDmg($pokemon,$dmg)
	{
		$hitpoints = $pokemon->hitpoints - $dmg;
		$pokemon->setProperty('hp',$hitpoints);
		echo $pokemon->hp. 'hp left';
	}
}

