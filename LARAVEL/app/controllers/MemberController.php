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
		if(!MemberController::checkValidate())
			return View::make('registerForm')->with('error','Invalid Email! please try again!');

		$newMember = new core\CoreMember();

	// check if user upload petImage or not. If not we will set the anonymous image to the new member
		if(Input::hasfile('petImage')){
			$extType = Input::file('petImage')->guessExtension();
			Input::file('petImage')->move("storage/pic/picPet",Input::get('userName').".".$extType);
			$newMember->setPetImage(Input::get('userName').".".$extType);
		}
		else {
			$newMember->setPetImage('anonymous.jpg');
		}

	// check if user upload petImage or not. If not we will set the anonymous image to the new member
		if(Input::hasfile('profilePic')){
			$extType2 = Input::file('profilePic')->guessExtension();
			Input::file('profilePic')->move("storage/pic/picMember",Input::get('userName').".".$extType2);
			$newMember->setProfilePic(Input::get('userName').".".$extType2);
		}
		else {
			$newMember->setProfilePic('anonymous.jpg');
		}


		$newMember->setUserName(Input::get('userName'));
		$newMember->setPassword (Hash::make(Input::get('password')));
		$newMember->setRealNameSurName(Input::get('realNameSurName'));
		$newMember->setAge(Input::get('age'));
		$newMember->setAddress(Input::get('address'));
		$newMember->setEmail(Input::get('email'));
		$newMember->setPetname(Input::get('petName'));
		
	// log in to the newMember profile
		$inputData = array (
			'userName' => Input::get('userName'),
			'password' => Input::get('password'));
		$newMember = $this->mem->saveToDB($newMember);
		Auth::attempt($inputData);

	// send email to welcome the new member
		Mail::send('emails.regisOk',array('realNameSurName'=>$newMember->realNameSurName), function($message) use ($newMember)
	{
  	$message->to($newMember->email, 'Love me, love my pets')
          ->subject('Welcome to Love me, love my pets!');
	});

	return View::make('showDetailMember')->with('thisMember',$newMember);
	}

	public function logIn(){
		$inputData = array (
			'userName' => Input::get('userName'),
			'password' => Input::get('password'));
		if (Auth::attempt($inputData))
			return Redirect::intended('/');
		else return Redirect::to('/login');
	}

	public function logout(){
		Auth::logout();
		return Redirect::intended('/');
	}

	public static function checkValidate(){
		$allInput = Input::all();
		$rules = array(
	'email' => 'email'
		);

		$validator = Validator::make($allInput, $rules);

		if ($validator->passes()) {
			
		 return true;
		}
		else return false;

}
	public function showDetailMember($id){
		$thatMember = \Member::find($id);
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
	?>