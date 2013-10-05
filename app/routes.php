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
	return View::make('base', array(
        'currentmenu' => 'index',
        'content'     => View::make('index')
    ));
});

Route::get('/contato', function()
{
    return View::make('base', array(
        'currentmenu' => 'contact',
        'content'     => View::make('contact')
    ));
});

Route::get('/portfolio', function()
{
    return View::make('base', array(
        'currentmenu' => 'portfolio',
        'content' => View::make('portfolio')
    ));
});

Route::get('/portfolio/{id}', function($id)
{
    return View::make('base', array(
        'currentmenu' => 'portfolio',
        'content' => View::make('portfolio_item', App::make('Portfolio')->getProject($id)),
    ));
});

Route::get('/ajax/projects', function()
{
    header('Content-Type: application/json');
    die(json_encode(
        App::make('Portfolio')->getProjects()
    ));
});
