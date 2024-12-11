<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LabproController extends Controller
{
    public function music()
    {
        return view('layouts.labpro.music');
    }

    public function listeningcomp()
     {
         return view('layouts.labpro.listeningcomp');
     }

    public function movie()
    {
        return view('layouts.labpro.movie');
    }
    public function vlog()
    {
        return view('layouts.labpro.vlog');
    }
    public function speaking()
    {
        return view('layouts.labpro.speaking');
    }

    public function pronunciation()
    {
        return view('layouts.labpro.pronunciation');
    }

}
