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
		$this->idPost = $idIn;
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

	public function setPetName($petNameIn){
		$this->petName = $petNameIn;
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

?>