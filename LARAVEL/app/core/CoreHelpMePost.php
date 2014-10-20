<?php
namespace core;
class CoreHelpMePost extends CorePost{
	private $petType;
	private $needWhatForHelp;

	public function getPetType(){
		return $this->petType;
	}

	public function getNeedWhatForHelp(){
		return $this->needWhatForHelp;
	}

	public function setPetType($petTypeIn){
		$this->petType = $petTypeIn;
	}

	public function setNeedWhatForHelp($needWhatForHelpIn){
		$this->needWhatForHelp = $needWhatForHelpIn;
	}
}

?>