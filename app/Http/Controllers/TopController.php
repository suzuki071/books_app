<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        DB::table('book')->insert([
            'name' => 'suzuki',
            'explain' => (string)$request->msg
        ]);

        $data = [
            'name' => 'suzuki',
            'day'  => date('Y/m/d H:i:s'),
            'msg'  => $request->msg
        ];
        return view('top', $data);
    }
}
