<?php
	namespace repository;
	class PostRepository implements IPostRepo{
	public static function getAllFindAHomePosts(){
		return \FindAHomePost::all();
	}
}
	?>