<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.
Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['web'],
    'namespace'  => 'CityCRM\Http\Controllers',
], function () { // custom admin routes
    Route::get('/login', 'Auth\LoginController@showLoginForm')->name('backpack.auth.login');
    //Route::get('/registration', 'Auth\LoginController@render_complete_registration');
});

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['web', config('backpack.base.middleware_key', 'admin')],
    'namespace'  => 'CityCRM\Http\Controllers',
], function () { // custom admin routes

    Route::group(['prefix' => 'dashboard'], function () {
        Route::get('/', 'Admin\DashboardController@index');
        Route::get('/widgets', 'API\Widgets\Reporting\ReportingWidgetsAPIController@get_dashboard_widgets');
    });

    Route::group(['prefix' => 'reports'], function () {
        Route::get('/{client_id}/kpi', 'API\Reports\KPIReportsAPIController@get_report');
    });

    Route::get('/abilities', 'Admin\InternalAdminJSONController@abilities');
    Route::get('/abilities/{role}', 'Admin\InternalAdminJSONController@role_abilities');
    Route::get('/roles/{client_id}', 'Admin\InternalAdminJSONController@client_roles');

    Route::group(['prefix' => 'push-notifications'], function () {
        Route::get('/', 'Admin\PushNotificationsController@index');
    });


    CRUD::resource('crud-users', 'Admin\UsersCrudController');
    CRUD::resource('crud-roles', 'Admin\RolesCrudController');
    CRUD::resource('crud-abilities', 'Admin\AbilitiesCrudController');
    CRUD::resource('crud-clients', 'Admin\ClientsCrudController');
    CRUD::resource('crud-mobile-apps', 'Admin\MobileAppCrudController');
    CRUD::resource('crud-ad-markets', 'Admin\AdMarketsCrudController');
    CRUD::resource('crud-ad-budgets', 'Admin\AdBudgetsCrudController');
}); // this should be the absolute last line of this file
