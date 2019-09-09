<?php

namespace App\Exports;

use App\thanhvien;
use Maatwebsite\Excel\Concerns\FromCollection;

class Export extends FromCollection
{
    public function collection()
    {
        return thanhvien::all();
    }
}
