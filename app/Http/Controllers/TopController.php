<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopController extends Controller
{
    public function top(Request $request)
    {
        $data = [
            'name' => 'suzuki',
            'day'  => date('Y/m/d H:i:s'),
            'msg'  => ''
        ];
        return view('top', $data);
    }

    public function post(Request $request)
    {
        $data = [
            'name' => 'suzuki',
            'day'  => date('Y/m/d H:i:s'),
            'msg'  => $request->msg
        ];
        return view('top', $data);
    }
}
