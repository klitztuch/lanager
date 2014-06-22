<?php

/*
|--------------------------------------------------------------------------
| Route Patterns
|--------------------------------------------------------------------------
*/

Route::pattern('event', '[0-9]+');
Route::pattern('playlist', '[0-9]+');
Route::pattern('item', '[0-9]+');
Route::pattern('achievements', '[0-9]+');
Route::pattern('award', '[0-9]+');
Route::pattern('lan', '[0-9]+');

/*
|--------------------------------------------------------------------------
| Users
|--------------------------------------------------------------------------
*/
Route::resource('users', 'Zeropingheroes\Lanager\UsersController');
Route::resource('role-assignments', 'Zeropingheroes\Lanager\RoleAssignmentsController');

/*
|--------------------------------------------------------------------------
| Sessions
|--------------------------------------------------------------------------
*/
Route::resource('sessions', 'Zeropingheroes\Lanager\SessionsController');
Route::get('login', array('as' => 'sessions.login', 'uses' => 'Zeropingheroes\Lanager\SessionsController@create'));
Route::get('logout', array('as' => 'sessions.logout', 'uses' => 'Zeropingheroes\Lanager\SessionsController@destroy'));

/*
|--------------------------------------------------------------------------
| Info Pages
|--------------------------------------------------------------------------
*/
Route::resource('infopages', 'Zeropingheroes\Lanager\InfoPagesController');

/*
|--------------------------------------------------------------------------
| Shouts
|--------------------------------------------------------------------------
*/
Route::resource('shouts', 'Zeropingheroes\Lanager\ShoutsController');

/*
|--------------------------------------------------------------------------
| Statistics
|--------------------------------------------------------------------------
*/
Route::get(
	'statistics/applications/current-usage',
	array(
		'as' => 'statistics.applications.current-usage',
		'uses' => 'Zeropingheroes\Lanager\StatesController@currentApplicationUsage')
);
Route::get(
	'statistics/servers/current-usage',
	array(
		'as' => 'statistics.servers.current-usage',
		'uses' => 'Zeropingheroes\Lanager\StatesController@currentServerUsage')
);

/*
|--------------------------------------------------------------------------
| Events
|--------------------------------------------------------------------------
*/
Route::get('events/timetable', 
	array(
		'as' => 'events.timetable',
		'uses' => 'Zeropingheroes\Lanager\EventsController@timetable')
);
Route::get(
	'events/{event}/join',
	array(
		'as' => 'events.join',
		'uses' => 'Zeropingheroes\Lanager\EventsController@join')
);
Route::get(
	'events/{event}/leave',
	array(
		'as' => 'events.leave',
		'uses' => 'Zeropingheroes\Lanager\EventsController@leave')
);
Route::resource('events', 'Zeropingheroes\Lanager\EventsController');

/*
|--------------------------------------------------------------------------
| Playlists
|--------------------------------------------------------------------------
*/
Route::resource('playlists', 'Zeropingheroes\Lanager\PlaylistsController');
Route::resource('playlists.items', 'Zeropingheroes\Lanager\Playlists\ItemsController');
Route::resource('playlists.items.votes', 'Zeropingheroes\Lanager\Playlists\Items\VotesController');

/*
|--------------------------------------------------------------------------
| Achievements
|--------------------------------------------------------------------------
*/
Route::resource('achievements', 'Zeropingheroes\Lanager\AchievementsController');
Route::resource('awards', 'Zeropingheroes\Lanager\AwardsController');

/*
|--------------------------------------------------------------------------
| Index
|--------------------------------------------------------------------------
*/
Route::get('/', function()
{
	return Redirect::to('shouts');
});