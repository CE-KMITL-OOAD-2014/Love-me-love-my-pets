<?php
namespace repository;	
	interface ICommentRepo{
		public function createComment($memIn,$postIn,$commentIn);
	}