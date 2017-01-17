<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
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

    public function signin(Request $request) {
        return response()->json([
            'status' => 200, 'statusText' => 'OK'
        ]);
    }

    public function signup(Request $request) {
        return response()->json([
            'status' => 200, 'statusText' => 'OK'
        ]);
    }

    public function signout(Request $request) {
        return response()->json([
            'status' => 200, 'statusText' => 'OK'
        ]);
    }
}
