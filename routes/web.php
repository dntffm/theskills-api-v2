<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->group(['prefix' => 'api/v2'],function() use ($router) {
	$router->post('/register','AuthController@register');
	$router->post('/login','AuthController@login');
	$router->post('/logout','AuthController@logout');
	$router->post('/course/title/create','CourseController@createTitles');
	$router->post('/course/main/create','CourseController@createCourse');
	$router->get('/course/{title}','CourseController@getCourseByTitle');
	$router->post('/subcourse/create','SubcourseController@createSubcourse');
	$router->get('/subcourse/{course}','SubcourseController@getSubcourseByCourse');
	$router->post('/minicourse','MinicourseController@store');
	$router->get('/minicourse/{courseid}','MinicourseController@showByCourse');
	$router->get('/minicourse/id/{id}','MinicourseController@showById');
	$router->get('/webinar','WebinarController@getAll');
	$router->post('/webinar','WebinarController@store');
	$router->post('/webinar/register','WebinarController@registerWebinar');
	$router->get('/storage','StorageController@index');
});

