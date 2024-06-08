<?php

use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\FeedbacksController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\GenresController;
use App\Http\Controllers\FeedbacksClientController;
use App\Http\Controllers\Users\UsersController;




Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('/contacts', [MainController::class, 'contacts'])->name('contacts');
Route::post('/contacts', [MainController::class, 'sendEmail'])->name('contacts.send');

//первый параметр - основа адреса
Route::resource('/admin/genres', GenresController::class);


//в функции айди будет автоматом попадать в параметры 
// Route::get('/genres/{id}', function ($id) {
//     // $genre = Genre::find($id);
//     // //
//     // if(!$genre)
//     //     abort(404);
// //аналог
//     $genre = Genre::findOrFail($id);
//     dd($genre);

// });
//сейчас мы явно указываем , что етот айди относится к жанру
//здесь автоматически проиходит выборка по айди , а если будет несуществущий то будет 404

// Route::get('/genres/{genre}', function (Genre $genre) {
//     dd($genre);
// });


Route::resource('/admin/books', BookController::class);





Route::resource('/client/feedbacks', FeedbacksClientController::class);
Route::get('/client/feedbacks', [FeedbacksClientController::class, 'index'])->name('clientfeedbacks');
Route::get('/client/feedbacks/create', [FeedbacksClientController::class, 'create'])->name('clientfeedbackscreate');
Route::post('/client/feedbacks/', [FeedbacksController::class, 'store'])->name('clientfeedbackstore');



Route::resource('/admin/feedbacks', FeedbacksController::class);
Route::get('/admin/feedbacks', [FeedbacksController::class, 'index'])->name('adminfeedbacks');
Route::get('/admin/feedbacks/create', [FeedbacksController::class, 'create'])->name('adminfeedbackscreate');
Route::post('/admin/feedbacks/', [FeedbacksController::class, 'store'])->name('adminfeedbackstore');
Route::delete('/admin/feedbacks/{feedback}', [FeedbacksController::class, 'destroy'])->name('adminfeedbackremove');
Route::get('/admin/feedbacks/{feedback}/edit', [FeedbacksController::class, 'edit'])->name('adminfeedbacksedit');
Route::put('/admin/feedbacks/{feedback}', [FeedbacksController::class, 'update'])->name('adminfeedbacksupdate');



Route::resource('/admin/user', UsersController::class);
Route::get('/admin/users', [UsersController::class,'index'])->name('userIndex');
Route::get('/admin/users/create', [UsersController::class, 'create'])->name('userCreate');
Route::post('/admin/users/', [UsersController::class, 'store'])->name('userStore');
Route::get('/admin/user/{user}' ,[UsersController::class, 'show'])->name('userInfo');
Route::delete('admin/user/{user}', [UsersController::class, 'destroy'])->name('userDelete');