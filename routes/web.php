<?php

use App\Http\Controllers\AgentController;
use App\Http\Controllers\DestinationController;
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
    $data['title'] = 'Cruise';
    return view('cruise',$data);
})->name('cruise');

Route::get('/brandwide', function () {
    $data['title'] = 'Brandwide';
    return view('brandwide',$data);
})->name('brandwide');

Route::get('/hotel', function () {
    $data['title'] = 'Hotel';
    return view('hotel',$data);
})->name('hotel');

Route::get('/villas', function () {
    $data['title'] = 'Villas';
    return view('villas',$data);
})->name('villas');

Route::get('/on-site', function () {
    $data['title'] = 'On-Site';
    return view('on-site',$data);
})->name('on-site');

Route::get('/insurance-addons', function () {
    $data['title'] = 'Insurance Addons';
    return view('insurance-addons',$data);
})->name('insurance-addons');

Route::get('/experiences-addons', function () {
    $data['title'] = 'Experiences Addons';
    return view('experiences-addons',$data);
})->name('experiences-addons');

Route::get('/helicopter-transportation', function () {
    $data['title'] = 'Helicopter Transportation';
    return view('helicopter-transportation',$data);
})->name('helicopter-transportation');

Route::get('/private-aviation-transportation', function () {
    $data['title'] = 'Private Aviation Transportation';
    return view('private-aviation-transportation',$data);
})->name('private-aviation-transportation');

Route::get('/rental-car-transportation', function () {
    $data['title'] = 'Rental Car Transportation';
    return view('rental-car-transportation',$data);
})->name('rental-car-transportation');

Route::get('/representation-company', function () {
    $data['title'] = 'Representation Company';
    return view('representation-company',$data);
})->name('representation-company');

Route::get('/yacht-transportation', function () {
    $data['title'] = 'Yacht Transportation';
    return view('yacht-transportation',$data);
})->name('yacht-transportation');


Route::get('/authenticated-page', function () {
    return view('authenticated-page');
})->name('authenticated-page');

Route::get('/destination/{slug}', [DestinationController::class,'index'])->name('destination');
Route::get('/review', [DestinationController::class,'review'])->name('review');
Route::get('/agents', [AgentController::class,'agents'])->name('agents');

