<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('{{ asset("assets/img/back.jpg") }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg p-3 mb-5 bg-white rounded ">
                <div class="card-body text-center">

                    <img src="{{ asset('assets/img/catto.jpg') }}" alt="Cat" class="rounded-circle mb-3" style="width: 150px; height: 150px; object-fit: cover;">


                    <div class="bg-secondary text-white rounded-pill p-2 mb-3">
                        <p>{{$nama}}</p>
                    </div>

                    <div class="bg-secondary text-white rounded-pill p-2 mb-3">
                    <p>{{$npm}}</p>
                    </div>

                    <div class="bg-secondary text-white rounded-pill p-2 mb-3">
                    <p>{{$nama_kelas ?? 'Kelas tidak ditemukan'}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
