<?php
namespace core;
class CoreLostPetPost extends CorePost{
	private $uniqueApperance;
	private $timeLost;
	private $dateLost;

	public function getUniqueApperance(){
		return $this->uniqueApperance;
	}

	public function getTimeLost(){
		return $this->timeLost;
	}

	public function getDateLost(){
		return $this->dateLost;
	}

	public function setUniqueApperance($uniqueApperanceIn){
		$this->uniqueApperance = $uniqueApperanceIn;
	}

	public function setTimeLOst($timeLostIn){
		$this->timeLost = $timeLostIn;
	}

	public function setDateLost($dateLostIn){
		$this->dateLost = $dateLostIn;
	}
}

?>