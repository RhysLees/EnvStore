<?php

use App\Http\Resources\ProjectCollection;
use App\Http\Resources\TeamCollection;
use App\Http\Resources\UserCollection;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/user', function (Request $request) {
        return [
        'id' => $request->user()->id,
        'name' => $request->user()->name,
        'email' => $request->user()->email,
        'profile_photo_url' => $request->user()->profile_photo_url,
        'created_at' => $request->user()->created_at,
        'updated_at' => $request->user()->updated_at,
        ];
    });

    Route::get('/teams', function (Request $request) {
        return new TeamCollection($request->user()->allTeams());
    });

    Route::get('team/{team}/projects', function (Request $request, Team $team) {

        $projects = $team->projects;

        return new ProjectCollection($projects);
    });
});
