<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Support\WrestlersControllerInterface;

class PacController extends Controller implements WrestlersControllerInterface
{
    public function info() {
        $info = [
            'name' => 'PAC',
            'billedFrom' => 'Newcastle Upon Tyne, UK',
            'height' => '5 ft 8 inches',
            'weight' => '194 lbs',
            'signature' => 'Pump Kick',
            'finisher' => 'Black Arrow'
        ];
        
        $info = (object) $info;

        return view('wrestlers.profile', [
            'info' => $info
        ]);
    }
}
