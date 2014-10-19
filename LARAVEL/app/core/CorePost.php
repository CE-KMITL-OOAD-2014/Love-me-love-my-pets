<?php
namespace core;

Class CorePost {
    private $idPost;
	private $userName;
	private $subject;
	private $content;
	private $petName;
	private $petImage;
	private $location;
	private $contact;
	private $status;
	private $helper;
	private $postType;
	private $created_at;

	public function findAllComment(){

	}
	public function getIdPost(){
		return $this->idPost;
	}

	public function getUserName(){
		return $this->userName;
	}

	public function getSubject(){
		return  $this->subject;
	}

	public function getContent(){
		return $this->content;
	}

	public function getPetName(){
		return $this->petName;
	}

	public function getPetImage(){
		return $this->petImage;
	}

	public function getLocation(){
		return $this->location;
	}

	public function getContact(){
		return $this->contact;
	}

	public function getStatus(){
		return $this->status;
	}

	public function getPostType(){
		return $this->postType;
	}

	public function getHelper(){
		return $this->helper;
	}

	public function getCreatedAt(){
		return $this->created_at;
	}

	public function setIdPost($idIn){
		$this->idPost = $idNew;
	}

	public function setUserName($UsernameIn){
		$this->userName = $UsernameIn;
	}

	public function setSubject($subjectIn){
		$this->subject = $subjectIn;
	}

	public function setContent($contentIn){
		$this->content = $contentIn;
	}

	public function setPetImage($petImageIn){
		$this->petImage = $petImageIn;
	}

	public function setLocation($locationIn){
		$this->location = $locationIn;
	}

	public function setContact($contactIn){
		$this->contact = $contactIn;
	}

	public function setStatus($statusIn){
		$this->status = $statusIn;
	}

	public function setHelper($helperIn){
		$this->helper = $helperIn;
	}

	public function setPostType($postTypeIn){
			$this->postType = $postTypeIn;
	}

	public function setCreatedAt($created_atIn){
			$this->created_at = $created_atIn;
	}

}

class CoreFindAHomePost extends Post{
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
}

class CoreHelpMePost extends Post{
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

class CoreLostPetPost extends Post{
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