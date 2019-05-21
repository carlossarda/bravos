<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/allCharacters', 'Api\CharacterController@allCharacters');
Route::get('/character/{id}', 'Api\CharacterController@character');

Route::get('/religions', 'Api\ReligionController@allReligions');
Route::get('/religion/{id}', 'Api\ReligionController@religion');

Route::get('/realms', 'Api\RealmController@allRealms');
Route::get('/realm/{id}', 'Api\RealmController@realm');

Route::get('/regions', 'Api\RegionController@allRegions');
Route::get('/region/{id}', 'Api\RegionController@region');

Route::get('/currency', 'Api\CurrencyController@allCurrencies');
Route::get('/currency/{id}', 'Api\CurrencyController@currency');

Route::get('/disadvantages', 'Api\DisadvantageController@allDisadvantages');
Route::get('/disadvantage/{id}', 'Api\DisadvantageController@disadvantage');

Route::get('/advantages', 'Api\AdvantageController@allAdvantages');
Route::get('/advantage/{id}', 'Api\AdvantageController@advantage');

Route::get('/status', 'Api\StatusController@allStatus');
Route::get('/status/{id}', 'Api\StatusController@status');

Route::get('/professions', 'Api\ProfessionController@allProfessions');
Route::get('/profession/{id}', 'Api\ProfessionController@profession');

Route::get('/races', 'Api\RaceController@allRaces');
Route::get('/race/{id}', 'Api\RaceController@race');