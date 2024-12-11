<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Branches</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('branch.store') }}" method="POST" enctype="multipart/form-data">
                        
                            @csrf


                            <div class="form-group">
                                <label class="font-weight-bold">BRANCH</label>
                                <input type="text" class="form-control @error('branch') is-invalid @enderror" name="branch" value="{{ old('branch') }}" placeholder="Masukkan Nama Branch">
                            
                                <!-- error message untuk branch -->
                                @error('branch')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">TEACHERS</label>
                                <input type="text" class="form-control @error('teachers') is-invalid @enderror" name="teachers" value="{{ old('teachers') }}" placeholder="Masukkan Jumlah teachers">
                            
                                <!-- error message untuk teachers -->
                                @error('teachers')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">STUDENTS</label>
                                <input type="text" class="form-control @error('students') is-invalid @enderror" name="students" value="{{ old('students') }}" placeholder="Masukkan Jumlah students">
                            
                                <!-- error message untuk students -->
                                @error('students')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">LEVEL</label>
                                <textarea class="form-control @error('level') is-invalid @enderror" name="level" rows="5" placeholder="Masukkan Level">{{ old('level') }}</textarea>
                            
                                <!-- error message untuk level -->
                                @error('level')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
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