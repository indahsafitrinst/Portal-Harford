<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class ScheduleController extends Controller
{    
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $schedules = Schedule::latest()->paginate(2);
        return view('schedule.index', compact('schedules'));
    }
    
    /**
     * create
     *
     * @return void
     */
    public function create()
    {
        return view('schedule.create');
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
            'level'     => 'required',
            'teacher'   => 'required',
            'group'   => 'required',
            'branch'   => 'required',
            'total'   => 'required'
        ]);


        $schedule = Schedule::create([
            'level'     => $request->level,
            'teacher'     => $request->teacher,
            'group'     => $request->group,
            'branch'   => $request->branch,
            'total'   => $request->total

        ]);

        if($schedule){
            //redirect dengan pesan sukses
            return redirect()->route('schedule.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('schedule.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }
    
    /**
     * edit
     *
     * @param  mixed $schedule
     * @return void
     */
    public function edit(Schedule $schedule)
    {
        return view('schedule.edit', compact('schedule'));
    }
    
    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $schedule
     * @return void
     */
    public function update(Request $request, Schedule $schedule)
    {
        $this->validate($request, [
            'level'     => 'required',
            'teacher'   => 'required',
            'group'   => 'required',
            'branch'   => 'required',
            'total'   => 'required'
        ]);

        //get data schedule by ID
        $schedule = Schedule::findOrFail($schedule->id);

       
            $schedule->update([
                'level'     => $request->level,
                'teacher'     => $request->teacher,
                'group'     => $request->group,
                'branch'   => $request->branch,
                'total'    => $request->total
            ]);
            
            

        if($schedule){
            //redirect dengan pesan sukses
            return redirect()->route('schedule.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('schedule.index')->with(['error' => 'Data Gagal Diupdate!']);
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
        $schedule = Schedule::findOrFail($id);
        $schedule->delete();

        if($schedule){
            //redirect dengan pesan sukses
            return redirect()->route('schedule.index')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('schedule.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }

}
