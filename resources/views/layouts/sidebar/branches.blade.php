<x-admin-layout style="background-color:blue">
    
<link rel="stylesheet" type="text/css" href="{{asset('/Assets/style3.css')}}"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Branches') }}
        </h2>
</x-slot>


    
    
<!--Sidebar-->

<input type="checkbox" id="check">
    <label for="check">
    <i class="fa fa-bars" id="btn"></i>
    <i class="fa fa-times" id="cancle"></i>
    </label>

    <div class="sidebar" style="margin-top:1px; height: 720px;">
    <header><img src="{{asset('/ava.png')}}" style="margin-left:60px;" />
    <p>Student</p>
    </header>
<ul>
    <li class="list"><a href="/dashboard"><i class="fa fa-chart-line"></i> Dashboard</a></li>
    <li class="list2"><a href="/branch"class="active"><i class="fa fa-building"></i>Branches</a></li>
    <li class="list3"><a href="/teachersdata"><i class="fa fa-chalkboard-teacher"></i>Teachers</a></li>
    <li class="list4"><a href="/studentsdata"><i class="fas fa-graduation-cap"></i>My Students</a></li>
    <li class="list5"><a href="/announcement"><i class="fa fa-bullhorn"></i>Announcement</a></li>
    <li style="margin-left:20px;"><a href="/calender"><i class="fas fa-calendar"></i>Calendar</a></li>
    <li class="list7"><a href="/labpro"><i class="fas fa-music"></i>LAB Program</a></li>
    </ul> 
</div>

        <!-- branches-cards -->
        
        <div class="cards">
        <img src="building.png" alt="branch" style="width:50%; height:25%; margin-left:80px;">
        <h1>Sekip</h1>
        <p class="title">Teacher: 10 teachers
                    </br>Students: 100 students
                    </br>Level: PPC-1, HPC-3, PIN-2, KC-2
        </p>
        <p>Contact Info:</p>
        
        <a href="https://goo.gl/maps/wVJab1WHAECyP2aK9" class="button-branch">location</a>
        </div>

        <div class="cards-2" style="width:300px; height:280px;">
        <img src="building.png" alt="branch" style="width:53%; height:55%; margin-left:80px; ">
        <h1>Citra Wisata</h1>
        <p class="title">Teacher: 10 teachers
                    </br>Students: 100 students
                    </br>Level: PPC-1, HPC-3, PIN-2, KC-2
        </p>
        <p>Contact Info:</p>
        
        <a href="https://goo.gl/maps/eTpywFSXUoZzCAZXA" class="button-branch">location</a>
        </div>

        <div class="cards-3">
        <img src="building.png" alt="branch" style="width:50%; height:25%; margin-left:80px;">
        <h1>Marendal</h1>
        <p class="title">Teacher: 10 teachers
                    </br>Students: 100 students
                    </br>Level: PPC-1, HPC-3, PIN-2, KC-2
        </p>
        <p>Contact Info:</p>
        
        <a href="https://goo.gl/maps/QJz2YXgnt7pthdpP6" class="button-branch">location</a>
        </div>

</br>

        <div class="cards-4">
        <img src="building.png" alt="branch" style="width:50%; height:25%; margin-left:80px;">
        <h1>Garu</h1>
        <p class="title">Teacher: 10 teachers
                    </br>Students: 100 students
                    </br>Level: PPC-1, HPC-3, PIN-2, KC-2
        </p>
        <p>Contact Info:</p>
        
        <a href="https://goo.gl/maps/wVJab1WHAECyP2aK9" class="button-branch">location</a>
        </div>

        <div class="cards-5">
        <img src="building.png" alt="branch" style="width:50%; height:25%; margin-left:80px;">
        <h1>Karya</h1>
        <p class="title">Teacher: 10 teachers
                    </br>Students: 100 students
                    </br>Level: PPC-1, HPC-3, PIN-2, KC-2
        </p>
        <p>Contact Info:</p>
        
        <a href="https://goo.gl/maps/wVJab1WHAECyP2aK9" class="button-branch">location</a>
        </div>

        <div class="cards-6">
        <img src="building.png" alt="branch" style="width:50%; height:30%; margin-left:80px;">
        <h1>Bumi Asri</h1>
        <p class="title">Teacher: 10 teachers
                    </br>Students: 100 students
                    </br>Level: PPC-1, HPC-3, PIN-2, KC-2
        </p>
        <p>Contact Info:</p>
        
        <a href="https://goo.gl/maps/wVJab1WHAECyP2aK9" class="button-branch">location</a>
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
