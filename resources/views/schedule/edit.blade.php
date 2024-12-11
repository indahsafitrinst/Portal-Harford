<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data schedule</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('schedule.update', $schedule->id) }}" method="POST" enctype="multipart/form-data">
                        
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label class="font-weight-bold">LEVEL</label>
                                <input type="text" class="form-control @error('level') is-invalid @enderror" name="level" value="{{ old('level', $schedule->level) }}" placeholder="Masukkan Nama level">
                            
                                <!-- error message untuk schedule -->
                                @error('level')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">TEACHER</label>
                                <input type="text" class="form-control @error('teacher') is-invalid @enderror" name="teacher" value="{{ old('teacher', $schedule->teacher) }}" placeholder="Masukkan Jumlah teacher">
                            
                                <!-- error message untuk teachers -->
                                @error('teacher')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">GROUP</label>
                                <input type="text" class="form-control @error('group') is-invalid @enderror" name="group" value="{{ old('group', $schedule->group) }}" placeholder="Masukkan Jumlah Group (A:SENIN, RABU, JUM'AT B:SELASA, KAMIS, SABTU)">
                            
                                <!-- error message untuk students -->
                                @error('group')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">BRANCH</label>
                                <input type="text" class="form-control @error('branch') is-invalid @enderror" name="branch" value="{{ old('branch', $schedule->branch) }}" placeholder="Masukkan Jumlah Branch">
                            
                                <!-- error message untuk students -->
                                @error('branch')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">TOTAL</label>
                                <input type="text" class="form-control @error('total') is-invalid @enderror" name="total" value="{{ old('total', $schedule->total) }}" placeholder="Masukkan Jumlah Total">
                            
                                <!-- error message untuk students -->
                                @error('total')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>

                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'content' );
</script>
</body>
</html>