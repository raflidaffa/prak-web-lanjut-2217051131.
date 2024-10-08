@extends('layouts.app')

@section ('content')

<div class="container">
    <a href="{{ route('users.create') }}" class="btn btn-primary mb-3">Tambah Pengguna Baru</a>

    <div class="table-responsive">
        <table class="table table-bordered table-hover text-center">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>NPM</th>
                    <th>Kelas</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
            <?php
            foreach ($users as $user) {
                ?>
                <tr>
                <td><?= $user['id'] ?></td>
                <td><?= $user['nama'] ?></td>
                <td><?= $user['npm'] ?></td>
                <td><?= $user['nama_kelas'] ?></td>
                <td>
                    <img src="{{ asset('upload/img/' . $user->foto) }}" alt="Foto User" style="width: 150px;" >
                </td>
                <td>
                    <a href="{{ route('users.show', $user->id) }}" class="btn btn-primary btn-sm">View</a>
                </td>
                </tr>
                <?php
                }
            ?>
            </tbody>
        </table>
    </div>
</div>

@endsection