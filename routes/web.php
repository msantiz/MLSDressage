<?php
//use App\Mail\ContactMail;
use App\Http\Controllers\ContactMailController;
//use Illuminate\Support\Facades\Mail;
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

Route::get('/tenyear', function () {
    return view('tenyear');
});

Route::get('/marketing', function () {
    return view('marketing');
});

Route::get('/education', function () {
    return view('education');
});

Route::get('/career', function () {
    return view('career');
});

Route::get('/awards', function () {
    return view('awards');
});

Route::get('/photos', function () {
    return view('photos');
});

Route::get('/contactus', function(){
    return view('contactus');
});

Route::get('/services', function(){
    return view('services');
});

//Route::get('/emailsend', function(){
    //return view('emailsend');
//});

Route::get('/contactus', 'App\Http\Controllers\ContactMailController@index');
Route::post('/sendemail/send', 'App\Http\Controllers\ContactMailController@send');



/*Route::middleware(['guest'])->group(function(){

    //Route::get('/contact2', [ContactMailController::class, 'index'])->name('contact2');
    
    Route::post('/contact2', [ContactMailController::class, 'contactSendMail'])->name('contact2.send');
    
    //Route::get('contact', [ContactMailController::class, 'index'])->name('contact');
    
    //Route::post('contact', [ContactMailController::class, 'contactSendMail'])->name('contact.send');
    
    
    });*/
