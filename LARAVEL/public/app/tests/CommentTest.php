<?php
	class CommentTest extends TestCase{
		public static function mockComment($content,$feeling){
			$comment = new core\CoreComment();
			$comment->setContent($content);
			$comment->setFeeling($feeling);

			return $comment;
		}
		public function testComment(){


			$mock = CommentTest::mockComment('testContent','testFeeling');
			$memRepo = new  repository\MemberRepository();
			$member = new Member();
			$member->id = 9999;
			$post = new FindAHomePost();
			$post->postType = 'FindAHomePost';
			$post->id = 9999;
			$result = $memRepo->createAndSaveComment($member,$post,$mock);
		
			$this->assertEquals('testContent',$result->content);
			$this->assertEquals('testFeeling',$result->feeling);
		
	
		}
	}
?>