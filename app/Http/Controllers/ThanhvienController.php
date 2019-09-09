<?php

namespace App\Http\Controllers;
use DB;
use Hash;
use Illuminate\Http\Request;
use App\thanhvien;


class ThanhvienController extends Controller
{
    public function store(Request $request) {
        $dataInput = $request->all();
        $add=thanhvien::create($dataInput);
        return $add;
    }
    public function showALL() {
        $show=thanhvien::all();
        return $show;
    }
    public function insert() {

        $array = [];
        $array[] = ['user' => 'viet' , 'password' => Hash::make('234')  , 'level' => '1'];
        $array[] = ['user' => 'ti' , 'password' => Hash::make('113')  , 'level' => '2' ,];
        $array[] = ['user' => 'teo' , 'password' => bcrypt(112244)  , 'level' => '3'];

        foreach ($array as $a) {
            $tv = new thanhvien;
            $tv->insert($a);
        } 

        // $inser=DB::table('thanhviens')->insert([
        //     'user' => 'viet' , 'password' => Hash::make('234')  , 'level' => '1' ,
        //     'user' => 'ti' , 'password' => Hash::make('113')  , 'level' => '2' ,
        //     'user' => 'teo' , 'password' => bcrypt(112244)  , 'level' => '3'  // Hash::make = bcrypt
        // ]);
        // dd($inser);
       
    }
// public function getRegister () {
//     return view('auth.register');
// }
// public function postRegister (Request $request) {

//     return view('auth.register');
// }


}
