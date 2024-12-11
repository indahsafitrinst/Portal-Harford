<x-student-layout style="background-color:blue">
    
<link rel="stylesheet" type="text/css" href="{{asset('/Assets/style3.css')}}"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Announcement for Student') }}
        </h2>
</x-slot>



    
<body style="height:100%;">
  
    
<!--Sidebar-->

<input type="checkbox" id="check">
    <label for="check">
    <i class="fa fa-bars" id="btn"></i>
    <i class="fa fa-times" id="cancle"></i>
    </label>

    <div class="sidebar" style=";margin-top:1px; height:1220px; padding-top:30px;">
    <header><img src="{{asset('/ava.png')}}" style="margin-left:60px;" />
    <p>Student</p>
    </header>
<ul style="padding-top:30px;">
<li><a href="/myprofile"><i class="fa fa-user"></i>My Profile</a></li>
    <li><a href="/mylesson"><i class="fa fa-file"></i>My Lesson</a></li>
    <li><a href="/announcementstudent" class="active"><i class="fa fa-bullhorn"></i>Announcement</a></li>
    <li><a href="/calenderstudent"><i class="fas fa-calendar"></i>Calendar</a></li>
    
    </ul> 
</div>

    
<!-- announcement-box -->

        <div class="row" style="margin-top:0px;">
            <div class="leftcolumn">
                <div class="card">
                <h1>Student's Coaching</h1></br>
                <h5>Stude's termly event, November 1, 2021</h5>
                <img class="fakeimg" src="announcement.jpeg" style="height:400px; width">
                <p>Dear All students,</p>
                <p style="text-align:justify;">Best wishes,
                    I hope all of the Harford Institute students are in good health. Amen.
</br>
                    As an English language education institution, Harford Institute prioritizes the quality of every 
                    student who teaches in every class and branch, in order to realize the Harford Institute's vision,
                    namely "Educating and making students able and skilled in speaking English properly and preparing them
                    to become a generation of leaders. Indonesia's future".

<span id="dots">...</span><span id="more">
                    Therefore, in order to broaden the horizons and knowledge and increase the creativity of teaching staff 
                    within the Harford Institute in order to achieve the above vision, the Harford Institute Academic Department 
                    hereby notifies that a "student Coaching" will be held which will be held on:
                    </br></br>
                    Day/Date : Saturday, November 13, 2021
                    </br>
                    Venue: Harford Institute Karya Branch
 </br></br>
                    Participating in this activity is mandatory for all students at Harford Institute. This is our notification.
                    We thank you for your attention and cooperation. 
                    More about this source text</span></p>
                    <button onclick="myFunction()" id="myBtn">Read more</button>
                </div>

    </div>   
   

           
    </div>



               
        

    
</x-student-layout>
</body>