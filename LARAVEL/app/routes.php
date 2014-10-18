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
// '/first' and 'first' are the same meaning
Route::get('/','CommentController@showComments');
Route::post('/','CommentController@postComments');
Route::post('/registered','MemberController@register');
Route::get('/register',function (){
	return View::make('userForm');
});


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