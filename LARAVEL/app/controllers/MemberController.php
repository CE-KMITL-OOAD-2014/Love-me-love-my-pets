<?php

class MemberController extends BaseController {
	protected $mem;
	public function __construct (repository\MemberRepository $memIn){
		$this->mem = $memIn;
	}

	public function resetPassword(){
		$thisMember = \Member::where('email','=',Input::get('email'))->get();;
		$realMember = null;
		foreach($thisMember as $thisM) { if($thisM!=null) $realMember = $thisM;}
		/*if($realMember == null) echo 'f';
		else echo $realMember->id;*/
		if($realMember==null){

			$error = 'invalid email! please try again';
			return Redirect::to('/forgotPassword');
		}
		else{
	
		$mem = new core\CoreMember();
		$newPassword = $mem->resetPass($realMember->id);
			Mail::send('emails.resetPass',array('newPassword'=>$newPassword), function($message) use ($newPassword,$realMember)
	{
  	$message->to($realMember->email, 'Love me, love my pets')
          ->subject('ResetPassword');
	});

			return Redirect::to('/successResetPassword');
		}
	}
	public function register(){
	//	MemberController::checkValidate();\

		$newMember = new core\CoreMember();
		if(Input::hasfile('petImage')){
			$extType = Input::file('petImage')->guessExtension();
			Input::file('petImage')->move("storage/pic/picPet",Input::get('userName').".".$extType);
			$newMember->setPetImage(Input::get('userName').".".$extType);
		}
		else {
			$newMember->setPetImage('anonymous.jpg');
		}

		if(Input::hasfile('profilePic')){
			$extType2 = Input::file('profilePic')->guessExtension();
			Input::file('profilePic')->move("storage/pic/picMember",Input::get('userName').".".$extType2);
			$newMember->setProfilePic(Input::get('userName').".".$extType2);
		}
		else {
			$newMember->setProfilePic('anonymous.jpg');
		}

	
		//$newMember = $this->mem->fillInput($newMember);
		$newMember->setUserName(Input::get('userName'));
		$newMember->setPassword (Hash::make(Input::get('password')));
		$newMember->setRealNameSurName(Input::get('realNameSurName'));
		$newMember->setAge(Input::get('age'));
		$newMember->setAddress(Input::get('address'));
		$newMember->setEmail(Input::get('email'));
		$newMember->setPetname(Input::get('petName'));
		
	
		
		
	//	echo "f";
	//	$error = $this->mem->checkSameUsernameOrEmail($newMember);
	//	if($error== 'NULL'){
	//	echo Input::file('petImage')->getMimeType();
		$inputData = array (
			'userName' => Input::get('userName'),
			'password' => Input::get('password'));
		$newMember = $this->mem->saveToDB($newMember);
		//echo $id;
		//Auth::login('newMember');
		//echo var_dump($newMember);
		Auth::attempt($inputData);
		Mail::send('emails.regisOk',array('realNameSurName'=>$newMember->realNameSurName), function($message) use ($newMember)
	{
  	$message->to($newMember->email, 'Love me, love my pets')
          ->subject('Welcome to Love me, love my pets!');
	});
		return View::make('showDetailMember')->with('thisMember',$newMember);
	//	return Redirect::to('/member/'.$id);//->with('thisMember',$newMember);
		//return Redirect::action('MemberController@showDetailMember', $id);
		//}
	//	else return View::make('userForm')->with('error',$error);
	}

	public function logIn(){
		$inputData = array (
			'userName' => Input::get('userName'),
			'password' => Input::get('password'));
		//echo var_dump( Hash::check('cat','$2y$10$w9m8EImrrnzxuhQEZDC7f.vXA.aNJez5ofktuZJZ9ZqtIZFxuhm1u') );
		if (Auth::attempt($inputData))
			return Redirect::intended('/');
		else return Redirect::to('/login');
		/*$mem = Member::find(50);
		echo $mem->userName;
		echo $mem->password;*/
	
		/*echo Hash::make('cat');
		echo"           ";
		echo Hash::make('cat');
		echo"           ";
		$k = Hash::make('cat');
		echo var_dump( Hash::check('cat',$k) );*/
	}

