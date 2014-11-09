<?php
	class PostController extends BaseController {
			public function createPost(){
				$member = core\CoreMember::getObjectFromEloquent(Auth::user());
				$extType = Input::file('petImage')->guessExtension();
				$memPost = Auth::user();
				if(Input::get('postType')=='findAHomePost'){
					$newPost = new core\CoreFindAHomePost();
					$newPost->setPetType(Input::get('petType'));
					$newPost->setHabit(Input::get('habit'));
					$newPost->setSpecificRequire(Input::get('specificRequire'));
				}

				else if(Input::get('postType')=='helpMePost'){
					$newPost = new core\CoreHelpMePost();
					$newPost->setPetType(Input::get('petType'));
					$newPost->setNeedWhatForHelp(Input::get('needWhatForHelp'));
				}
				else if(Input::get('postType')=='lostPetPost'){
					$newPost = new core\CoreLostPetPost();
					$newPost->setUniqueApperance(Input::get('uniqueApperance'));
					$newPost->setTimeLost(Input::get('timeLost'));
					$newPost->setDateLost(Input::get('dateLost'));
				}
				$newPost->setIdUser($memPost->id);
				$newPost->setUserName($member->getUserName());
				$newPost->setSubject(Input::get('subject'));
				$newPost->setContent(Input::get('content'));
				$newPost->setPetName(Input::get('petName'));
				$newPost->setLocation(Input::get('location'));
				$newPost->setContact(Input::get('contact'));
				$newPost->setStatus(0);
				$newPost->setPostType(Input::get('postType'));
		
				
				$modelPost = $member->createPost($newPost);
				$newPost->setIdPost($modelPost->id);
				$namePic =  $newPost->getPostType().$modelPost->id.".".$extType;
				$newPost->setPetImage($namePic);
				Input::file('petImage')->move("storage/pic/picPost/",$namePic);
				$member->updatePic($newPost);

				if($modelPost->postType=='findAHomePost'){
					return Redirect::to('/findAHomePost/'.$modelPost->id);
				}
				else if($modelPost->postType=='helpMePost'){
					return Redirect::to('/helpMePost/'.$modelPost->id);
				}
				else{
					return Redirect::to('/lostPetPost/'.$modelPost->id);
				}

				}


	 


	public function showFindAHomePost(){
	//	$allFindAHomeposts = repository\PostRepository::getAllFindAHomePosts();
		$allFindAHomeposts = \FindAHomePost::all();

		return View::make('showAllFindAHomePost')->with('findAHomeposts',$allFindAHomeposts);
	}


	
		public function showDetailFindAHomePost($id){
		$thatPost = \FindAHomePost::find($id);
		$allComments = CommentController::findAllCommentInPost($thatPost);
		
		return View::make('showDetailFindAHomePost',array('thisPost'=>$thatPost,'comments'=>$allComments));

	}
		
	public function showHelpMePost(){
	//	$allFindAHomeposts = repository\PostRepository::getAllFindAHomePosts();
		$allHelpMePosts = \HelpMePost::all();
		return View::make('showAllHelpMePost')->with('helpMePosts',$allHelpMePosts);
	}

	
		public function showDetailHelpMePost($id){
		$thatPost = \HelpMePost::find($id);
		$allComments = CommentController::findAllCommentInPost($thatPost);
		return View::make('showDetailHelpMePost',array('thisPost'=>$thatPost,'comments'=>$allComments));
	}


	public function showLostPetPost(){
	//	$allFindAHomeposts = repository\PostRepository::getAllFindAHomePosts();
		$allLostPetPosts = \LostPetPost::all();
		return View::make('showAllLostPetPost')->with('lostPetPosts',$allLostPetPosts);
	}

	
		public function showDetailLostPetPost($id){
		$thatPost = \LostPetPost::find($id);
		$allComments = CommentController::findAllCommentInPost($thatPost);
		return View::make('showDetailLostPetPost',array('thisPost'=>$thatPost,'comments'=>$allComments));
	}






	}


	
?>