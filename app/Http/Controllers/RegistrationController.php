<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function registration(Request $request)
    {
        $this->validate($request, [
            'name'  =>  'required',
            'email' =>  'required|email'
        ]);

        return response()->json([
            'status'    =>  [
                'code'  =>  '200',
                'description'   =>  'OK'
            ],
            'results'   =>  [
                'message'   =>  'Registrasi berhasil.',
                'data'  =>  [
                    'name'  =>  $request->name,
                    'email' =>  $request->email
                ],
            ]
        ]);
    }
}
