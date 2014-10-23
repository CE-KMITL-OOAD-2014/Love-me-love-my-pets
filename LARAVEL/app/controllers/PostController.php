<?php
	class PostController extends BaseController {
			public function createFindAHomePost(){
				$member = core\CoreMember::getObjectFromEloquent(Auth::user());
				$extType = Input::file('petImage')->guessExtension();
				
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
				$newPost->setUserName($member->getUserName());
				$newPost->setSubject(Input::get('subject'));
				$newPost->setContent(Input::get('content'));
				$newPost->setPetName(Input::get('petName'));
				$newPost->setLocation(Input::get('location'));
				$newPost->setContact(Input::get('contact'));
				$newPost->setStatus(0);
				$newPost->setPostType(Input::get('postType'));
				$rightId = PostController::getRightId(Input::get('postType'));
				$newPost->setIdPost($rightId);
				$namePic =  $newPost->getPostType().$rightId.".".$extType;
				$newPost->setPetImage($namePic);
				Input::file('petImage')->move("storage/pic/picPost/",$namePic);
				$newPost = $member->createFindAHomePost($newPost);

				if($newPost->postType=='findAHomePost'){
					return Redirect::to('/findAHomePost/'.$newPost->id);
				}
				else if($newPost->postType=='helpMePost'){
					return Redirect::to('/helpMePost/'.$newPost->id);
				}
				else{
					return Redirect::to('/lostPetPost/'.$newPost->id);
				}
			//	echo $extType;
				
				//$newPost->setPetImage($namePic);
				//$member->updatePost($newPost);
			//	echo "good night";*/
				}


	 	public static function getRightId($postTypeIn){
		 //	$maxId = 0;
			if($postTypeIn == 'lostPetPost'){
				for($i=1;$i<=10000000;$i++){
					$maxId = $i;
				if(\LostPetPost::find($i)==NULL)break;
			}
			}
			else if ($postTypeIn == 'findAHomePost') {
				for($i=1;$i<=10000000;$i++){
					$maxId = $i;
				if(\FindAHomePost::find($i)==NULL)break;
			}
			}
			else {
				for($i=1;$i<=10000000;$i++){
					$maxId = $i;
				if(\HelpMePost::find($i)==NULL)break;
			}
			}

		
			return $maxId;
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