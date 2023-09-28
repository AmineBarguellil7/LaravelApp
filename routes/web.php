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


Route::get('/page1', function () {
    return view('page1',['Title'=>'Hello']);
});


Route::get('/page3/{param1}/{param2}', function ($param1, $param2) {
    return view('page3', ['param1' => $param1, 'param2' => $param2]);
});

Route::get('/page2/{name?}', function ($name=null) {
    if ($name) {
        return view('page2', ['name' => $name]);
    } else {
        return "Welcome";
    }
});

Route::get('/page/{name}', function ($name) {
    return "Bonjour, $name !";
})->where('name', '[A-Za-z0-9]+');


Route::get('home' ,[\App\Http\Controllers\HomeController::class , 'index']);
Route::get('welcome' ,[\App\Http\Controllers\HomeController::class , 'welcome']);
Route::get('show' ,[\App\Http\Controllers\HomeController::class , 'show']);

Route::get('/trimstring',[\App\Http\Controllers\HomeController::class,'trimstring']) ;
Route::get('/result', function (\Illuminate\Http\Request $request ) {
    return 'La valeur sans espace  '. $request->nom;
})->name('resultname');


Route::get('/verif/{age}', function (\Illuminate\Http\Request $request) {
    return $request->age ;
})->middleware(\App\Http\Middleware\VerifAge::class);

Route::get('/product',[\App\Http\Controllers\ProductController::class,'index'])->name('product.index');
Route::get('/product/create',[\App\Http\Controllers\ProductController::class,'create'])->name('product.create');
Route::post('/product',[\App\Http\Controllers\ProductController::class,'store'])->name('product.store');
Route::get('/product/{product}/edit',[\App\Http\Controllers\ProductController::class,'edit'])->name('product.edit');
Route::put('/product/{product}/update',[\App\Http\Controllers\ProductController::class,'update'])->name('product.update');
Route::delete('/product/{product}/delete',[\App\Http\Controllers\ProductController::class,'delete'])->name('product.delete');










