<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
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

Route::get('/k', function () {
  $name=request('na');
$message=request('me');
$email=request('em');

    return $name . "<br>". $email . "<br>" . $message .view('\welcome');
});



Route::get('/', [PageController::class, 'index']);
Route::resource('/contact', ContactController::class);

Route::get('/{page}',function($page){
if($page == 2){

    return view('\page.2');
}
elseif($page == 3){
    return view('\page.3');
}

elseif($page == 4){
    return view('\page.4');

}

});
/*
Route::get('/', function () {
    return view('\pq.kj.kkj');
});
Route::get('ttt', [PostController::class, 'page2'])->name('page2');
Route::get('/ppp',[PageCollector::class,'page3'])->name('page3');
Route::get('', [DataController::class,'index']);*/



