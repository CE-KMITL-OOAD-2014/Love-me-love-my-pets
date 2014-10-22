<?php

namespace core;

	class CoreComment{
		private $id;
		private $userName;
		private $post;
		private $content;
		private $feeling;
		private $created_at;

		public function getId(){
			return $id;
		}

		public function getPost(){
			return $post;
		}

		public function getUserName(){
			return $userName;
		}

		public function getContent(){
			return $content;
		}

		public function getFeeling(){
			return $feeling;
		}

		public function getCreatedAt(){
			return $created_at;
		}

		public function setIdPost($postIn){
			$post = $postIn;
		}

		public function setId($idIn){
			$id = $idIn;
		}

		public function setUserName($userNameIn){
			$userName = $userNameIn;
		}

		public function setContent($contentIn){
			$content = $contentIn;
		}

		public function setFeeling($feelingIn){
			$feeling = $feelingIn;
		}

		public function setCreatedAt($created_atIn){
			$created_at = $created_atIn;
		}
	}
?>