<?php
	class PostTest extends TestCase{
		public static function mockPost($userName,$idUser,$subject,$content,$petName,$petImage,$location,$contact,$status,$postType,$helper,$petType,$specificRequire,$habit){
			$post = new core\CoreFindAHomePost();
			$post->setIdUser($idUser);
			$post->setUserName($userName);
			$post->setSubject($subject);
			$post->setContent($content);
			$post->setPetName($petName);
			$post->setPetImage ($petImage);
			$post->setLocation ($location);
			$post->setContact ($contact);
			$post->setStatus ($status);
			$post->setPostType ($postType);
			$post->setHelper($helper);
			$post->setPetType ($petType);
			$post->setSpecificRequire ($specificRequire);
	
			$post->setHabit($habit);
			return $post;
		}
		public function testFindAHomePost(){
	
			$mock = PostTest::mockPost('testUserName',11,'testSubject','testContent','testPetName','testPetImage','testLocation','testContact',0,'findAHomePost'
				,NULL,'testPetType','testSpecificRequire','testHabit');
			$memRepo = new  repository\MemberRepository();
				
			$result = $memRepo->createAndSavePost($mock);
		
			$this->assertEquals('testUserName',$result->userName);
			$this->assertEquals(11,$result->IdUser);
			$this->assertEquals('testSubject',$result->subject);
			$this->assertEquals('testContent',$result->content);
			$this->assertEquals('testPetName',$result->petName);
			$this->assertEquals('testPetImage',$result->petImage);
			$this->assertEquals('testLocation',$result->location);
			$this->assertEquals('testContact',$result->contact);
			$this->assertEquals(0,$result->status);
			$this->assertEquals('findAHomePost',$result->postType);
			$this->assertEquals('NULL',$result->helper);
			$this->assertEquals('testPetType',$result->petType);
			$this->assertEquals('testSpecificRequire',$result->specificRequire);
			$this->assertEquals('testHabit',$result->habit);
		}
	}
?>