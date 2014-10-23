<?php
namespace repository;	
	class CommentRepository implements ICommentRepo{
		public function createComment($memIn,$postIn,$commentIn){
			$modelComment = new \Comment();
			$modelComment->userName = $memIn->userName;
			$modelComment->postType = $postIn->postType;
			$modelComment->postId = $postIn->id;
			$modelComment->content = $commentIn->getContent();
			$modelComment->feeling = $commentIn->getFeeling();
			$modelComment->save();
		}
	}