<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa;
        }
        .form-container {
            width: 400px;
            margin: 50px auto;
            padding: 30px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-title {
            margin-bottom: 20px;
            text-align: center;
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h2 class="form-title">Form Data Mhs</h2>

        <form action="{{ route('user.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="nama" class="form-label">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama">
                @foreach($errors->get('nama') as $msg)
                <p class ="text-danger">{{$msg}}</p>
                @endforeach
            </div>

            <div class="mb-3">
                <label for="npm" class="form-label">NPM:</label>
                <input type="text" class="form-control" id="npm" name="npm">
                @foreach($errors->get('npm') as $msg)
                <p class ="text-danger">{{$msg}}</p>
                @endforeach
            </div>

            <div class="mb-3">
                <label for="id_kelas" class="form-label">Kelas:</label><br>
                <select name="kelas_id" id="kelas_id" required>
                    @foreach ($kelas as $kelasItem)
                    <option value="{{$kelasItem->id}}">{{$kelasItem->nama_kelas}}</option>
                    @endforeach
                </select>
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>

</body>
</html>
