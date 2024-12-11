<x-admin-layout style="background-color:blue">
    
<link rel="stylesheet" type="text/css" href="{{asset('/Assets/style3.css')}}"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Academic Calendar') }}
        </h2>
</x-slot>


    
    
<!--Sidebar-->

<input type="checkbox" id="check">
    <label for="check">
    <i class="fa fa-bars" id="btn"></i>
    <i class="fa fa-times" id="cancle"></i>
    </label>

    <div class="sidebar" style="margin-top:-40px; height: 700px; position:absolute;">
    <header><img src="{{asset('/ava.png')}}" style="margin-left:60px;" />
    <p>Admin</p>
    </header>
<ul>
    <li class="list"><a href="/schedule"><i class="fa fa-chart-line"></i> Dashboard</a></li>
    <li class="list2"><a href="/branch"><i class="fa fa-building"></i>Branches</a></li>
    <li class="list3"><a href="/teachersdata"><i class="fa fa-chalkboard-teacher"></i>Teachers</a></li>
    <li class="list4"><a href="/studentsdata"><i class="fas fa-graduation-cap"></i>My Students</a></li>
    <li class="list5"><a href="/announcement"><i class="fa fa-bullhorn"></i>Announcement</a></li>
    <li class="list6"><a href="/calender"class="active"><i class="fas fa-calendar"></i>Calendar</a></li>
    <li class="list7"><a href="/labpro"><i class="fas fa-music"></i>LAB Program</a></li>
    </ul> 
</div>

<div class="calendar-box" style="position:relative;">
<iframe src="https://calendar.google.com/calendar/embed?src=harfordinstituteportal%40gmail.com&ctz=Asia%2FJakarta" style="border: 0" width="900" height="600" frameborder="0" scrolling="no"></iframe>        </div>


    

    
</x-admin-layout>
