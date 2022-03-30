<?php

namespace App\Http\Controllers;

use App\Models\Mombasa;
use App\Models\Nairobi;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //

    public function index(){

        $mombasa = mombasa::count();
        $nairobi = nairobi::count();
        return response()->json(compact('mombasa','nairobi'));
    }
}
