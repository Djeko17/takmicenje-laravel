<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['Poruka: ' => $validator->errors()]);
        }

        $usr = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $tknReg = $usr->createToken('tkn_reg')->plainTextToken;

        return response()->json([
            'User info - ' => $usr,
            'Token - ' => $tknReg
        ]);
    }


    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['Poruka: ' => $validator->errors()]);
        }

        $usr = User::where('email', $request->email)->first();

        if (!$usr || !Hash::check($request->password, $usr->password)) {
            return response(['Poruka: ' => 'Greska!']);
        } else {

            $tknLog = $usr->createToken('tkn_log')->plainTextToken;

            return response()->json([
                'User info - ' => $usr,
                'Token - ' => $tknLog
            ]);
        }
    }


    public function logout()
    {
        auth()->user()->tokens()->delete();
        return response()->json(['Poruka: ' => 'Odjavljeni ste.']);
    }
}
