<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\UserModel;

class UserController extends Controller
{
    public $userModel;
    public $kelasModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->kelasModel = new Kelas();
    }

    public function profile($nama = "", $kelas = "", $npm = "")
    {
        $data = [
            'nama' => $nama,
            'kelas' => $kelas,
            'npm' => $npm,
            'jurusan' => $jurusan,
            'semester' => $semester,
           ];

     return view('profile', $data);
}

public function store(Request $request)
{
    // Validasi input
    $request->validate([
        'nama' => 'required|string|max:255',
        'npm' => 'required|string|max:255',
        'kelas_id' => 'required|integer',
        'jurusan' => 'required|string|max:255',
        'semester' => 'required|integer|min:1|max:8',
        'foto' => 'image|file|max:2048',
    ]);

    // Meng-handle upload foto
    if ($request->hasFile('foto')) {
        $foto = $request->file('foto');
        $fotoName = time() . '_' . $foto->getClientOriginalName();
        // Menyimpan file foto di folder 'uploads'
        $fotoPath = $foto->move(public_path('upload/img'), $fotoName);
    } else {
        $fotoPath = null;
        }

    // Menyimpan data ke database termasuk path foto
    $this->userModel->create([
        'nama' => $request->input('nama'),
        'npm' => $request->input('npm'),
        'jurusan' => $request->input('jurusan'),
        'semester' => $request->input('semester'),
        'kelas_id' => $request->input('kelas_id'),
        'foto' => $fotoName, // Menyimpan path foto
    ]);

    return redirect()->to('/user')->with('success', 'User
    berhasil ditambahkan');
    }


public function create(){
    $kelas = $this->kelasModel->getKelas();

    $data = [
        'title' => 'Create User',
        'kelas' => $kelas,
        ];

    return view('create_user', $data);
    }

    public function index()
    {
        $data = [
        'title' => 'Create User',
        'users' => $this->userModel->getUser(),
    ];
        return view('list_user', $data);
    }

    public function show($id){
        $user = $this->userModel->getUser($id);

        $data = [
            'title' => 'Profile',
            'user' => $user,
        ];

        return view('profile', $data);
    }

    public function edit($id){
        $user = UserModel::findOrFail($id);
        $kelasModel = new Kelas();
        $kelas = $kelasModel->getKelas();
        $title = 'Edit User';
        return view('edit_user', compact('user','kelas','title'));
    }

    public function update(Request $request, $id){
        $user = UserModel::findOrFail($id);

        $user->nama = $request->nama;
        $user->npm = $request->npm;
        $user->kelas_id = $request->kelas_id;

        if ($request->hasFile('foto')){
            $fotoName = time() . '.' . $request->foto->extension();
            $request->foto->move(public_path('upload/img/'), $fotoName);
            $user->foto = $fotoName;
        }
        $user->save();

        return redirect()->to('/user')->with('success', 'User updated succesfully');
    }

    public function destroy($id){
        $user = UserModel::findOrFail($id);
        $user->delete();

        return redirect()->to('/user')->with('success', 'User has been deleted succesfully.');
    }

}
