<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});




// Route::post('/aboutus', function () {
    //     return view('aboutus');
    // });
    
    
Route::get('/aboutus', function () {
    return view('aboutus');
});


//passing name with url

// Route::get('/contact/{name}', function ($name) {
//     echo "Hello , $name";
// });

//passing name and id with url id is optional,by default 123

// Route::get('/contact/{name}/{id?}', function ($name, $id=123) {
//     echo "Hello , $name<br>";
//     echo "Your id is $id";
// });



//by view page


Route::get('/contact/{name}/{id?}', function ($name, $id=null) {
    $data=compact('name','id');
    // print_r($data);
    return view('contact')->with($data) ;
});