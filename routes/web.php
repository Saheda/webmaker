<?php
use App\newspost;

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
route::get('readmore','NewspostController@read');

Auth::routes();
Route::group(['middleware' => ['auth']], function () { 


Route::get('/home', 'HomeController@index')->name('home');

route::get('profile','CustomersController@profile');
route::get('signup','signupController@index');
route::post('profile','CustomersController@profile');
route::get('newslist','CustomersController@news');
route::get('post/index','NewspostController@index');
route::post('post','NewspostController@store');
route::get('newsportal','NewsportalController@index');
route::post('newsportal','NewsportalController@store');
route::get('news','NewspostController@show');
route::get('listview','NewspostController@create');
route::get('newslist/{id}','NewspostController@edit');
route::post('edit','NewspostController@update');
route::get('news/{id}','NewspostController@destroy');
Route::get('mail/send', 'NewspostController@send');
Route::post('search', 'NewspostController@search');
route::get('search/index','NewspostController@shown');
        
route::get('ticketform','TicketController@index');                  
route::post('ticketform','TicketController@store');                  
	   	   
	   
	   
	   


          } );
