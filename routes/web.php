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
*/

Route::get('/', function () {
    return view('inici/index');
});

/* Rutes especialitats*/
Route::get('/especialitats', function () {
    return view('especialitats/index');
});
 
Route::get('/odontologia', function () {
    return view('especialitats/odontologia');
});

Route::get('/podologia', function () {
    return view('especialitats/podologia');
});

Route::get('/fisioterapia', function () {
    return view('especialitats/fisioterapia');
});

Route::get('/optometria', function () {
    return view('especialitats/optometria');
});

Route::get('/nutricio', function () {
    return view('especialitats/nutricio');
});

Route::get('/urologia', function () {
    return view('especialitats/urologia');
});

Route::get('/osteopatia', function () {
    return view('especialitats/osteopatia');
});

Route::get('/oftalmologia', function () {
    return view('especialitats/oftalmologia');
});

Route::get('/traumatologia', function () {
    return view('especialitats/traumatologia');
});

Route::get('/dermatologia', function () {
    return view('especialitats/dermatologia');
});

Route::get('/psicologia', function () {
    return view('especialitats/psicologia');
});

Route::get('/digestoleg', function () {
    return view('especialitats/digestoleg');
});

Route::get('/ortodoncista', function () {
    return view('especialitats/ortodoncista');
});

Route::get('/infermeria', function () {
    return view('especialitats/infermeria');
});

/* Rutes Serveis*/ 

Route::get('/serveis', function () {
    return view('serveis/serveis');
});
    
Route::get('/depilacio', function () {
    return view('serveis/depilacio');
});

Route::get('/analitiques', function () {
    return view('serveis/analitiques');
});

Route::get('/analitiquesCovid', function () {
    return view('serveis/analitiquesCovid');
});

Route::get('/revisions', function () {
    return view('serveis/revisions');
});

/* Rutes Mutues*/

Route::get('/mutues', function () {
    return view('mutues/mutues');
});

/* Rutes SobreCemav*/

Route::get('/sobreCemav', function () {
    return view('sobreCEMAV/sobreCemav');
});


/* Rutes Contacte*/

Route::get('/contacte', function () {
    return view('contactes/contacte');
});

/* Rutes PloticaDeCookies*/

Route::get('/politicadecookies', function () {
    return view('includes/politicacookies');
});


/* Proves*/
Route::get('/proves', function () {
    return view('proves');
});