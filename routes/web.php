<?php

use App\Test;
use App\Container;
use App\TestFacade;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // return Request::input('name');
    return View::make('welcome');
});

Route::get('container',function(){
    $container = new Container();

    $container->bind('test',function(){
        return new Test('name');
    });

    dd($container->resolve('test')->something());
});

Route::get('real/container',function(Test $test){
    dd(resolve('test')->something());
});//this won't work because of constructor method in App\Test.php

Route::get('facade',function(){
    return TestFacade::writeName();
    return TestFacade::excute();
});
