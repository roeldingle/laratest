<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


/*
test controller
> php -S localhost:8888 -t public
> php artisan create:controller TestController
add also forms & html
follow instructions here: http://laravelcollective.com/docs/5.1/html
view notes:
{{ $name }} - escape html - html will be converted
{!! $name !!} - not escape - html will be viewed

*/
Route::get('/', 'PagesController@index');
Route::get('home', 'PagesController@index');
Route::get('about', 'PagesController@about');





/*
	Employee controller

Route::get('employees', 'EmployeesController@index');
Route::get('employees/create', 'EmployeesController@create');
Route::get('employees/{id}', 'EmployeesController@show');

Route::post('employees', 'EmployeesController@store');

*/
Route::resource('employees','EmployeesController');
