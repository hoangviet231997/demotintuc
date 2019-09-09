<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\login;

class AdminController extends Controller
{
   
    public function getAllUser() {
        $user=login::all();
        return view('admin',compact('user'));
    }
    public function getUpdaUser($id) {
        $edituser=login::find($id);
        return view('edit.sua',['edituser'=>$edituser]);
    }
    public function postUpdaUser(Request $request) {
        $this->validate($request, [
            'email' => 'email',
            'vat_number' => 'max:13',
            'password' => 'required|confirmed|min:6'
        ]);

        $updateuser=login::where('id',$request->id)->update(['password' => $request->password]);
        echo 'doi mat khau thanh cong';  
        return redirect('Page-Admin');    
  
    }   

    public function getDelUser($id) {
        $delid=login::find($id);
        return view('edit.xoa',['delid'=>$delid]);
    }
    public function postDelUser(Request $request) {
        $deluser=login::where('email',$request->email)->delete();
        return redirect('Page-Admin');
    }
   
}
