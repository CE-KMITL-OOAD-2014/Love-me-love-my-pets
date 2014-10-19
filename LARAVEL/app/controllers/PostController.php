<?php
	class PostController{
			public function createFindAHomePost(){
				$name = Auth::User()->getUserName();
				if(Input::get('postType')=='FindAHomePost'){
				$newPost = new FindAHomePost();
				$newPost->setUserName($name);
				$newPost->setSubject(Input::get('subject'));
				$newPost->setContent(Input::get('content'));
				$newPost->setPetName(Input::get('petName'));
				$newPost->setPetImage(Input::get('petImage'));
				$newPost->setLocation(Input::get('location'));
				$newPost->setContact(Input::get('contact'));
				$newPost->setStatus(Input::get('status'));
				$newPost->setPostType(Input::get('postType'));
				$newPost->setPetType(Input::get('location'));
				$newPost->setHabit(Input::get('location'));
				$newPost->setSpecificRequire(Input::get('specificRequire'));
				Auth::User()->createFindAHomePost($newPost);}
			}
	}
?>