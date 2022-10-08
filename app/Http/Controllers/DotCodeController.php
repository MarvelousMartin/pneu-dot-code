<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DotCodeController extends Controller
{
    public function index() {
        return view('home');
    }

    public function fetch(Request $code) {
        $array = str_split(strtoupper($code->get('input')), 4);
        $first = substr($array[0], 0, 2);
        $second = substr($array[0], 2, 2);
        $third = $array[1];
        $fourth = substr($array[2], 0, 2);
        $fifth = substr($array[2], 2, 2);
        $manufacturer = (new ManufacturerController)->codeToManufacturer($first);
        $size = (new SizeController)->codeToSize($second);

        return view('result', [
            'first' => $first,
            'second' => $second,
            'third' => $third,
            'fourth' => $fourth,
            'fifth' => $fifth,
            'manufacturer' => $manufacturer,
            'size' => $size
        ]);
    }
}
