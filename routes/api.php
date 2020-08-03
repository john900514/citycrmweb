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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'client'], function() {
    Route::get('{client_id}/mobile/{app_id}/notifications/push', 'API\Clients\MobileApps\Notifications\PushNotificationsAPIController@getFiltersFromClient');
    Route::post('{client_id}/mobile/{app_id}/notifications/push/users', 'API\Clients\MobileApps\Notifications\PushNotificationsAPIController@getUsersFromFilters');
    Route::get('{client_uuid}/budgets', 'API\Clients\Ads\ClientAdBudgetAPIController@get_all_budget_data');
    Route::get('{client_uuid}/budgets/market/{name}', 'API\Clients\Ads\ClientAdBudgetAPIController@get_budget_data_for_market');
    Route::get('{client_uuid}/budgets/club/{club_id}', 'API\Clients\Ads\ClientAdBudgetAPIController@get_budget_data_for_club');
});
