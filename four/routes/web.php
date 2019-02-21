<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/jobview', function () {
    return view('jobs.joblist');	
});
Route::get('/matching', function () {
    return view('jobs.jobmatching');	
});
Route::get('/profile', function () {
    return view('jobs.profile');	
});

Route::get('/userview', function () {

	if (request()->has('skills'))
{
	$user=App\User::where('skills',request('skills'))->paginate(5);
}
else{
	$user=App\User::paginete(5);
}
    return view('jobs.userlist');
});

Route::get('/postjob', function () {
    return view('jobs.postjob');
});

Route::get('/candidates', function () {
    return view('jobs.candidates');
});

// Route::get('/register', function () {
//     return view('jobs.joblist');
// });
Route::get('/userview','FourController@userview');
//Route::get('/register','FourController@register');
Route::get('/jobview','TestController@jobview');
Route::get('/candidates','FourController@candidate');
Route::get('/matching','TestController@match');
Route::get('/profile','TestController@profile');
Route::get('/job','FourController@emp');
Route::post('/postjob','TestController@post');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// if (request()->has('java'))
// {
// 	$user=App\User::where('skills',request('skills'))=>paginete(5);
// }
// else{
// 	$user=App\User::paginete(5);
// }

