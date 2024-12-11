<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Students</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <a href="{{ route('student.create') }}" class="btn btn-md btn-success mb-3">TAMBAH STUDENTS</a>
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">IMAGE</th>
                                <th scope="col">NAME</th>
                                <th scope="col">GENDER</th>
                                <th scope="col">DATE OF BIRTH</th>
                                <th scope="col">PLACE OF BIRTH</th>
                                <th scope="col">ADDRESS</th>
                                <th scope="col">RELIGION</th>
                                <th scope="col">TELEPHONE</th>
                                <th scope="col">SCHOOL</th>
                                <th scope="col">PROGRAM</th>
                                <th scope="col">PARENT'S NAME</th>
                                <th scope="col">PHONE</th>
                                <th scope="col">NOTE</th>
                                <th scope="col">AKSI</th>
                              </tr>
                            </thead>
                            <tbody>
                              @forelse ($students as $student)
                                <tr>
                                    <td class="text-center">
                                        <img src="{{ Storage::url('public/students/').$student->image }}" class="rounded" style="width: 150px">
                                    </td>
                                    <td>{{ $student->name }}</td>
                                    <td>{{ $student->gender }}</td>
                                    <td>{{ $student->dateofbirth }}</td>
                                    <td>{{ $student->placeofbirth }}</td>
                                    <td>{{ $student->address }}</td>
                                    <td>{{ $student->religion}}</td>
                                    <td>{{ $student->telephone }}</td>
                                    <td>{{ $student->school }}</td>
                                    <td>{{ $student->program }}</td>
                                    <td>{{ $student->parentsname }}</td>
                                    <td>{{ $student->phone }}</td>
                                    <td>{{ $student->note }}</td>
                                   
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('student.destroy', $student->id) }}" method="POST">
                                            <a href="{{ route('student.edit', $student->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form>
                                    </td>
                                </tr>
                              @empty
                                  <div class="alert alert-danger">
                                      Data student belum Tersedia.
                                  </div>
                              @endforelse
                            </tbody>
                          </table>  
                          {{ $students->links() }}
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

</body>
</html>