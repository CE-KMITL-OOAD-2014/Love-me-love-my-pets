<?php
	namespace member;
	
	interface MemberRepository {
		public function fillInput($memIn);
		public function saveToDB($memIn);
	}


	class EloquentMemberRepository Implements MemberRepository {
		public function fillInput($memIn){
			$memIn->userName = Input::get('userName');
			$memIn->password = Input::get('password');
			$memIn->realNameSurName = Input::get('realNameSurName');
			$memIn->age = Input::get('age');
			$memIn->address = Input::get('address');
			$memIn->email = Input::get('email');
			$memIn->petname = Input::get('petName');
			$memIn->petImage = Input::get('petImage');
			return $memIn;
		}

		public function saveToDB($memIn){
			$modelMem = new Member();
			$modelMem->userName = $memIn->getUserName();
			$modelMem->password = $memIn->getPassword();
			$modelMem->realNameSurName = $memIn->getRealNameSurName();
			$modelMem->age = $memIn->getAge();
			$modelMem->address = $memIn->getAddress();
			$modelMem->email = $memIn->getEmail();
			$modelMem->petName = $memIn->getPetName();
			$modelMem->petImage = $memIn->getPetImage();
			$modelMem->save();
		}
	}

	?>