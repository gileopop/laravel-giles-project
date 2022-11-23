<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use WrestlersControllerInterface;

class WrestlersController extends Controller
{
    // Wrestlers home page
    public function index()
    {
        return view('wrestlers.index');
    }
}
