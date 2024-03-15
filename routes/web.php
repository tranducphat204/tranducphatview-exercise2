<?php

use Illuminate\Support\Facades\Route;
use App\Models\Fruit;
use App\Http\Controllers\FruitController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MyController;
use App\Http\Controllers\FormController;
use GuzzleHttp\Psr7\Request;
use App\Http\Controllers\PagesController;
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

// Route::get('/users', function () {
//     return view('users');
// });

// Route::get('/api/users', function () {
//     global $users;
//     return $users;
// });

// Route::get('/api/users/{userIndex}', function ($id) {
//     global $users;
//     if (array_key_exists($id, $users)) {
//         return $users[$id];
//     } else {
//         return 'Cannot find the user with index ' . $id;
//     }
// });

//Mission 5: Group routes
// Route::prefix('api')->group(function () {

//     Route::get('/users', function () {
//         global $users;
//         return $users;
//     });

//     Route::get('/users/{userIndex}', function ($id) {
//         global $users;
//         if (array_key_exists($id, $users)) {
//             return $users[$id];
//         } else {
//             return 'Yo can not get a user like this!';
//         }
//     });
// });

//Mission 6: Get posts
// Route::prefix('api')->group(function () {

//     Route::get('/users', function () {
//         global $users;
//         return $users;
//     });

//     Route::get('/users/{userIndex}', function ($userIndex) {
//         global $users;
//         if (array_key_exists($userIndex, $users)) {
//             return $users[$userIndex];
//         } else {
//             return 'You cannot get a user like this!';
//         }
//     });

//     Route::get('/users/{userIndex}/post/{postIndex}', function ($userIndex, $postIndex) {
//         global $users;
//         if (array_key_exists($userIndex, $users)) {
//             $user = $users[$userIndex];
//             if (array_key_exists($postIndex, $user['posts'])) {
//                 return $user['posts'][$postIndex];
//             } else {
//                 return 'Cannot find the post with id ' . $postIndex . ' for user ' . $userIndex;
//             }
//         } else {
//             return $users[$userIndex];
//         }
//     });
// });

// Route::get('/myview/{user}', function ($user) {
//     return view('home', ['username' => $user]);
// });

// Route::get('/fruits', function () {
//     return Fruit::all();
// });

Route::get('/showFruits', [FruitController::class, 'getFruits']);

// Route::get('goicontroller', [UserController::class,'xinChao']);

// Route::get('/my', [MyController::class, 'index']);
// Route::get('/my/create', [MyController::class, 'create']);
// Route::get('/my/1', [MyController::class, 'show']);
// Route::get('/my/1/edit', [MyController::class, 'edit']);

// Route::resource('my', MyController::class);

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', [HomeController::class, 'index']);
// Route::get('/san-pham', [HomeController::class, 'products']);

// Route::get('/admin/product/{id}', [HomeController::class, 'admin']);
// Route::get('/userIp', [HomeController::class, 'ipAddress']);

// Route::post('/post', function (Request $request){
//     dd($request->all());
// });

Route::post('/post', [FormController::class, 'store']);

// Route::post('/post', function(Request $request){
// $name = ($request->all('name', 'Phát Đẹp'));
// echo 'Name ' . $name
//     . '<br> UserName:  ' . ($request->input('username'))
//     . '<br> Password: ' . ($request->input('password', 123456));
// });

// Route::get('/themsanpham', [HomeController::class, 'getAdd']);
// Route::post('/them-san-pham', [HomeController::class, 'postAdd']);
// Route::put('/themsanpham', [HomeController::class, 'putAdd']);

Route::get('/test', function () {
    return view('test', ['name' => 'Phát đẹp trai vãi']);
});

Route::get('/form', function () {
    return view('form');
});

Route::post('/upload', [FormController::class, 'upload']);

Route::post('/post', [FormController::class, 'post']);

Route::get('/aboutme', [PagesController::class, 'aboutMe']);



//Template engine
// Route::get('/pnv1', function () {
//     return view('pnv', ['title' => "phatdeptrai", 'alertMessage' => 'Thông báo Đẹp Trai vãi']);
// }) -> name('home');

Route::get('/pnv1', function () {
    $posts = [
        ['name' => 'phatdeptrai'],
        ['name' => 'phatdeptrai2'],
        ['name' => 'phatdeptrai3'],
        ['name' => 'phatdeptrai4']
    ];
    return view('pnv', compact('posts'));
});

Route::get('/html', function () {
    return view('test');
});

Route::get('/view', function () {
    return view('luyentapview');
});