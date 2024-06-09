<?php

use App\Models\Home;
use App\Http\Controllers\LinkFooter;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomePrivateController;
use App\Http\Controllers\UserPrivateController;
use App\Http\Controllers\ContactPrivateController;
use App\Http\Controllers\ProfilePrivateController;
use App\Http\Controllers\LinkFooterPrivateController;


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
Route::get('/home', [HomeController::class, 'index']);Route::get('/profile', [ProfileController::class, 'index']);

Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', [ContactController::class, 'index']);

Route::get('/linkfooter', [LinkFooter::class, 'index']);



Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login-proses', [LoginController::class, 'login_proses'])->name('login-proses');


// private area
Route::get('/dashboard-private', function () {
    return view('private/dashboard');
})->name('dashboard-private');

// home private
Route::get('/home-private', [HomePrivateController::class, 'index']);
Route::delete('/home-private/{id}', [HomePrivateController::class, 'deleteData'])->name('homePrivate.delete');
Route::post('/home-private/store', [HomePrivateController::class, 'store'])->name('homePrivate.store');
Route::get('/editDataHome/{id}/edit', [HomePrivateController::class, 'edit'])->name('editDataHome.edit');
Route::post('/editDataHome/{id}/update', [HomePrivateController::class, 'update'])->name('editDataHome.update');


Route::get('/profile-private', [ProfilePrivateController::class, 'index']);
Route::delete('/profile-private/{id}', [ProfilePrivateController::class, 'deleteData'])->name('profilePrivate.delete');
Route::post('/profile-private/store', [ProfilePrivateController::class, 'store'])->name('profilePrivate.store');
Route::get('/editDataProfile/{id}/edit', [ProfilePrivateController::class, 'edit'])->name('editDataProfile.edit');
Route::post('/editDataProfile/{id}/update', [ProfilePrivateController::class, 'update'])->name('editDataProfile.update');


Route::get('/contact-private', [ContactPrivateController::class, 'index']);
Route::delete('/contact-private/{id}', [ContactPrivateController::class, 'deleteData'])->name('contactPrivate.delete');
Route::post('/contact-private/store', [ContactPrivateController::class, 'store'])->name('contactPrivate.store');
Route::get('/editDataContact/{id}/edit', [ContactPrivateController::class, 'edit'])->name('editDataContact.edit');
Route::post('/editDataContact/{id}/update', [ContactPrivateController::class, 'update'])->name('editDataContact.update');


Route::get('/user-private', [UserPrivateController::class, 'index']);
Route::delete('/user-private/{id}', [UserPrivateController::class, 'deleteData'])->name('userPrivate.delete');
Route::post('/user-private/store', [UserPrivateController::class, 'store'])->name('userPrivate.store');
Route::get('/editDataUser/{id}/edit', [UserPrivateController::class, 'edit'])->name('editDataUser.edit');
Route::post('/editDataUser/{id}/update', [UserPrivateController::class, 'update'])->name('editDataUser.update');



Route::get('/linkfooter-private', [LinkFooterPrivateController::class, 'index']);
Route::delete('/linkfooter-private/{id}', [LinkFooterPrivateController::class, 'deleteData'])->name('LinkFooterPrivate.delete');
Route::post('/linkfooter-private/store', [LinkFooterPrivateController::class, 'store'])->name('footerPrivate.store');
Route::get('/editDataLinkFooter/{id}/edit', [LinkFooterPrivateController::class, 'edit'])->name('editDataLinkFooter.edit');
Route::post('/editDataLinkFooter/{id}/update', [LinkFooterPrivateController::class, 'update'])->name('editDataLinkFooter.update');

Route::get('/addDataHome', function () {
    return view('private/addDataHome');
});

Route::get('/addDataProfile', function () {
    return view('private/addDataProfile');
});


Route::get('/addDataContact', function () {
    return view('private/addDataContact');
});

Route::get('/addDataUser', function () {
    return view('private/addDataUser');
});

Route::get('/addDataFooter', function () {
    return view('private/addDataFooter');
});

//  Route::get('/editDataHome', function () {
//     return view('private/editDataHome');
// });


