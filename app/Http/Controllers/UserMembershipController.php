<?php

namespace App\Http\Controllers;
use App\UserMembership;
use Illuminate\Http\Request;
class UserMembershipController extends Controller
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

    public function store(Request $request)
    {
        return $request->all();
    }
}
