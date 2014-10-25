<?php
namespace repository;
			   
interface IMemberRepo {
	//public function fillInput($memIn);
	public function saveToDB($memIn);
	public function createAndSavePost($newPost);
	//public function checkSameUserNameOrEmail($memIn);
	public function saveProfileEdit($updateMem);
}