@extends('layouts.app')

@section('content')

<div class="container">
    <a href="{{ route('users.create') }}" class="btn btn-primary mb-3">Tambah Pengguna Baru</a>

    <div class="row">
        @foreach ($users as $user)
            <div class="col-md-4 mb-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('upload/img/' . $user->foto) }}" alt="Foto User" style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $user->nama }}</h5>
                        <p class="card-text">{{ $user->npm }}</p>
                        <p class="card-text">{{ $user->nama_kelas }}</p>
                        <p class="card-text">{{ $user->jurusan }}</p>
                        <p class="card-text">{{ $user->semester }}</p>
                        <a href="{{ route('users.show', $user->id) }}" class="btn btn-primary btn-sm">View</a>
                        <a href="{{ route('user.edit', $user->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('user.destroy', $user->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Apakah Anda yakin ingin menghapus user ini?')">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection
