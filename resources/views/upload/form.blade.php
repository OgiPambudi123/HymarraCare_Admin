<!DOCTYPE html>
<html>
<head>
    <title>Laravel 9 Health Record Upload Example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
     
<div class="container">
    <div class="card mt-3 mb-3">
        <div class="card-header text-center">
            <h4>Hymarra Beauty Health Record</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('upload.file') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="file" class="form-label">Choose CSV File</label>
                    <input type="file" name="file" class="form-control" id="file">
                </div>
                <button class="btn btn-primary">Upload Health Record Data</button>
            </form>
  
            <table class="table table-bordered mt-3">
                <thead>
                    <tr>
                        <th colspan="4">
                            List Of Health Records
                        </th>
                    </tr>
                    <tr>
                        <th>Tanggal</th>
                        <th>ID User</th>
                        <th>Penyakit</th>
                        <th>Skincare</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($healthRecords as $record)
                    <tr>
                        <td>{{ $record->tgl }}</td>
                        <td>{{ $record->id_user }}</td>
                        <td>{{ $record->penyakit }}</td>
                        <td>{{ $record->skincare }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
  
        </div>
    </div>
</div>
     
</body>
</html>
