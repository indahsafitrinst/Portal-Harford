<x-admin-layout style="background-color:blue">
    
<link rel="stylesheet" type="text/css" href="{{asset('/Assets/style3.css')}}"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Announcement') }}
        </h2>
</x-slot>

<!-- ckeditor -->
<script type="text/javascript">
    CKEDITOR.replace('wysiwyg-editor', {
        filebrowserUploadUrl: "{{route('ckeditor.image-upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
</script>

    
<body style="height:100%;">
  
    
<!--Sidebar-->

<input type="checkbox" id="check">
    <label for="check">
    <i class="fa fa-bars" id="btn"></i>
    <i class="fa fa-times" id="cancle"></i>
    </label>

    <div class="sidebar" style=";margin-top:1px; height:1220px; padding-top:30px;">
    <header><img src="{{asset('/ava.png')}}" style="margin-left:60px;" />
    <p>Admin</p>
    </header>
<ul style="padding-top:50px;">
    <li class="list"><a href="/schedule"><i class="fa fa-chart-line"></i>Dashboard</a></li>
    <li class="list2"><a href="/branch"><i class="fa fa-building"></i>Branches</a></li>
    <li class="list3"><a href="/teachersdata"><i class="fa fa-chalkboard-teacher"></i>Teachers</a></li>
    <li class="list4"><a href="/studentsdata"><i class="fas fa-graduation-cap"></i>My Students</a></li>
    <li class="list5"><a href="/announcement"class="active"><i class="fa fa-bullhorn"></i>Announcement</a></li>
    <li class="list6"><a href="/calender"><i class="fas fa-calendar"></i>Calendar</a></li>
    <li class="list7"><a href="/labpro"><i class="fas fa-music"></i>LAB Program</a></li>
    </ul> 
</div>

    
<!-- announcement-box -->

        <div class="row" style="margin-top:0px;">
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

             <div class="container" style="width:805px; height:500px; margin-left:5px;">
        <div class="row">
            <div class="col-md-7 offset-3 mt-4">
                <div class="card-body">
                    <form method="post" action="" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <textarea class="ckeditor form-control" name="wysiwyg-editor"></textarea>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>   
   

           
    </div>



               
        
<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
</script>

<script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
</script>
    

    
</x-admin-layout>
</body>