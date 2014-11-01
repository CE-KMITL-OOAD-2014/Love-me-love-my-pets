<?php
namespace repository;

class MemberRepository Implements IMemberRepo{

	public function resetPass($idMember){
		$thisMember = \Member::find($idMember);
		$newPassword = str_random(7);
		$thisMember->password= \Hash::make($newPassword);
		$thisMember->save();
		return $newPassword;
	}

	public function updatePicture($thisPost,$newPost){
		$thisPost->petImage = $newPost->getPetImage();
		$thisPost->save();
	}

	public function saveProfileEdit($updateMem){
		$oldMem = \Member::find(\Auth::user()->id);
		$oldMem->userName = $updateMem->getUserName();
		$oldMem->realNameSurName = $updateMem->getRealNameSurName();
		$oldMem->age = $updateMem->getAge();
		$oldMem->address = $updateMem->getAddress();
		$oldMem->email = $updateMem->getEmail();
		$oldMem->petName = $updateMem->getPetName();
		$oldMem->petImage = $updateMem->getPetImage();
		$oldMem->profilePic = $updateMem->getProfilePic();
		$oldMem->save();
	}

	public function createAndSaveComment($memIn,$postIn,$commentIn){
			$modelComment = new \Comment();
			$modelComment->idUser = $memIn->id;
			$modelComment->postType = $postIn->postType;
			$modelComment->postId = $postIn->id;
			$modelComment->content = $commentIn->getContent();
			$modelComment->feeling = $commentIn->getFeeling();
			$modelComment->save();
			return $modelComment;
		}

	public function createAndSavePost($newPost){
			if($newPost->getPostType()=="findAHomePost"){
				$modelPost = new \FindAHomePost();
				$modelPost->petType = $newPost->getPetType();
				$modelPost->habit = $newPost->getHabit();
				$modelPost->specificRequire = $newPost->getSpecificRequire();
			}
			else if ($newPost->getPostType()=="helpMePost"){
				$modelPost = new \HelpMePost();
				$modelPost->petType = $newPost->getPetType();
				$modelPost->needWhatForHelp = $newPost->getNeedWhatForHelp();
			}
			else{ 
				$modelPost = new \LostPetPost();
				$modelPost->uniqueApperance = $newPost->getUniqueApperance();
				$modelPost->timeLost = $newPost->getTimeLost();
				$modelPost->dateLost = $newPost->getDateLost();
				
			}
			$modelPost->IdUser = $newPost->getIdUser();
			$modelPost->userName = $newPost->getUserName();
			$modelPost->subject = $newPost->getSubject();
			$modelPost->content = $newPost->getContent();
			$modelPost->petName = $newPost->getPetName();
			
			$modelPost->location = $newPost->getLocation();
			$modelPost->contact = $newPost->getContact();
			$modelPost->status = $newPost->getStatus();
			$modelPost->helper = "NULL";
			$modelPost->postType = $newPost->getPostType();
			$modelPost->save();
			return $modelPost;
		}
/*	public function fillInput($memIn){
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
*/

/*	public function checkSameUserNameOrEmail($memIn){
		$allMem = \Member::All();
		foreach ($allMem as $mem) {
			if($mem->userName == $memIn->getUserName()) return 'Duplicate username';
			else if ($mem->email == $memIn->getEmail())return 'Duplicatie Email';
		}
		return 'NULL';
	}*/
	public function saveToDB($memIn){
		$modelMem = new \Member();
		$modelMem->userName = $memIn->getUserName();
		$modelMem->password = $memIn->getPassword();
		$modelMem->realNameSurName = $memIn->getRealNameSurName();
		$modelMem->age = $memIn->getAge();
		$modelMem->address = $memIn->getAddress();
		$modelMem->email = $memIn->getEmail();
		$modelMem->petName = $memIn->getPetName();
		$modelMem->petImage = $memIn->getPetImage();
		$modelMem->profilePic = $memIn->getProfilePic();
		$modelMem->save();
		//echo $modelMem->id;
		$memIn->setId($modelMem->id);

		return $modelMem;
}
	public function helpPostSave($thatPost,$userNameHelper){
		$thatPost->status = '1';
		$thatPost->helper = $userNameHelper;
		$thatPost->save();
	}
}
?>