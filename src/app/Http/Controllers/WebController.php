<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;


class WebController extends Controller
{
    /**
     * '/' Home page
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     *
     */
    public function index()
    {
        return view('app')->with([
        'ambassadorProfiles' => 'App\Models\AmbassadorProfile'::all()->toJson(/*JSON_PRETTY_PRINT*/),
        'products' => 'App\Models\Products'::all()->toJson(/*JSON_PRETTY_PRINT*/)
    ]);
    }
}
