<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ContactController;

// Admin Index Page
Route::get('/welcome', function () {
    return view('welcome');
});
// Admin Index Page

// *******************FRONTEND (SIR ROGIE)*****************

// UserIndex Page
Route::get('/', function () {
    return view('index');
});
// UserIndex Page

Route::get('/Ocassion/UserWedding', function () {
    return view('Ocassion/UserWedding');
});

Route::get('/Ocassion/UserValentine', function () {
    return view('Ocassion/UserValentine');
});

Route::get('/Ocassion/UserMothers', function () {
    return view('Ocassion/UserMothers');
});

Route::get('/Ocassion/UserFathers', function () {
    return view('Ocassion/UserFathers');
});

Route::get('/Ocassion/UserBirthday', function () {
    return view('Ocassion/UserBirthday');
});

Route::get('/Ocassion/UserBaby', function () {
    return view('Ocassion/UserBaby');
});

Route::get('/Flower/UserPeonies', function () {
    return view('Flower/UserPeonies');
});

Route::get('/Flower/UserCarnation', function () {
    return view('Flower/UserCarnation');
});

Route::get('/Flower/UserGerberas', function () {
    return view('Flower/UserGerberas');
});

Route::get('/Flower/UserLilies', function () {
    return view('Flower/UserLilies');
});

Route::get('/Flower/UserRose', function () {
    return view('Flower/UserRose');
});

Route::get('/UserContact', function () {
    return view('/UserContact');
});

Route::get('/UserAbout', function () {
    return view('/UserAbout');
});

Route::get('/UserSingle', function () {
    return view('/UserSingle');
});
// *******************FRONTEND (SIR ROGIE)*****************

// *******************BACKEND (SPENCER)*********************





// ADMIN USER PAGEEEEEEEEEEEEE

// create and display (User Page)
Route::get('/users', [UserController::class,'create_user_form']);
// create and display (User Page)

// create_user_getter (POST)
Route::post('/users', [UserController::class,'create_user_getter']);
// create_user_getter (POST)

// create_user_getter (PUT)
Route::put('/users/{id}', [UserController::class,'update_user_getter']);
// create_user_getter (PUT)

// delete_user_getter (DELETE)
Route::delete('/users/{id}', [UserController::class,'delete_user_getter']);
// delete_user_getter (DELETE)

// ADMIN USER PAGEEEEEEEEEEEEEE






// ADMIN PRODUCT PAGEEEEEEEEEEEEEEEE

// create and display (PRODUCT PAGE)
Route::get('/products',[ProductController::class, 'create_product_form']);
// create and display (PRODUCT PAGE)

// create_product_getter (POST)
Route::post('/products', [ProductController::class,'create_product_getter']);
// create_product_getter (POST)

// delete_product_getter (DELETE)
Route::delete('/products/{id}', [ProductController::class,'delete_product_getter']);
// delete_product_getter (DELETE)

// update_product_getter (PUT)
Route::put('/products/{id}', [ProductController::class, 'update_product_getter']);
// update_product_getter (PUT)

// ADMIN PRODUCT PAGEEEEEEEEEEEEEEEEEEEE






// ADMIN ORDER PAGEEEEEEEEEEEEEEE

// create and display (ORDER PAGE)
Route::get('/orders',[OrderController::class, 'create_order_form']);
// create and display (ORDER PAGE)

// create_order_getter (POST)
Route::post('/orders', [OrderController::class,'create_order_getter']);
// create_order_getter (POST)

// delete_product_getter (DELETE)
Route::delete('/orders/{id}', [OrderController::class,'delete_order_getter']);
// delete_product_getter (DELETE)

// update_order_getter (PUT)
Route::put('/orders/{id}', [OrderController::class, 'update_order_getter']);
// update_order_getter (PUT)

//  display (USERRRRRR ORDER PAGE)
Route::get('/userorders/{id}',[OrderController::class, 'user_order_detail']);
//  display (USERRRR ORDER PAGE)






// ADMIN PROFILE


// UPDATE and display (admin profile)
Route::get('/adminprofile/{id}', [UserController::class,'admin_profile']);
// UPDATE and display (admin profile)

// update_profile_getter (PUT)
Route::put('/adminprofile/{id}', [UserController::class,'update_profile_getter']);
// update_profile_getter (PUT)

// ADMIN PROFILE



// USER PROFILE

// UPDATE and display (admin profile)
Route::get('/userprofile/{id}', [UserController::class,'user_profile']);
// UPDATE and display (admin profile)

// update_profile_getter (PUT)
Route::put('/userprofile/{id}', [UserController::class,'user_profile_getter']);
// update_profile_getter (PUT)

// USER PROFILE






// LOGIN AND SIGNUPPPPPP

// register (SIGNUP)
Route::get('/signup', [UserController::class,'show_signup']);
// register (SIGNUP)

// post submit data (POST)
Route::post('/signup', [UserController::class,'signup_getter']);
// post submit data (POST)

// show login
Route::get('/login',[UserController::class, 'show_login']);
// show login

// Post submit data (POST)
Route::post('/login',[UserController::class, 'login_getter']);
// Post submit data (POST)

// logout admin
Route::get('/logout',[UserController::class, 'admin_logout']);
// logout admim

// logout user
Route::get('/userlogout',[UserController::class, 'user_logout']);
// logout user

// ADMIN ORDER PAGEEEEEEEEEEEEEEE










// CONTACT US CREATE AND DISPLAY

// USER_CONTACT_FORM DISPLAY
Route::get('/usercontact',[ContactController::class, 'user_contact_form']);
// USER_CONTACT_FORM DISPLAY

// CONTACT SUBMIT DATA (POST)
Route::post('/usercontact',[ContactController::class, 'user_contact_getter']);
// CONTACT SUBMIT DATA (POST)

// USER_CONTACT_FORM DISPLAY
Route::get('/admincontact',[ContactController::class, 'admin_contact']);
// USER_CONTACT_FORM DISPLAY

// CONTACT US CREATE AND DISPLAY

// *******************BACKEND (SPENCER)*********************