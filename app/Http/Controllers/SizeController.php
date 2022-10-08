<?php

namespace App\Http\Controllers;

class SizeController extends Controller
{
    public function codeToSize(string $code): string
    {
        return $this->parseCode(strtoupper($code));
    }

    public function parseCode(string $code): string
    {
        $sizes = [
            'AD' => '15\'\'',
            'AE' => '16\'\'',
            'AF' => '17\'\'',
        ];
        if (!in_array($code, array_keys($sizes))) {
            return 'Unknown';
        }
        else {
            return $sizes[$code];
        }
    }
}
