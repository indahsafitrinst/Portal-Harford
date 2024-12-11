<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index()
    {
        $student = DB::table('students')->get();
        return view('admin.users.index',['students' => $student]);
        
    }

    public function input(){
        return view('admin.users.input_student');
    }
    public function update($id){
        $student = DB::table('students')->where('id',$id)->get();
        return view('admin.users.update_student',['students' => $student]);
    }
public function update_data(Request $request)
{
    $student = DB::table('students');
    $file = $request->file('image');
    $file->move("Assets/image/student/",$file->getClientOriginalName());
    DB::table('students')->where('id',$request->id)->update([
        'images' => $file->getClientOriginalName(),
        'name' => $request->name,
        'gender' => $request->gender,
        'dateofbirth' => $request->dateofbirth,
        'placeofbirth' => $request->placeofbirth,
        'address'=>$request->address,
        'religion'=>$request->religion,
        'telephone'=>$request->telephone,
        'school'=>$request->school,
        'program'=>$request->program,
        "parentsname"=>$request->parentsname

    ]);
    if($student){
        //redirect dengan pesan sukses
        return redirect('/studentsdata')->with(['success' => 'Data Berhasil Diupdate!']);
    }else{
        //redirect dengan pesan error
        return redirect('/studentsdata')->with(['error' => 'Data Gagal Diupdate!']);
    }
}

public function data_student(Request $request)
{
    $student = DB::table('students');
     $file = $request->file('image');
    $file->move("Assets/image/student/",$file->getClientOriginalName());
    DB::table('students')->insert([
        'images' => $file->getClientOriginalName(),
        'name' => $request->name,
        'gender' => $request->gender,
        'dateofbirth' => $request->dateofbirth,
        'placeofbirth' => $request->placeofbirth,
        'address'=>$request->address,
        'religion'=>$request->religion,
        'telephone'=>$request->telephone,
        'phone'=>$request->phone,
        'school'=>$request->school,
        'note'=>$request->note,
        'program'=>$request->program,
        'parentsname'=>$request->parentsname

    ]);
    if($student){
        //redirect dengan pesan sukses
        return redirect('/studentsdata')->with(['success' => 'Data Berhasil Disimpan!']);
    }else{
        //redirect dengan pesan error
        return redirect('/studentsdata')->with(['error' => 'Data Gagal Disimpan!']);
    }
}

public function delete($id){
    $student = DB::table('students');
    DB::table('students')->where('id',$id)->delete();
    if($student){
        //redirect dengan pesan sukses
        return redirect('/studentsdata')->with(['success' => 'Data Berhasil Dihapus!']);
    }else{
        //redirect dengan pesan error
        return redirect('/studentsdata')->with(['error' => 'Data Gagal Dihapus!']);
    }
}
}