	public function hello(){
			if (Auth::check()) return View::make('hello');
			else return View::make('login');
	}
	public function logout(){
		Auth::logout();
		return Redirect::to('/');
	}

	public static function checkValidate(){
		$allInput = Input::all();
		$rules = array(
	'username' => 'alpha_num|min:3|max:32|unique:userName|userName',
	'password' => 'confirm|min:3'
		);

		$validator = Validator::make($allInput, $rules);

		if ($validator->passes()) {
			
			echo "hereeeeeeeeeeeeeeeeeeeee";
		}


}
	public function showDetailMember($id){
		$thatMember = \Member::find($id);
	//	echo $thatMember->id;
		return View::make('showDetailMember')->with('thisMember',$thatMember);
	}	

	

	public function editProfile(){
		$thisMem = Auth::user();
		return View::make('editForm')->with('thisMember',$thisMem);
	}

	public function editedProfile(){
			$mem = new core\CoreMember();
			$editMem = Auth::user();
		If(Input::file('petImage')!=NULL){
			$extType = Input::file('petImage')->guessExtension();
			$mem->setPetImage(Input::get('userName').".".$extType);
		}
		else{
			$mem->setPetImage(($editMem->petImage));
		}
		If(Input::file('profilePic')!=NULL){
			$extType2 = Input::file('profilePic')->guessExtension();
			$mem->setProfilePic(Input::get('userName').".".$extType2);
		}
		else{
			$mem->setProfilePic(($editMem->profilePic));
		}

		
	
		$mem->setUserName(Input::get('userName'));
		$mem->setRealNameSurName(Input::get('realNameSurName'));
		$mem->setAge(Input::get('age'));
		$mem->setAddress(Input::get('address'));
		$mem->setEmail(Input::get('email'));
		$mem->setPetname(Input::get('petName'));

	
		if( (Input::file('petImage')!=NULL)) Input::file('petImage')->move("storage/pic/picPet",Input::get('userName').".".$extType);
		if( (Input::file('profilePic')!=NULL))Input::file('profilePic')->move("storage/pic/picMember",Input::get('userName').".".$extType2);
		$mem->editProfile($mem);
		return Redirect::to('/member/'.$editMem->id);
	}

	public function helpPost(){
		if(Input::get('postType')=='helpMePost')$thatPost=\HelpMePost::find(Input::get('id'));
		else if(Input::get('postType')=='findAHomePost')$thatPost=\FindAHomePost::find(Input::get('id'));
		else $thatPost=\LostPetPost::find(Input::get('id'));
		$memberHelp = \Member::find(Auth::user()->id);
		$memCore = core\CoreMember::getObjectFromEloquent($memberHelp);
		$memCore->helpPost($thatPost,$memberHelp->userName);
		return Redirect::to('/thanks');
	}
}
	/*
	interface Register{
		public function regis();
	}
	class RealRegister implements Register{
		public function regis(){
			$newMember =  new RealMember();
			$fillValues = new FillValuesMember();
			$newMember = $fillValues->fill($newMember);
			$forSave = new SaveMember();
			$forsave.save($newMember);
		}
	}

	interface FillValuesMember{
		public function fill($newMember);
	}

	class realFillValuesMember implements FillValuesMember {
		public function fill($newMember){
			$newMember->userName = Input::get('userName');
			$newMember->password = Input::get('password');
			$newMember->realNameSurName = Input::get('realNameSurName');
			$newMember->age = Input::get('age');
			$newMember->address = Input::get('address');
			$newMember->email = Input::get('email');
			$newMember->petname = Input::get('petName');
			$newMember->petImage = Input::get('petImage');
			return $newMember;
		}
	}

	interface SaveMember{
		public function save($newMember);
	}

	class RealSaveMember implements SaveMember{
		public function save($newMember){
			$mem = new Member();
			$mem->userName = $newMember->getUserName();
			$mem->password = $newMember->getPassword();
			$mem->realNameSurName = $newMember->getRealNameSurName();
			$mem->age = $newMember->getAge();
			$mem->address = $newMember->getAddress();
			$mem->email = $newMember->getEmail();
			$mem->petName = $newMember->getPetName();
			$mem->petImage = $newMember->getPetImage();
			$mem->save();
		}
	}*/
	?>