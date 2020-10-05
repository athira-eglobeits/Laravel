<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CustomerModel;
use Illuminate\Support\Facades\DB;

class Customer extends Controller
{
    function register(Request $req)
    {
        $customer = new CustomerModel;
        $customer->name = $req->name;
        $customer->email = $req->email;
        $customer->password = $req->password;
        $user = DB::table('customer_register')->where('email', $customer->email)->first();
        if ($user) {
            echo "User already exist";
        } else {
            $customer->save();
            return back()->with('alert', 'Insert Successfully!');
        }
    }

    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        $data = DB::select('select id from customer_register where email=? and password=?', [$email, $password]);
        if (count($data)) {
            echo "Welcome";
        } else {
            echo "Enter correct credentials";
        }
    }
}

