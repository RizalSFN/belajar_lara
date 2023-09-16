<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dataController extends Controller
{
    public function tampil()
    {
        $data = DB::table('datawarga')->get();
        return view('Home',['datawarga' => $data]);
    }
}
