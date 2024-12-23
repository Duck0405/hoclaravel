<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/admin', [LoginController::class, 'index'])->name("login");
Route::post('/admin', [LoginController::class, 'auth_login'])->name("login.login");

Route::get('/admin/dasboard', [LoginController::class, 'dasboard'])->name("dasboard");
Route::get('/admin/register', [LoginController::class, 'register'])->name("register");
Route::post("/admin/register", [LoginController::class, 'auth_register'])->name("login.registration");

Route::get('/admin/forgot', [LoginController::class, 'forgotpass'])->name("forgot");
Route::post("/admin/forgot", [LoginController::class, 'auth_forgot'])->name("login.forgot");

Route::get('/admin/confirmpass', [LoginController::class, 'recoverpass'])->name("confirmpass");
Route::post("/admin/confirmpass", [LoginController::class, 'auth_recoverpass'])->name("login.confirmpass");

Route::get('/admin/add-article', [BlogController::class, 'article'])->name('article');
Route::post('/admin/add-article',[BlogController::class, 'post_article'])->name('blog.article');

Route::get('/admin/list_article',[BlogController::class, 'list_artcle'])->name('list_article');

Route::get('/admin/edit_article/{id}', [BlogController::class, 'edit_article'])->name('edit_article');
Route::post('/admin/update_article/{id}', [BlogController::class, 'update_article'])->name('update_article');

Route::delete('/delete_article/{id}', [BlogController::class, 'delete_article'])->name('delete_article');


Route::get('/', function() {
    echo 'Trang chủ';
});
