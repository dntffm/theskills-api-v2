<?php

namespace App\Http\Controllers;

class StorageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    //

    public function index()
    {
        $file = storage_path('app/public/abstraksi.png');
        return File::get($file);
    }
}
