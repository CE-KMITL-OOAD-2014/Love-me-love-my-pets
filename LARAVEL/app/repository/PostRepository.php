<?php
/*	namespace repository;
	class PostRepository implements IPostRepo{
		function createAndSavePost($newPost){
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

			$modelPost->userName = $newPost->getUserName();
			$modelPost->subject = $newPost->getSubject();
			$modelPost->content = $newPost->getUserName();
			$modelPost->petName = $newPost->getUserName();
			$modelPost->petImage = $newPost->getUserName();
			$modelPost->location = $newPost->getLocation();
			$modelPost->contact = $newPost->getContact();
			$modelPost->status = $newPost->getStatus();
	//		$modelPost->helper = $newPost->getUserName();
			$modelPost->postType = $newPost->getPostType();
			$modelPost->save();
		}
	}*/
	?>