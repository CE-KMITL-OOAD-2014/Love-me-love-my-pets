<?php
namespace repository;
			   
interface IMemberRepo {
	//public function fillInput($memIn);
	public function saveToDB($memIn);
	//public function checkSameUserNameOrEmail($memIn);
}