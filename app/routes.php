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
	$testVar = array(
		'var1' => array(
			'subvar1' => array(
				'subsubvar1' => array(
					'subsubsubvar1' => array(
						'Hey'
					),
				),
			),
		),
		'var2' => array(
			'subvar2' => array(
				'subsubvar2' => array(
					'subsubsubvar2' => array(
						'Hey'
					),
				),
			),
		),
		'var3' => array(
			'subvar3' => array(
				'subsubvar3' => array(
					'subsubsubvar3' => array(
						'Hey'
					),
				),
			),
		),
	);

	return View::make('hello')->with('testVar', $testVar);
});