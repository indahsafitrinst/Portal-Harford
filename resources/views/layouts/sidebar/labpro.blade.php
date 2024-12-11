<x-admin-layout style="background-color:blue">
    
<link rel="stylesheet" type="text/css" href="{{asset('/Assets/style3.css')}}"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lab Program') }}
        </h2>
</x-slot>


    
    
<!--Sidebar-->

<input type="checkbox" id="check">
    <label for="check">
    <i class="fa fa-bars" id="btn"></i>
    <i class="fa fa-times" id="cancle"></i>
    </label>

    <div class="sidebar" style="position:relative; padding-top:30px; margin-top:1px;">
    <header><img src="{{asset('/ava.png')}}" style="margin-left:60px;" />
    <p>Admin</p>
    </header>
<ul style="padding-top:30px;">
    <li class="list"><a href="/schedule"><i class="fa fa-chart-line"></i> Dashboard</a></li>
    <li class="list2"><a href="/branch"><i class="fa fa-building"></i>Branches</a></li>
    <li class="list3"><a href="/teachersdata"><i class="fa fa-chalkboard-teacher"></i>Teachers</a></li>
    <li class="list4"><a href="/studentsdata"><i class="fas fa-graduation-cap"></i>My Students</a></li>
    <li class="list5"><a href="/announcement"><i class="fa fa-bullhorn"></i>Announcement</a></li>
    <li class="list6"><a href="/calender"><i class="fas fa-calendar"></i>Calendar</a></li>
    <li class="list7"><a href="/labpro" class="active"><i class="fas fa-music"></i>LAB Program</a></li>
    </ul> 
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

        

<script>
// Get the elements with class="column"
var elements = document.getElementsByClassName("column");

// Declare a loop variable
var i;

// List View
function listView() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.width = "100%";
  }
}

// Grid View
function gridView() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.width = "50%";
  }
}

/* Optional: Add active class to the current button (highlight it) */
var container = document.getElementById("btnContainer");
var btns = container.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>

    

    
</x-admin-layout>
