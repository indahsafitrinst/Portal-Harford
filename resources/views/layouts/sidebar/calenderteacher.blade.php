<x-teacher-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="margin-left:10px;">
            {{ __('Teacher') }}
        </h2>
    </x-slot>


    <div>
    <link rel="stylesheet" type="text/css" href="{{asset('/Assets/style3.css')}}"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
      
 
    <!--Sidebar-->

    <input type="checkbox" id="check">
    <label for="check">
    <i class="fa fa-bars" id="btn"></i>
    <i class="fa fa-times" id="cancle"></i>
    </label>

    <div class="sidebar" style="height:900px; position:relative; margin-top:1px;">
    <header><img src="{{asset('/ava.png')}}" style="margin-left:60px;" />
    <p>Teacher</p>
    </header>
<ul>
    <li><a href="/myprofileteacher"><i class="fa fa-user"></i>My Profile</a></li>
    <li><a href="/mymaterials"><i class="fa fa-book"></i>My Materials </a></li>
    <!-- <li><a href="/mylessonplan" ><i class="fa fa-file"></i>My Lesson Plan</a></li> -->
    <!-- <li><a href="myteacher"><i class="fas fa-chalkboard-teacher"></i>My Teacher</a></li> -->
    <li><a href="/announcementteacher"class="active"><i class="fa fa-bullhorn"></i>Announcement</a></li>
    <li><a href="/calenderteacher"><i class="fas fa-calendar"></i>Calendar</a></li>
    
    
    </ul> 
    
    </div>
    
<!-- announcement-box -->
<div class="calendar-box" style="position:relative; margin-top:-870px;">
<iframe src="https://calendar.google.com/calendar/embed?src=harfordinstituteportal%40gmail.com&ctz=Asia%2FJakarta" style="border: 0" width="900" height="600" frameborder="0" scrolling="no"></iframe>        </div>




</x-teacher-layout>
