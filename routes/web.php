<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CmsController;

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
    return view('home');
});
// Route::get('/home',[CmsController::class,'home']);
Route::get('/vission',[CmsController::class,'vission']);
// Route::get('/email',[CmsController::class,'Email']);
Route::post('/myMail',[CmsController::class,'myMail']);
Route::get('/MailPage',[CmsController::class,'MailPage']);
Route::get('/smail',[CmsController::class,'smail']);
Route::get('/Registration',[CmsController::class,'Register']);
Route::post('/savaRegister',[CmsController::class,'savaRegister']);

//Admin Page
Route::get('/Admin/image_gallery',[CmsController::class,'Image'])->name('images.add');;
//for storing an image
Route::post('/storeImage',[CmsController::class,'storeImage']);
//display image 
Route::get('/Admin/image_management',[CmsController::class,'viewImage'])->name('images.view');;
Route::get('/Admin/Aheader',[CmsController::class,'Aheader']);
Route::get('/Admin/Afooter',[CmsController::class,'Afooter']);