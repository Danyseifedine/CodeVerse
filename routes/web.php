<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Profile\ProfileController;
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


Route::controller(HomeController::class)->group(function () {
    Route::get('/page', 'page')->name('page');

    Route::get('/',  'index')->name('home');
    Route::get('/news',  'blog')->name('Blog');
    Route::get('/create',  'CreateSnippet')->name('CreateSnippet');
    Route::post('/insert', 'insertSnippet')->name('insertSnippet');

    // all snippet

    Route::get('/Components', 'Components')->name('Components');

    Route::get('/search_compenent',  'search_compenent')->name('search_compenent');


    Route::get('/snippet/{name}/{id}', 'GetSnippet')->name('GetSnippet');
});

Route::controller(AuthController::class)->middleware('guest')->group(function () {

    Route::get('/register', 'RegisterPage')->name('RegisterPage');
    Route::post('/reg', 'register')->name('register');
    Route::get('/login', 'LoginPage')->name('LoginPage');
    Route::post('/log', 'login')->name('login');
});

Route::controller(AdminController::class)->middleware('auth', 'admin')->prefix('admin')->group(function () {

    Route::get('/dashboard', 'dashboard')->name('dashboard');

    // user table
    Route::get('UserTable', 'UserTablePage')->name('UserTablePage');
    Route::delete('/updateUserStatus/{user}', 'updateUserStatus')->name('updateUserStatus');
    Route::get('UserEdit/{id}', 'UserEdit')->name('UserEdit');
    Route::post('/user/update/{user}', 'UserUpdate')->name('user.update');
    Route::get('/search',  'search')->name('search');


    // message
    Route::get('MessageTable', 'MessageTable')->name('MessageTable');
    Route::delete('/message/delete/{id}', 'MessageDelete')->name('MessageDelete');
    Route::get('/Message/{id}', 'ViewMessage')->name('ViewMessage');
    Route::get('/search_message',  'search_Message')->name('search_Message');

    // **
    // * BLOG
    Route::get('/BlogForm', 'BlogForm')->name('BlogForm');
    Route::get('/BlogTable', 'BlogTable')->name('BlogTable');
    Route::post('AddPost', 'AddPost')->name('AddPost');
    Route::delete('/DeleteBlogPost/{id}', 'DeleteBlogPost')->name('DeleteBlogPost');
    Route::get('/EditBlog/{id}', 'EditBlog')->name('EditBlog');
    Route::post('/Blog/EditBlogPost/{id}', 'EditBlogPost')->name('EditBlogPost');
    Route::get('/search_blog',  'search_Blog')->name('search_Blog');


    // **
    // *  SNIPPET

    // snippet table
    Route::get('/SnippetTable', 'SnippetTable')->name('SnippetTable');
    Route::get('/SnippetCheck/{id}', 'SnippetCheck')->name('SnippetCheck');

    // edit and update and delete snippet
    Route::get('/SnippetEdit/{id}', 'SnippetEdit')->name('SnippetEdit');
    Route::post('/SnippetUpdate/{id}', 'UpdateSnippet')->name('UpdateSnippet');
    Route::DELETE('/SnippetDelete/{id}', 'SnippetDelete')->name('SnippetDelete');


    // publish or reject
    Route::post('/publish/{id}', 'publish_snippet')->name('publish_snippet');
    Route::post('/reject/{id}', 'reject_snippet')->name('reject_snippet');


    // form and store snippet
    Route::get('/SnippetForm', 'SnippetForm')->name('SnippetForm');
    Route::post('/snippetStore', 'SnippetStore')->name('SnippetStore');

    // search
    Route::get('/search_snippet',  'search_Snippet')->name('search_Snippet');
});


Route::middleware('auth')->group(function () {
    Route::controller(ProfileController::class)->group(function () {

        Route::get('/profile', 'ProfilePage')->name('ProfilePage');
        Route::get('/EditProfile', 'ProfileEdit')->name('ProfileEdit');
        Route::post('changePassword', 'ChangePassword')->name('ChangePassword');
        Route::post('UpdateProf', 'UpdateProfile')->name('UpdateProfile');
    });

    Route::post('/out', [AuthController::class, 'logout'])->name('logout');
    Route::post('/message', [HomeController::class, 'SendMessage'])->name('SendMessage');
});
