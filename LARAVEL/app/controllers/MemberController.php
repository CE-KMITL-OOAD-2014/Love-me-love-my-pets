<?php

class MemberController extends BaseController {
	protected $mem;
	public function __construct (repository\MemberRepository $memIn){
		$this->mem = $memIn;
	}
	public function register(){
		$newMember = new core\CoreMember();
		//$newMember = $this->mem->fillInput($newMember);
		$newMember->setUserName(Input::get('userName'));
		$newMember->setPassword (Input::get('password'));
		$newMember->setRealNameSurName(Input::get('realNameSurName'));
		$newMember->setAge(Input::get('age'));
		$newMember->setAddress(Input::get('address'));
		$newMember->setEmail(Input::get('email'));
		$newMember->setPetname(Input::get('petName'));
		$newMember->setPetImage(Input::get('petImage'));
		$this->mem->saveToDB($newMember);
		View::make('simple');
	}
}


	/*
	interface Register{
		public function regis();
	}
	class RealRegister implements Register{
		public function regis(){
			$newMember =  new RealMember();
			$fillValues = new FillValuesMember();
			$newMember = $fillValues->fill($newMember);
			$forSave = new SaveMember();
			$forsave.save($newMember);
		}
	}

	interface FillValuesMember{
		public function fill($newMember);
	}

	class realFillValuesMember implements FillValuesMember {
		public function fill($newMember){
			$newMember->userName = Input::get('userName');
			$newMember->password = Input::get('password');
			$newMember->realNameSurName = Input::get('realNameSurName');
			$newMember->age = Input::get('age');
			$newMember->address = Input::get('address');
			$newMember->email = Input::get('email');
			$newMember->petname = Input::get('petName');
			$newMember->petImage = Input::get('petImage');
			return $newMember;
		}
	}

	interface SaveMember{
		public function save($newMember);
	}

	class RealSaveMember implements SaveMember{
		public function save($newMember){
			$mem = new Member();
			$mem->userName = $newMember->getUserName();
			$mem->password = $newMember->getPassword();
			$mem->realNameSurName = $newMember->getRealNameSurName();
			$mem->age = $newMember->getAge();
			$mem->address = $newMember->getAddress();
			$mem->email = $newMember->getEmail();
			$mem->petName = $newMember->getPetName();
			$mem->petImage = $newMember->getPetImage();
			$mem->save();
		}
	}*/
	?>