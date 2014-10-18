
<?php

namespace member;

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


	/*public function createFindAHomePost($memberIn){
		FindAHomePost newPost = new FindAHomePost();
		FillValues fillpost = new FillValues();
		fillpost->fillFindAHomePet($newPost);

	}*/

	public function getIdUser(){
		return $idUser;
	}

	public function getUserName(){
		return $userName;
	}

	public function getPassword(){
		return $password;
	}

	public function getRealNameSurName(){
		return $realNameSurName;
	}

	public function getAge(){
		return $age;
	}

	public function getAddress(){
		return $age;
	}

	public function getEmail(){
		return $email;
	}

	public function getPetName(){
		return $petName;
	}

	public function getPetImage(){
		return $petImage;
	}

	public function setIdUser($idUserIn){
		$idUser = $idUserIn;
	}

	public function setUserName($userNameIn){
		$userName = $userNameIn;
	}

	public function setPassword($passwordIn){
		$password = $passwordIn;
	}

	public function setRealNameSurName($realNameSurNameIn){
		$realNameSurName = $realNameSurNameIn;
	}

	public function setAge($ageIn){
		$age = $ageIn;
	}

	public function setAddress($addressIn){
		$address = $addressIn;
	}

	public function setEmail($emailIn){
		$email = $emailIn;
	}

	public function setPetName($petNameIn){
		$petName = $petNameIn;
	}

	public function setPetImage($petImageIn){
		$petImage = $petImageIn;
	}
	}
?>