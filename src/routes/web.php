<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|  'Illuminate\\Support\\Facades\\Artisan'
*/

Route::get('/', function () {
    return view('app')->with([
        'ambassadorProfiles' => 'App\Models\AmbassadorProfile'::all()->toJson(/*JSON_PRETTY_PRINT*/),
        'products' => 'App\Models\Products'::all()->toJson(/*JSON_PRETTY_PRINT*/)
    ]);
});

Route::get('/installOrReset', function () {

    $files = File::allFiles(storage_path('framework/sessions/'));

    foreach ($files as $file) {
        $f = $file->getFilename();
        if ($f != '.gitignore') {
            File::delete(storage_path('framework/sessions/' . $f));
        }
    }

    putenv("APP_KEY=");

    Artisan::call('optimize:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    Artisan::call('optimize:clear');
    Artisan::call('event:clear');
    Artisan::call('cache:clear');
    Artisan::call('clear-compiled');
    Artisan::call('view:clear');
    Artisan::call('cache:clear'); // IF SESSION_DRIVER=redis

    Artisan::call('key:generate');
    Artisan::call('migrate');
    Artisan::call('db:seed --class=AmbassadorProfileTableSeeder');
    Artisan::call('db:seed --class=ProductsTableSeeder');

    return 'ok';
});

Route::get('/welcome', function () {
    return view('welcome');
});
