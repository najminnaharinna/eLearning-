<?php
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




Route::get('home', function () {
    return view('website.home');
});

Route::get('home','website\HomePageController@index');
Route::get('about','website\AboutPageController@index');

Route::get('courses','website\CoursesController@index');
Route::get('courses/{id}','website\CoursesController@show')->name('course-details');
Route::get('lessons/{id}/{slug}','website\LessonsController@show')->name('lesson-details');

// Route::get('about', function () {
//     return view('website.courses');
// });


Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {

    Route::get('/', 'admin\AdminController@index');

    Route::resource('categories', 'admin\CategoriesController')->except(['show']);

    Route::get('users', 'admin\UserController@index');
    Route::get('users/{id}', 'admin\UserController@show')->name('admin.users.show');
    Route::delete('users/{id}', 'admin\UserController@delete')->name('admin.users.show');

    Route::resource('courses', 'admin\CoursesController')->except('show');

});


Route::middleware(['auth'])->prefix('users')->group(function () {

    Route::get('/', 'users\UsersController@index');
    Route::get('profile', 'users\ProfileController@index')->name('users.profile');
    Route::put('profile/{id}', 'users\ProfileController@profileupdate')->name('users.profile.profileupdate');

    Route::get('password', 'users\PasswordController@index')->name('users.password');
    Route::put('password', 'users\PasswordController@update')->name('users.password.update');

    Route::middleware(['instructor'])->group(function () {

        Route::resource('courses', 'instructor\CoursesController');
        Route::resource('sections', 'instructor\SectionsController');
        Route::resource('lessons', 'instructor\LessonsController');

    });

});

