<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\thanhvien;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
{
    public function ex() {
        return(thanhvien::all()) ;
    }
    public function export() {
        return Excel::download(new UsersExport, 'export.xlsx');
    }

}
