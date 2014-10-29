<?php
namespace core;
class CoreFindAHomePost extends CorePost{
	private $petType;
	private $specificRequire;
	private $habit;

	public function getPetType(){
		return $this->petType;
	}

	public function getSpecificRequire(){
		return $this->specificRequire;
	}

	public function getHabit(){
		return $this->habit;
	}

	public function setPetType($petTypeIn){
		$this->petType = $petTypeIn;
	}

	public function setSpecificRequire($specificRequireIn){
		$this->specificRequire = $specificRequireIn;
	}

	public function setHabit($habitIn){
		return $this->habit = $habitIn;
	}
}
?>