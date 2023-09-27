<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;


class InstallController extends Controller
{

    /**
     * Handle the incoming request.
     *
     * // @param  \Illuminate\Http\Request  $request
     *  @return \Illuminate\Contracts\Foundation\Application
     * @return \Illuminate\Http\RedirectResponse
     */

    public function __invoke(/*Request $request*/)
    {
        if (!app()->isProduction()) {
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
            return redirect('/');
        }
        return report('its allowed when the application is in the production environment.');
    }
}
