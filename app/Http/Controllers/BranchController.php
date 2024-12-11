<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class BranchController extends Controller
{    
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $branches = Branch::latest()->paginate(3);
        return view('branch.index', compact('branches'));
    }
    
    /**
     * create
     *
     * @return void
     */
    public function create()
    {
        return view('branch.create');
    }
    
    /**
     * store
     *
     * @param  mixed $request
     * @return void
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'branch'     => 'required',
            'teachers'   => 'required',
            'students'   => 'required',
            'level'   => 'required'
        ]);


        $branch = Branch::create([
            'branch'     => $request->branch,
            'teachers'     => $request->teachers,
            'students'     => $request->students,
            'level'   => $request->level
        ]);

        if($branch){
            //redirect dengan pesan sukses
            return redirect()->route('branch.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('branch.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }
    
    /**
     * edit
     *
     * @param  mixed $branch
     * @return void
     */
    public function edit(Branch $branch)
    {
        return view('branch.edit', compact('branch'));
    }
    
    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $branch
     * @return void
     */
    public function update(Request $request, Branch $branch)
    {
        $this->validate($request, [
            'branch'     => 'required',
            'teachers'     => 'required',
            'students'     => 'required',
            'level'   => 'required'
        ]);

        //get data Branch by ID
        $branch = Branch::findOrFail($branch->id);

       
            $branch->update([
                'branch'     => $request->branch,
                'teachers'     => $request->teachers,
                'students'     => $request->students,
                'level'   => $request->level
            ]);
            

        if($branch){
            //redirect dengan pesan sukses
            return redirect()->route('branch.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('branch.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }
    
    /**
     * destroy
     *
     * @param  mixed $id
     * @return void
     */
    public function destroy($id)
    {
        $branch = Branch::findOrFail($id);
        $branch->delete();

        if($branch){
            //redirect dengan pesan sukses
            return redirect()->route('branch.index')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('branch.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }

}
