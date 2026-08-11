<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MajorController extends Controller
{
    public function index()
    {
        $title = "Sistem Sekolah - Daftar Jurusan";
        $majors = [
            [
                'id' => 1,
                'nis' => '1001',
                'name' => 'Andi',
                'class' => 'XII TKJ 3',
                'major' => 'TKJ'
            ],
            [
                'id' => 2,
                'nis' => '1002',
                'name' => 'Budi',
                'class' => 'XII TKJ 2',
                'major' => 'TKJ'
            ],
        ];

        return view ('majors.index', [
            'title' => $title,
            'majors' => $majors
        ]);
    }

       
    

    public function show(string $id)
    {
        $title = "Sistem Sekolah - Detail jurusan";
        $description = "Menampilkan daftar siswa yang terdaftar";
        
        return view('majors.show', [
            'title' => $title,
            'description' => $description,
        ]);
    }

    public function create()
    {
        $title = "Sistem Sekolah - Menambahkan jurusan";
        $description = "Menampilkan daftar siswa yang terdaftar";

        return view('majors.create', [
            'title' => $title,
            'description' => $description,
        ]);
    } 

    public function edit(string $id)
    {
        $title = "Sistem Sekolah - Edit jurusan";
        $description = "Menampilkan daftar siswa yang terdaftar";

        return view('majors.edit', [
            'title' => $title,
            'description' => $description,
        ]);
    } 

    public function store()
    {
        return "Menambah data jurusan baru";
    } 

    public function update(string $id)
    {
        return "Mengubah data jurusan dengan ID: {$id}";
    }

    public function destroy(string $id)
    {
        return "Menghapus data jurusan dengan ID: {$id}";
    }
}