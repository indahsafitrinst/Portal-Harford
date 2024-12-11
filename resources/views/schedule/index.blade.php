<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Schedules</title>
    <link rel="stylesheet" type="text/css" href="{{asset('/Assets/style3.css')}}"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body style="background: lightgray">

    <x-admin-layout style="background-color:blue">
    
        <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Dashboard') }}
                </h2>
        </x-slot>
     
        <!--Sidebar-->
        
        <input type="checkbox" id="check">
            <label for="check">
            <i class="fa fa-bars" id="btn"></i>
            <i class="fa fa-times" id="cancle"></i>
            </label>
        
            <div class="sidebar" style="margin-top:-23px; height: 720px;">
            <header><img src="{{asset('/ava.png')}}" style="margin-left:60px;" />
            <p>Admin</p>
            </header>
        <ul>
            <li class="list"><a href="/schedule" class="active"><i class="fa fa-chart-line"></i> Dashboard</a></li>
            <li class="list2"><a href="/branch"><i class="fa fa-building"></i>Branches</a></li>
            <li class="list3"><a href="/teachersdata"><i class="fa fa-chalkboard-teacher"></i>Teachers</a></li>
            <li class="list4"><a href="/studentsdata"><i class="fas fa-graduation-cap"></i>My Students</a></li>
            <li class="list5"><a href="/announcement"><i class="fa fa-bullhorn"></i>Announcement</a></li>
            <li style="margin-left:20px;"><a href="/calender"><i class="fas fa-calendar"></i>Calendar</a></li>
            <li class="list7"><a href="/labpro"><i class="fas fa-music"></i>LAB Program</a></li>
            </ul> 
        </div>
        

    <style type="text/css">
		.pagination li{
			float: left;
			list-style-type: none;
			margin:5px;
		}
	</style>

<div class="container mt-1" style=" margin-left:270px; margin-top:-800px; width:1000px; padding-bottom:138px;">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <x-jet-button class="ml-10 mt-8" style=" background-color:rgb(40,155,255); height:40px;  margin-top:-100px; margin-bottom:10px;">
                            <a href="{{ route('schedule.create') }}" style="color:white;"><i class="fas fa-user-plus" style="margin-left:-5px;"> </i> ADD  
                    </a>  </x-jet-button> 
                        <table class="table table-bordered">
                            <thead>
                                <tr style=" background-color:rgb(40,155,255)">
                                    <th scope="col">LEVEL</th>
                                    <th scope="col">TEACHER</th>
                                    <th scope="col">GROUP</th>
                                    <th scope="col">BRANCH</th>
                                    <th scope="col">TOTAL</th>
                                    <th scope="col">AKSI</th>
                              </tr>
                            </thead>
                            <tbody>
                                @forelse ($schedules as $schedule)
                                <tr>
                                    <td>{{ $schedule->level }}</td>
                                    <td>{{ $schedule->teacher }}</td>
                                    <td>{{ $schedule->group }}</td>
                                    <td>{{ $schedule->branch }}</td>
                                    <td>{!! $schedule->total !!}</td>
                                    <td class="border" style="border-radius:200% " width="100px" height="100px">
                                        <button style="background-color:blue; width:35px; border-radius:10px; margin-top:3px; display:inline-block;"><a href="{{ route('schedule.edit', $schedule->id) }}" style="color:white;"><i class="fas fa-edit"></i></a></button>
                                          
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('schedule.destroy', $schedule->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button style="background-color:red; width:35px; border-radius:10px; margin-top:3px; display:inline-block;"><a href="{{ route('schedule.destroy', $schedule->id) }}" style="color:white;"><i class="fas fa-trash-alt"></i></a> </button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <div class="alert alert-danger">
                                    Data Schedules belum Tersedia.
                                </div>
                            @endforelse
                          </tbody>
                        </table>
                        <div class="container mt-5">
                            <div class="container mt-5">
                                {!! $schedules->appends(['sort' => 'science-stream'])->links() !!}
                            </div>
                        </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

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
</body>
</html>