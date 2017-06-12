
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

Route::get('/', function () {
//    echo date('Y-m-d H:i:s', time() );
//    echo Config::get('app.timezone');
//    echo env('DB_HOST');
//    dd(config('database.connections'));
//    echo config('app.timezone');
//    return view('hello');
//       echo  phpinfo();
//    dd($_ENV);
//    dd(config('database.mysql'));
//    return view('login');
});
Route::get('blog', 'BlogController@index');
Route::get('blog/list', 'BlogController@list');
Route::get('blog/login', ['as' => 'login111', 'uses' => 'BlogController@login']);
Route::get('blog/show', 'BlogController@show');
//Route::get('blog', 'BlogController@index')->name('index');



Route::post('/about', function () {
    return ('about');
});
Route::get('login', function () {
    return view('login');
});

Route::post('reg', function (){
    return view('reg');
});


Route::match(['get', 'post'], '/', function ()
{
    return '这是match访问方法';
});

Route::any('any', function () {
    return '这是any方式的路由';
});

