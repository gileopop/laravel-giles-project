<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Support\WrestlersControllerInterface;

class KennyOmegaController extends Controller implements WrestlersControllerInterface
{
    public function info() {
        $info = [
            'name' => 'Kenny Omega',
            'billedFrom' => 'North Carolina, USA',
            'height' => '6 ft',
            'weight' => '218 lbs',
            'signature' => 'V Trigger',
            'finisher' => 'One-Winged Angel'
        ];

        $info = (object) $info;

        return view('wrestlers.profile', [
            'info' => $info
        ]);
    }
}
