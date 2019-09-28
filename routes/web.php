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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::middleware(['auth'])->group(function() {
// 	Route::get('/home', 'HomeController@index')->name('home');
// });

// Route::prefix('admin')->group(function() {

// 	Route::get('login', 'AdminAuth\LoginController@showLoginForm')->name('admin.login');
// 	Route::post('login', 'AdminAuth\LoginController@login');
// 	Route::post('logout', 'AdminAuth\LoginController@logout')->name('admin.logout');
// 	Route::get('register', 'AdminAuth\RegisterController@showRegistrationForm')->name('admin.register');
// 	Route::post('register', 'AdminAuth\RegisterController@register');

// 	// Route::get('/dashboard', function () {
// 	// 		return view('admin.home');
// 	// 	});
// 	Route::middleware(['admin.auth'])->group(function() {
// 		Route::get('/dashboard', function () {
// 			return view('admin.home');
// 		});
// 	});

// });
// Route::get('greet',function(){
// 	$name = "nguyen cong hoan";
// 	// return view('greeting', 
// 		// $data = [
// 		// 	'name' => $name, 
// 		// 	'age' => 25
// 		// ];
// 	return view('greeting')
// 	->with([
// 			'name' => $name, 
// 			'age' => 25
// 		]);
// });

// Route::get('setting',function(){
// 	return view('admin.setting');
// });

// Route::get('/child', function() {
//     return view('child');
// });
// Route::get('/child2', function() {
//     return view('child2');
// });
// Route::get('/todo', function() {
// 	$list = ['hoc lap trinh', 'hoc hmtl', 'hoc css', 'hoc bai'];
//     return view('todo')
//     ->with('lists', $list);
//     // ->with(['list' => $list, 'items' => 'aaa']);
    
// });

// Route::get('/todo2', function() {
//     return view('todo2');
// });
// Route::get('/add', function() {
//     return view('add');
// })->name('todo.add');


Route::resource('todos', 'TodoController');











