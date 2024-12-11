<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeacherController extends Controller
{
    public function index()
    {
        $teacher = DB::table('teachers')->get();
        return view('admin.users.index',['teachers' => $teacher]);
    }

    public function input(){
        return view('admin.users.input_teacher');
    }
    public function update($id){
        $teacher = DB::table('teachers')->where('id',$id)->get();
        return view('admin.users.update_teacher',['teachers' => $teacher]);
    }
public function update_data(Request $request)
{
    $teacher = DB::table('teachers');
         $file = $request->file('image');
    $file->move("Assets/image/teacher/",$file->getClientOriginalName());
    DB::table('teachers')->where('id',$request->id)->update([
        'images' => $file->getClientOriginalName(),
        'name' => $request->name,
        'gender' => $request->gender,
        'dateofbirth' => $request->dateofbirth,
        'branch' => $request->branch,
        'note'=>$request->note
    ]);
    if($teacher){
        //redirect dengan pesan sukses
        return redirect('/teachersdata')->with(['success' => 'Data Berhasil Diupdate!']);
    }else{
        //redirect dengan pesan error
        return redirect('/teachersdata')->with(['error' => 'Data Gagal Diupdate!']);
    }
}

public function data_teacher(Request $request)
{
    $teacher = DB::table('teachers');
     $file = $request->file('image');
    $file->move("Assets/image/teacher/",$file->getClientOriginalName());
    DB::table('teachers')->insert([
        'images' => $file->getClientOriginalName(),
        'name' => $request->name,
        'gender' => $request->gender,
        'dateofbirth' => $request->dateofbirth,
        'branch' => $request->branch,
        'note'=>$request->note
    ]);
    if($teacher){
        //redirect dengan pesan sukses
        return redirect('/teachersdata')->with(['success' => 'Data Berhasil Disimpan!']);
    }else{
        //redirect dengan pesan error
        return redirect('/teachersdata')->with(['error' => 'Data Gagal Disimpan!']);
    }
}

public function delete($id){
    $teacher = DB::table('teachers');
    DB::table('teachers')->where('id',$id)->delete();
    if($teacher){
        //redirect dengan pesan sukses
        return redirect('/teachersdata')->with(['success' => 'Data Berhasil Dihapus!']);
    }else{
        //redirect dengan pesan error
        return redirect('/teachersdata')->with(['error' => 'Data Gagal Dihapus!']);
    }
}
}
