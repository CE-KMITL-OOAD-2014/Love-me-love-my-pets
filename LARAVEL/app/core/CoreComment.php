<?php

namespace core;

	class CoreComment{
		private $id;
		private $member;
		private $post;
		private $content;
		private $feeling;
		private $created_at;

		public function getId(){
			return $this->id;
		}

		public function getPost(){
			return $this->post;
		}

		public function getMember(){
			return $this->member;
		}

		public function getContent(){
			return $this->content;
		}

		public function getFeeling(){
			return $this->feeling;
		}

		public function getCreatedAt(){
			return $this->created_at;
		}

		public function setIdPost($postIn){
			$this->post = $postIn;
		}

		public function setId($idIn){
			$this->id = $idIn;
		}

		public function setMember($memberIn){
			$this->member = $memberIn;
		}

		public function setContent($contentIn){
			$this->content = $contentIn;
		}

		public function setFeeling($feelingIn){
			$this->feeling = $feelingIn;
		}

		public function setCreatedAt($created_atIn){
			$this->created_at = $created_atIn;
		}
	}
?>