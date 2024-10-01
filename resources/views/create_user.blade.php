@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6"> 
            <div class="form-container">
                <h2 class="form-title">Form Data Mhs</h2>

                <form action="{{ route('user.store') }}" method="POST">
                    @csrf

        <div class="mb-3">
            <label for="nama" class="form-label">Nama:</label>
            <input type="text" class="form-control" id="nama" name="nama">
            @foreach($errors->get('nama') as $msg)
            <p class="text-danger">{{ $msg }}</p>
            @endforeach
        </div>

        <div class="mb-3">
            <label for="npm" class="form-label">NPM:</label>
            <input type="text" class="form-control" id="npm" name="npm">
            @foreach($errors->get('npm') as $msg)
            <p class="text-danger">{{ $msg }}</p>
            @endforeach
        </div>

        <div class="mb-3">
            <label for="kelas_id" class="form-label">Kelas:</label><br>
            <select name="kelas_id" id="kelas_id" class="form-control" required>
                @foreach ($kelas as $kelasItem)
                <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                @endforeach
            </select>
        </div>

        <div class="d-grid">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection
