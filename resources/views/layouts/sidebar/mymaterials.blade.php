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
    <p>Teacher</p>
    </header>
<ul>
    <li><a href="/myprofileteacher"><i class="fa fa-user"></i>My Profile</a></li>
    <li><a href="/mymaterials"><i class="fa fa-book"></i>My Materials </a></li>
    <!-- <li><a href="/mylessonplan"><i class="fa fa-file"></i>My Lesson Plan</a></li> -->
    <!-- <li><a href="myteacher"><i class="fas fa-chalkboard-teacher"></i>My Teacher</a></li> -->
    <li><a href="/announcementteacher"><i class="fa fa-bullhorn"></i>Announcement</a></li>
    <li><a href="/calenderteacher"><i class="fas fa-calendar"></i>Calendar</a></li>
    
    
    </ul> 
    </div>

    <div style="position:relative; margin-left:300px; margin-top:-220px; width:300px; height:100px; background-color:white; color:blue; padding:20px;">
    <a href="https://www.ixl.com/"><i class="fa fa-file"></i> Go to my ixls</a>
    </div>

    <div style="margin-top:-750px;">
        <div class="cards">
        <img src="music.png" alt="branch" style="width:50%; margin-left:60px;">
        <h1>Music Program</h1>
        
        
        <a href="/music" class="button-branch">Music and Worksheets</a>
        </div>

        <div class="cards-2">
        <img src="{{asset('/listening.png')}}" alt="branch" style="width:40%;  margin-left:90px;">

        <h1>Listening Comprehension</h1>
        <a href="/listeningcomp" class="button-branch" style="margin-top:28px;">Audio and Worksheet</a>
        </div>

        <div class="cards-3">
        <img src="movie.png" alt="branch" style="width:50%; height:50%; margin-left:60px; ">
        <h1>Movie Program</h1>
        <a href="/movie" class="button-branch">Movie and worksheet</a>
        </div>

</br>

        <div class="cards-4">
        <img src="vlog.png" alt="branch" style="width:61%; margin-left:60px; margin-right:40px;">
        <h1>Video Blogging</h1>
        <a href="/vlog" class="button-branch">Procedure</a>
        </div>

        <div class="cards-5">
        <img src="speaking.png" alt="branch" style="width:50%; margin-top:10px; margin-left:70px;">
        <h1>Speaking News anchor and Story Telling</h1>
        <a href="/speaking" class="button-branch">Script</a>
        </div>

        <div class="cards-6">
        <img src="pro.png" alt="branch" style="width:50%; margin-left:95px; margin-top:29px;">
        <h1>Pronunciation</h1>
        <a href="/pronunciation" class="button-branch">Word List</a>
        </div>

</div>


</x-teacher-layout>
