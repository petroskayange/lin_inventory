<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssertsController extends Controller
{
    public function index()
    {
        return view('asserts.computer_hardware');
    }
}
?>