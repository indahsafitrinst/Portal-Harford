<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SidebarController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function dashboard()
     {
         return view('dashboard');
     }

    public function branches()
    {
        return view('layouts.sidebar.branches');
    }
    public function teachersdata()
    {
        return view('layouts.sidebar.teachersdata');
    }
    public function studentsdata()
    {
        return view('layouts.sidebar.studentsdata');
    }

    public function labpro()
    {
        return view('layouts.sidebar.labpro');
    }

    public function announcement()
    {
        return view('layouts.sidebar.announcement');
    }
    public function calender()
    {
        return view('layouts.sidebar.calender');
    }
    
    // student page
    public function myprofile()
    {
        return view('layouts.sidebar.myprofile');
    }

    public function myreport()
    {
        return view('layouts.sidebar.myreport');
    }

    public function mylesson()
    {
        return view('layouts.sidebar.mylesson');
    }

    public function myteacher()
    {
        return view('layouts.sidebar.myteacher');
    }

    public function announcementstudent()
    {
        return view('layouts.sidebar.announcementstudent');
    }

    public function calenderstudent()
    {
        return view('layouts.sidebar.calenderstudent');
    }

    public function myprofileteacher()
    {
        return view('layouts.sidebar.myprofileteacher');
    }

    public function mymaterials()
    {
        return view('layouts.sidebar.mymaterials');
    }

    public function mylessonplan()
    {
        return view('layouts.sidebar.mylessonplan');
    }

    public function announcementteacher()
    {
        return view('layouts.sidebar.announcementteacher');
    }

    public function calenderteacher()
    {
        return view('layouts.sidebar.calenderteacher');
    }
}
