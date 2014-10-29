<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
//before @ = controller's name
//after @ = function's name
// because in routing shouldn't have any code
// '/first' and 'first' are the same meaning+

Route::post('/resetPassword','MemberController@resetPassword');
Route::get('/forgotPassword',function(){
	return View::make('forgotPasswordForm');
});
Route::get('/',function (){
	return View::make('home');
});

Route::get('/successResetPassword',function(){
	return View::make('successResetPassword');
});


Route::get('/postFindAHome',array(
	'before' => 'checkAuth',
	function()
	{
		return View::make('formPostFindAHome');
	}));


Route::get('/postHelpMe',array(
	'before' => 'checkAuth',
	function()
	{
		return View::make('formPostHelpMe');
	}));


Route::get('/postLostPet',array(
	'before' => 'checkAuth',
	function()
	{
		return View::make('formPostLostPet');
	}));


Route::post('/{postType}/{id}/commented','CommentController@createComment');
Route::post('/edited','MemberController@editedProfile');
Route::get('/member/{id}','MemberController@showDetailMember');
Route::post('/logined','MemberController@logIn');
Route::get('/logout','MemberController@logout');
Route::post('/postedFindAHome','PostController@createPost');
Route::post('/postedHelpMe','PostController@createPost');
Route::post('/postedLostPet','PostController@createPost');
Route::post('/registered','MemberController@register');
Route::get('/register',function (){
	return View::make('registerForm');
});

Route::get('/editProfile','MemberController@editProfile');
Route::get('/findAHomePost','PostController@showFindAHomePost');
Route::get('/findAHomePost/{id}','PostController@showDetailFindAHomePost');
Route::get('/helpMePost','PostController@showHelpMePost');
Route::get('/helpMePost/{id}','PostController@showDetailHelpMePost');
Route::get('/lostPetPost','PostController@showlostPetPost');
Route::get('/lostPetPost/{id}','PostController@showDetailLostPetPost');
Route::get('/thanks',function(){
	return View::make('thanks');
});
Route::get('/login',function (){
	return View::make('formLogin');
});
Route::post('/helpedPost','MemberController@helpPost');



/*
Route::get('first', 'MyFirstController@showFirst');
Route::get('second', 'MyFirstController@showSecond');
Route::get('form','MyFirstController@showForm');
Route::post('result','MyFirstController@showResult');
// อาร์เรย์ไม่จำเปนต้องชื่อดาต้า
Route::get('/{squirrel}', function($squirrel){
		$data['squirrel'] = $squirrel;
		return View::make('simple',$data);
});

//ทำไมต้องเปน ฟันหนู --> เพื่อให้มันเอาค่าตัวแปรมาแทน

Route::get('/books/{genre}', function($genre){
		return "Books in the {$genre} category.";
});

//get = request data
//post = sent the data to process in the server*/


?>
