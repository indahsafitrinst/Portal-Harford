<x-teacher-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="margin-left:10px;">
            {{ __('Teacher') }}
        </h2>
    </x-slot>

    <div>
    <link rel="stylesheet" type="text/css" href="{{asset('/Assets/style2.css')}}"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
      
 
    <!--Sidebar-->

    <input type="checkbox" id="check">
    <label for="check">
    <i class="fa fa-bars" id="btn"></i>
    <i class="fa fa-times" id="cancle"></i>
    </label>

    <div class="sidebar" style="height:900px; position:relative;">
    <header><img src="{{asset('/ava.png')}}" style="margin-left:60px;" />
    <p>Student</p>
    </header>
<ul>
    <li><a href="/myprofileteacher"><i class="fa fa-user"></i>My Profile</a></li>
    <li><a href="/mymaterials"><i class="fa fa-book"></i>My Materials </a></li>
    <li><a href="/mylessonplan"><i class="fa fa-file"></i>My Lesson Plan</a></li>
    <!-- <li><a href="myteacher"><i class="fas fa-chalkboard-teacher"></i>My Teacher</a></li> -->
    <li><a href="/announcementteacher"><i class="fa fa-bullhorn"></i>Announcement</a></li>
    <li><a href="/calenderteacher"><i class="fas fa-calendar"></i>Calendar</a></li>
    
    
    </ul> 
    <h1 style="position:absolute; margin-top:-970px; margin-left:300px; size:2000px;"><b>WELCOME Teacher</b></h1>  
    </div>
</x-teacher-layout>
