<?php



Route::get('/', function () {

    return view('welcome');

});
Route::get('/rezervari', 'RezervareController@index')->name('rezervari.index')->middleware('auth');  

Route::get('/rezervari/creaza','RezervareController@creaza')->name('rezervari.creaza');

Route::post('/rezervari','RezervareController@stocheaza')->name('rezervari.stocheaza');
   
Route::get('/rezervari/{id}','RezervareController@arata')->name('rezervari.arata')->middleware('auth');

Route::delete('/rezervari/{id}','RezervareController@sterge')->name('rezervari.sterge')->middleware('auth');
 
Auth::routes([

    'register'=> false
]);

Route::get('/home', 'HomeController@index')->name('home');
