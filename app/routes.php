<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::match(array('GET', 'POST'), '/foo/bar', function()
{
	$url = URL::to('foo');
    return $url;
});

Route::match(array('GET', 'POST'), '/foo', function()
{
	$url = URL::to('foo');
    return 'Hello World';
});