<?php
namespace core;

class CoreMember {
	private $idUser;
	private $userName;
	private $password;
	private $realNameSurName;
	private $age;
	private $address;
	private $email;
	private $petName;
	private $petImage;
	private $profilePic;

	public function createPost($newPost){
		
	}
	public function getProfilePic(){
		return $this->profilePic;
	}
	public function getIdUser(){
		return $this->idUser;
	}

	public function getUserName(){
		return $this->userName;
	}

	public function getPassword(){
		return $this->password;
	}

	public function getRealNameSurName(){
		return $this->realNameSurName;
	}

	public function getAge(){
		return $this->age;
	}

	public function getAddress(){
		return $this->age;
	}

	public function getEmail(){
		return $this->email;
	}

	public function getPetName(){
		return $this->petName;
	}

	public function getPetImage(){
		return $this->petImage;
	}

	public function setIdUser($idUserIn){
		$this->idUser = $idUserIn;
	}

	public function setUserName($userNameIn){
		$this->userName = $userNameIn;
	}

	public function setPassword($passwordIn){
		$this->password = $passwordIn;
	}

	public function setRealNameSurName($realNameSurNameIn){
		$this->realNameSurName = $realNameSurNameIn;
	}

	public function setProfilePic($profilePicIn){
		$this->profilePic = $profilePicIn;
	}

	public function setAge($ageIn){
		$this->age = $ageIn;
	}

	public function setAddress($addressIn){
		$this->address = $addressIn;
	}

	public function setEmail($emailIn){
		$this->email = $emailIn;
	}

	public function setPetName($petNameIn){
		$this->petName = $petNameIn;
	}

	public function setPetImage($petImageIn){
		$this->petImage = $petImageIn;
	}
	}
?>