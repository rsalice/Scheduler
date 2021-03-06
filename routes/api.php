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
Route::post('auth', 'AuthenticateController@authenticate');

Route::get('home/user', 'HomeController@user');
Route::get('home/tasks', 'HomeController@tasks');
Route::get('home/trending', 'HomeController@trending');

Route::get('task/tags', 'TaskController@tagSearch');
Route::get('task/users', 'TaskController@userSearch');
Route::get('task/taks/tags', 'TaskController@tagTask');
Route::get('task/task/users', 'TaskController@associations');
Route::get('task', 'TaskController@show');
Route::post('task', 'TaskController@create');
Route::put('task', 'TaskController@update');
Route::delete('task', 'TaskController@delete');

Route::get('profile/user', 'ProfileController@user');
Route::get('profile/tasks', 'ProfileController@tasks');

Route::get('circle/circles', 'CircleController@circles');
Route::get('circle/members', 'CircleController@members');
Route::post('circle/create', 'CircleController@create');
Route::put('circle/rename', 'CircleController@renameCircle');
Route::post('circle/add', 'CircleController@addUser');
Route::delete('circle/circle', 'CircleController@deleteCircle');
Route::delete('circle/member', 'CircleController@deleteUser');

Route::get('approve/pending', 'ApproveController@pending');
Route::get('approve/approved', 'ApproveController@approved');
Route::put('approve/approve', 'ApproveController@approve');
Route::put('approve/disapprove', 'ApproveController@removeApproval');
Route::delete('approve/delete', 'ApproveController@deleteRequest');

Route::get('settings', 'SettingsController@get');
Route::put('settings', 'SettingsController@set');
