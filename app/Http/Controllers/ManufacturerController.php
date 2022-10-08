<?php

namespace App\Http\Controllers;

class ManufacturerController extends Controller
{
    public function codeToManufacturer(string $code): string
    {
        return $this->manufacturerDatabase(strtoupper($code));
    }

    public function manufacturerDatabase(string $code): string
    {
        $manufacturers = [
            'E0' => 'Chongging Hension',
            'E1' => 'Chung Hsing',
            'E2' => 'Bridgestone Brazil',
            '01' => 'China Manufacturers Alliance'
        ];
        if (!in_array($code, array_keys($manufacturers))) {
            return 'Unknown';
        }
        else {
            return $manufacturers[$code];
        }
    }
}
