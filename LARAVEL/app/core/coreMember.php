<?php
namespace core;

class CoreMember {
	private $id;
	private $userName;
	private $password;
	private $realNameSurName;
	private $age;
	private $address;
	private $email;
	private $petName;
	private $petImage;
	private $profilePic;
	/*private $post;
	public function __construct (repository\MemberRepository $postIn){
		$this->post = $postIn;
	}*/
	public function updatePost($newPost){
		$memRepo = new MemberRepository();
		$memRepo->updataPostt($newPost);
	}
	public static function getObjectFromEloquent($model){
		$mem = new CoreMember();
		$mem->id = $model->id ;
		$mem->userName = $model->userName ;
		$mem->password = $model->password ;
		$mem->realNameSurName = $model->realNameSurName ;
		$mem->age = $model->age ;
		$mem->address = $model->address ;
		$mem->email = $model->email ;
		$mem->petName = $model->petName ;
		$mem->petImage = $model->petImage ;
		$mem->profilePic = $model->profilePic ;
		return $mem;
	}
	public function createFindAHomePost($newPost){
		$repo = new \repository\MemberRepository();
		
		return $repo->createAndSavePost($newPost);
	}

	public function editProfile($updateMem){
		$repo = new \repository\MemberRepository();
		$repo->saveProfileEdit($updateMem);
	}
	public function getProfilePic(){
		return $this->profilePic;
	}
	public function getId(){
		return $this->id;
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
		return $this->address;
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

	public function setId($idUserIn){
		$this->id = $idUserIn;
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