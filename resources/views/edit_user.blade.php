@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="form-container">
                <h2 class="form-title">Edit Data</h2>

                <form action="{{ route('user.update', $user['id']) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

        <div class="mb-3">
            <label for="nama" class="form-label">Nama:</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama', $user->nama)}}">
        </div>

        <div class="mb-3">
            <label for="npm" class="form-label">NPM:</label>
            <input type="text" class="form-control" id="npm" name="npm" value="{{ old('npm', $user->npm)}}">
        </div>

        <div class="mb-3">
            <label for="kelas_id" class="form-label">Kelas:</label><br>
            <select name="kelas_id" id="kelas_id" class="form-control" required>
                @foreach ($kelas as $kelasItem)
                <option value="{{ $kelasItem->id }}"
                {{ $kelasItem->id == $user->kelas_id ? 'selected' : ''}}>
                {{ $kelasItem->nama_kelas}}
                </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="foto" class="form-label">Foto:</label><br>
            <input type="file" id="foto" name="foto" class="form-control"><br>
            @if($user->foto)
            <img src="{{ asset('upload/img/' . $user->foto) }}" alt="User Photo" width="100" class="mt-2">
            @endif
        </div><br>

        <div class="d-grid">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection
