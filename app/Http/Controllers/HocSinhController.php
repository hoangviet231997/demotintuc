<?php

namespace App\Http\Controllers;
use App\HocSinh;
use Illuminate\Http\Request;
use DB;

class HocSinhController extends Controller
{
    public function index() {
        $hocsinh=HocSinh::all();
        return view('restful.list',['hocsinh' => $hocsinh]);
    }

    public function create() {
        return view('restful.add');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'txtHoTen' => 'string|required|max:255',
            'txtToan' => 'integer|required|max:10',
            'txtLy' => 'integer|required|max:10',
            'txtHoa' => 'integer|required|max:10',
            'images' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        $hocsinh = new HocSinh();
        $hocsinh->hoten = $request->txtHoTen;
        $hocsinh->toan = $request->txtToan;
        $hocsinh->ly = $request->txtLy;
        $hocsinh->hoa = $request->txtHoa;

        $file=$request->file('images');
        $file_name=$file->getClientOriginalName('images');
        $hocsinh->avata =$file->move('public/restful/img',$file_name);

        $hocsinh->save();
        return redirect()->route('hocsinh.index');
    }
    public function show($id) {
        
    }

    public function update($id, Request $request) {
        $this->validate($request, [
            'txtHoTen' => 'string|required|max:255',
            'txtToan' => 'integer|required|max:10',
            'txtLy' => 'integer|required|max:10',
            'txtHoa' => 'integer|required|max:10',
        ]);

        $hocsinh =HocSinh::find($id);
        $hocsinh->hoten = $request->txtHoTen;
        $hocsinh->toan = $request->txtToan;
        $hocsinh->ly = $request->txtLy;
        $hocsinh->hoa = $request->txtHoa;

        $file=$request->file('images');
        $file_name=$file->getClientOriginalName('images');
        $hocsinh->avata =$file->move('public/restful/img',$file_name);

        $hocsinh->save();
        return redirect()->route('hocsinh.index');
    }

    public function destroy($id) {
        $hocsinh=HocSinh::find($id)->delete();

        return redirect()->route('hocsinh.index');
        
    }

    public function edit($id) {
     
        $hocsinh=HocSinh::find($id);
        
        return view('restful.edit',['hocsinh' => $hocsinh]);

        
    }
}
