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
    
/*
 | Les subpagines de serveis s'han retirat: el contingut viu a /serveis.
 | Eren URL indexades, per aixo redirigim 301 en comptes de deixar-les en 404.
 */
Route::permanentRedirect('/depilacio', '/serveis');
Route::permanentRedirect('/analitiques', '/serveis');
Route::permanentRedirect('/analitiquesCovid', '/serveis');
Route::permanentRedirect('/revisions', '/serveis');

/*
 | URLs amb accent de la web antiga. Es van perdre en el deploy del 29/09 i donaven
 | 404: /fisioteràpia era la 4a pàgina amb mes impressions a Search Console
 | (2.812 impressions i 55 clics en cinc mesos). Les dades s'han tret amb tools/gsc.
 */
Route::permanentRedirect('/fisioteràpia', '/fisioterapia');
Route::permanentRedirect('/depilació', '/serveis');

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

/* Rutes legals */

Route::get('/avislegal', function () {
    return view('includes/avislegal');
});

Route::get('/politicadeprivacitat', function () {
    return view('includes/privacitat');
});

Route::get('/politicadecookies', function () {
    return view('includes/politicacookies');
});

Route::get('/termesdus', function () {
    return view('includes/termes');
});
