<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getIndex() {

        $data = [];
        $data['name'] = 'Ahmed';
        $data['age'] = '21';
        return view('welcome', $data);
    }
}
