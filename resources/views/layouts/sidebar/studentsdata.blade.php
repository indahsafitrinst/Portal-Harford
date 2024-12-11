<x-admin-layout style="background-color:blue">
    
<link rel="stylesheet" type="text/css" href="{{asset('/Assets/style3.css')}}"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Students') }}
        </h2>
</x-slot>


    
    
<!--Sidebar-->

<input type="checkbox" id="check">
    <label for="check">
    <i class="fa fa-bars" id="btn"></i>
    <i class="fa fa-times" id="cancle"></i>
    </label>

    <div class="sidebar" style="margin-top:-15px; height: 700px;">
    <header><img src="{{asset('/ava.png')}}" style="margin-left:60px;" />
    <p>Admin</p>
    </header>
<ul>
    <li class="list"><a href="/schedule"><i class="fa fa-chart-line"></i> Dashboard</a></li>
    <li class="list2"><a href="/branch"><i class="fa fa-building"></i>Branches</a></li>
    <li class="list3"><a href="/teachersdata"><i class="fa fa-chalkboard-teacher"></i>Teachers</a></li>
    <li class="list4"><a href="/studentsdata"class="active"><i class="fas fa-graduation-cap"></i>My Students</a></li>
    <li class="list5"><a href="/announcement"><i class="fa fa-bullhorn"></i>Announcement</a></li>
    <li style="margin-left:20px;"><a href="/calender"><i class="fas fa-calendar"></i>Calendar</a></li>
    <li class="list7"><a href="/labpro"><i class="fas fa-music"></i>LAB Program</a></li>
    </ul> 
</div>

<div>
<style type="text/css">
    tbody tr:nth-child(even) 
    {
        background-color:rgb(245, 253, 255);
    }
</style>
     
<div width="80%" class="mt-4 " style="margin-left:260px; margin-top:1px; position:absolute;">
<div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                    <x-jet-button class="ml-4 mt-4" style=" background-color:rgb(40,155,255); height:50px;  margin-top:-10px; margin-bottom:10px;">
        <a href="/student/input_data" style="color:white;"><i class="fas fa-user-plus" style="margin-left:-5px;"> </i> ADD  
</a>  </x-jet-button> 
  <table class="border 5px">
  <thead>
    <tr style=" background-color:rgb(40,155,255)">
      <th class="border">No</th>
      <th width ="80px" height="80px"  class="border">Images</th>
      <th class="border">Name</th>
      <th class="border">Gender</th>
      <th class="border">Date of Birth</th>
      <th class="border">Place of Birth</th>
      <th class="border">Address</th>
      <th class="border">Religion</th>
      <th class="border">Telephone</th>
      <th class="border">School</th>
      <th class="border">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $student = DB::table('students')->paginate(3);
    $no=1; ?>
     
      @foreach($student as $row )
    <tr>
    <th class="border">{{ $loop->iteration }}</th>
      <td class="border"><center><img style="border-radius:200% " width="80%" height="80%" src="{{asset('Assets/image/student/'.$row->images) }} "/></center></td>
      <td class="border">{{ $row->name }}</td>
      <td class="border">{{ $row->gender }}</td>
      <td class="border">{{ $row->dateofbirth }}</td>
      <td class="border">{{ $row->placeofbirth }}</td>
      <td class="border">{{ $row->address }}</td>
      <td class="border">{{ $row->religion }}</td>
      <td class="border">{{ $row->telephone }}</td>
      <td class="border">{{ $row->school}}</td>
      <td class="border" style="border-radius:200% " width="100px" height="100px">
        <button style="background-color:blue; width:35px; border-radius:10px; margin-top:3px; display:inline-block;"><a href="/student/update/{{ $row->id }}" style="color:white;"><i class="fas fa-edit"></i></a></button>
          
        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="/student/delete/{{ $row->id }}" method="GET">
            @csrf
            @method('DELETE')
            <button style="background-color:red; width:35px; border-radius:10px; margin-top:3px; display:inline-block;"><a href="/student/delete/{{ $row->id }}" style="color:white;"><i class="fas fa-trash-alt"></i></a> </button>
        </form>
    </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
<div class="container mt-5">
{{ $student->links() }}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        //message with toastr
        @if(session()-> has('success'))
        
            toastr.success('{{ session('success') }}', 'BERHASIL!'); 

        @elseif(session()-> has('error'))

            toastr.error('{{ session('error') }}', 'GAGAL!'); 
            
        @endif
    </script>
</x-admin-layout>
