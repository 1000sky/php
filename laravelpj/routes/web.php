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

/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/{text?}', function ($text = "テキスト") {
    return $text . "が表示されます" ;
});

Route::get('/test/{room}/{id}', function ($room, $id){
    return 'roomが' . $room . 'でidは' . $id . 'です' ;
});

Route::get('/test/{greeting}', function ($greeting){
    return $greeting . '=おはようございます' ;
});
*/

use App\Http\Controllers\TestController;
use App\Http\Middleware\FirstMiddleware;
/*Route::get('/test', [TestController::class, 'index']);

Route::get('/{msg?}', [TestController::class, 'index']);*/

/*Route::get('/', function (){
    return view('index');
});
*/

/*Route::get('/', [TestController::class, 'index']);
*/
/*Route::get('/{param}', [TestController::class, 'index']);
*/

Route::get('/', [TestController::class, 'index']);
Route::post('/', [TestController::class, 'post']);