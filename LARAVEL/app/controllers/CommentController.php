<?php
	class CommentController extends BaseController{
		public function createComment($postType,$idPost){
			if($postType == 'findAHomePost'){
				$thisPost = \FindAHomePost::find($idPost);
			}
			else if($postType == 'helpMePost'){
				$thisPost = \HelpMePost::find($idPost);
			}
			else $thisPost =\LostPetPost::find($idPost);

			$memComment = Auth::user();
			$newComment = new core\CoreComment();
			$newComment->setContent(Input::get('content'));
			$newComment->setFeeling(Input::get('feeling'));
			$repo = new repository\CommentRepository();
			$repo->createComment($memComment,$thisPost,$newComment);
			return Redirect::to('/'.$thisPost->postType.'/'.$thisPost->id);
		}

		public static function findAllCommentInPost($postIn){
		if($postIn->postType == 'findAHomePost'){
			return $allComments = Comment::where('postType','=','findAHomePost')->where('postId', '=', $postIn->id)->get();

		}
	}
}
?>
