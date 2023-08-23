<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use Illuminate\Support\Facades\Auth;

use App\Models\Post;

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

// Route::get('/', function () {
//     return view('home.index');
// });
 route :: get('/',[HomeController::class,'index']);

 route :: post('/upload_note',[HomeController::class,'upload']);
 route :: post('/add_note',[HomeController::class,'add']);
 route :: get('/view_note',[HomeController::class,'view_note']);
 route :: get('/delete_note/{id}',[HomeController::class,'delete_note']);
 route :: get('/update_note/{id}',[HomeController::class,'update_note']);
 route :: post('/confirm_update/{id}',[HomeController::class,'confirm_update']);

 Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        $name=Auth::user()->name;
        $post=Post::where('username','=',$name)->get();
        return view('dashboard',compact('post'));
    })->name('dashboard');
});
