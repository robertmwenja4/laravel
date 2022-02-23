<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Product;
use App\Http\Controllers\HomeController;

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

Route::get('/producting', [Product::class, 'index'])->name('producting');
Route::get('/about', [Product::class, 'about']);
//Route::get('/',[HomeController::class, 'home']);
//Represent String pattern
Route::get('/home', [HomeController::class, 'home']);
Route::get('/home/{name}',
[HomeController::class, 'advanced'])->where('name', '[a-zA-Z]+');

//Representing Interger pattern
Route::get('/home/{id}', [HomeController::class, 'advanced'])->where('id','[0-9]+');
//Patern is String/Interger
Route::get('/home/{name}/{id}', [HomeController::class, 'advanced'])->where(
    ['name'=> '[a-zA-Z]+',
    'id'=>'[0-9]+']

);
Route::get('/',function(){
    return view('welcome');
});
// //Route to users -> string return
// Route::get('/users', function () {
    
//     return "Welcome To users Page";
// });

// //Route to users return Array
// Route::get('/users', function (){
//     return ['PHP','HTML','CSS','JAVA'];
// });
// //Route to users return JSON
// Route::get('/users', function (){
//     return response()->json([
//         'name' => 'Robert',
//         'course' => 'Laravel For Beginners'
//     ]);
// });

// //Route to users return a function
// Route::get('/users', function (){
//     return redirect('/');
// });

