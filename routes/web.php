<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContestController;
use App\Http\Controllers\JoinController;
use App\Http\Controllers\CustomAuthController;

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

Route::get('/add', function () {
    return view('add');
});

Route::get('/detail', function () {
    return view('detail');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/comingsoon', function () {
    return view('comingsoon');
});

Route::get('/thankyou', function () {
    return view('thankyou');
});

Route::get('/how', function () {
    return view('how');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/refer', function () {
    return view('refer');
});




Route::get('/mycontest', [ JoinController::class, "mycontest" ]);
Route::get('/admin', [ JoinController::class, "admin" ]);

// Route::get('/login', function () {
//     return view('login');
// });

// Route::get('/register', function () {
//     return view('register');
// });

Route::get('/joinerlist', [ JoinController::class, "displayjoinerlist" ]);
Route::get('/join/{contestid}', [ JoinController::class, "join" ]);


Route::get('/', [ ContestController::class, "displaylist" ]);
Route::post('/addcontest', [ ContestController::class, "addcontest" ]);
Route::get('/update/{number}', [ ContestController::class, "update" ]);
Route::post('/updatecontest', [ ContestController::class, "updatecontest" ]);
Route::get('/deletecontest/{number}', [ ContestController::class, "deletecontest" ]);


//AUTH


Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('register', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
