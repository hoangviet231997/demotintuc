<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\login;

class LoginController extends Controller
{
    public function getDangKy() {
        return view('login.dangky');
    }
    public function postDangKy(Request $request) {
        $addlogin = new login();
        $addlogin->email = $request->email;
        $addlogin->password = $request->password;
        $addlogin->save();
        if($request->$addlogin=null) {
            return 'thu lai';
        }else return 'dang ky thanh cong';

    }

    public function getDangNhap() {
        return view('login.dangnhap');
    }
    public function postDangNhap(Request $request) {
        $setlogin=login::where('email',$request->email)->where('password',$request->password)
                        ->get();
        if($setlogin=0) {
            return 'dang nhap lai';    
        }else return 'dang nhap thanh cong' ;
    }

    public function getUpDate() {
        return view('login.update');
    }
    public function postUpdate(Request $request) {
        $update=login::where('email',$request->email)->where('password',$request->password)->first();
        if($update!=null) {
            $newpassword=login::where('email',$request->email)->update(['password'=>$request->newpassword]);
            echo 'doi mat khau thanh cong';
        }
        else 
        {
            return 'email hoac mat khau cu sai. vui long nhap lai';
        }

    }

    public function getDelete() {
        return view('login.delete');
    }
    public function postDelete(Request $request) {
        $deleteaccout=login::where('email',$request->email)->first();
        if($deleteaccout!=null){
            $deleteaccout=login::where('email',$request->email)->delete();
            echo 'XOA THANH CONG';
        }else echo 'nhap DUNG email can xoa';
    }
}
