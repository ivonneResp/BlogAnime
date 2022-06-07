<?php

use App\Http\Controllers\AdministradorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeuController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\UsuariovController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\NosotrosController;
use App\Http\Controllers\HistoriesController;
use App\Http\Controllers\PostsoneController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\HomePController;
use App\Http\Controllers\PruebapostController;
use App\Http\Controllers\Admin\CommentsController;

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



require __DIR__.'/auth.php';

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->name('dashboard');

//usuarios
Route::get('/homeusers', [HomeController::class, 'getUser']);
Route::get('/postsusers',[IndexController::class, 'postuser']);
Route::get('/blogusers',[IndexController::class, 'bloguser']);
Route::get('/usuarioV',[UsuariovController::class, 'index'])->name('usuarioV');
Route::get('/usuarioV/{category}','UsuariovController@usuarioVByCategory')->name('usuarioV.category');


//admin
Route::get('/dashboard', [HomeController::class, 'admin']);

//CATEGORIAS //
Route::get('/admin',[HomePController::class, 'index'])->name('home');
Route::get('/vistaU',[HomeuController::class, 'index'])->name('vistaU');

Route::get('/admin/categories', 'Admin\CategoriesController@index')->name('admin.categories.index');
Route::post('/admin/categories/store', 'Admin\CategoriesController@store')->name('admin.categories.store');
Route::post('/admin/categories/{categoryId}/update', 'Admin\CategoriesController@update')->name('admin.categories.update');
Route::delete('/admin/categories/{categoryId}/delete', 'Admin\CategoriesController@delete')->name('admin.categories.delete');

//para mostrar busqueda por categoria en posts//
Route::get('/vistaU/{category}','HomeuController@vistaUByCategory')->name('vistaU.category');

//POSTS
Route::get('/vistaU',[HomeuController::class, 'index'])->name('vistaU');
Route::get('/admin/posts', 'Admin\PostsController@index')->name('admin.posts.index');
Route::post('/admin/posts/store', 'Admin\PostsController@store')->name('admin.posts.store');
Route::post('/admin/posts/{categoryId}/update', 'Admin\PostsController@update')->name('admin.posts.update');
Route::delete('/admin/posts/{categoryId}/delete', 'Admin\PostsController@delete')->name('admin.posts.delete');

//COMENTARIOS
Route::get('/admin',[HomePController::class, 'index'])->name('home');
//Route::get('/admin/comentarios', 'Admin\CommentsController@index')->name('admin.comentarios.index');
Route::post('/admin/comentarios/{categoryId}/update', 'Admin\CommentsController@update')->name('admin.comentarios.update');
Route::delete('/admin/comentarios/{categoryId}/delete', 'Admin\CommentsController@delete')->name('admin.comentarios.delete');

Route::get('admin/comentarios',[CommentsController::class, 'index'])->name('admin.comentarios.index');
Route::get('/admin/comentarios/{category}','Admin\CommentsController@posthomeByCategory')->name('admin.comentarios.index.category');

//general

Route::get('/posthome',[PruebapostController::class, 'index'])->name('posthome');
Route::get('/home',[IndexController::class, 'public'])->name('home');
Route::get('/blog',[BlogController::class, 'public'])->name('blog');
Route::get('/nosotros',[NosotrosController::class, 'public'])->name('nosotros');
Route::get('/historia',[HistoriesController::class, 'public'])->name('historia');
//Route::get('/postsone',[PostsoneController::class, 'public'])->name('postsone');
Route::get('/noticia',[NoticiaController::class, 'public'])->name('noticia');
Route::get('/posthome/{category}','PruebapostController@posthomeByCategory')->name('posthome.category');


Route::get('/usuarios', 'UsuariosController@public');

//asicrono
Route::get('/async', function () {return view('pages.asicrono');});
//Route::post('/posts/busca', [PostController::class,'getPost'])->name('posts.buscar');

//loader
Route::get('/loader', function (){return view('pages.loader');});







