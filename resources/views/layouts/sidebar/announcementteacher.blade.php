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

<div class="row" style="margin-top:-900px;">
            <div class="leftcolumn">
                <div class="card">
                <h1>Teacher's Coaching</h1></br>
                <h5>Teacher's termly event, November 1, 2021</h5>
                <img class="fakeimg" src="announcement.jpeg" style="height:400px; width">
                <p>Dear All Teachers,</p>
                <p style="text-align:justify;">Best wishes,
                    I hope all of the Harford Institute Teachers are in good health. Amen.
</br>
                    As an English language education institution, Harford Institute prioritizes the quality of every 
                    teacher who teaches in every class and branch, in order to realize the Harford Institute's vision,
                    namely "Educating and making students able and skilled in speaking English properly and preparing them
                    to become a generation of leaders. Indonesia's future".

<span id="dots">...</span><span id="more">
                    Therefore, in order to broaden the horizons and knowledge and increase the creativity of teaching staff 
                    within the Harford Institute in order to achieve the above vision, the Harford Institute Academic Department 
                    hereby notifies that a "Teacher Coaching" will be held which will be held on:
                    </br></br>
                    Day/Date : Saturday, November 13, 2021
                    </br>
                    Venue: Harford Institute Karya Branch
 </br></br>
                    Participating in this activity is mandatory for all Teachers at Harford Institute. This is our notification.
                    We thank you for your attention and cooperation. 
                    More about this source text</span></p>
                    <button onclick="myFunction()" id="myBtn">Read more</button>
                </div> 


</x-teacher-layout>
