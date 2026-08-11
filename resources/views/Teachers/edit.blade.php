<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $title = "Sistem Sekolah - Daftar Guru";
        $teacher = [
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

        return view ('teachers.index', [
            'title' => $title,
            'teachers' => $teacher
        ]);
    }

       
    

    public function show(string $id)
    {
        $title = "Sistem Sekolah - Detail Guru";
        $description = "Menampilkan daftar guru yang terdaftar";
        
        return view('teachers.show', [
            'title' => $title,
            'description' => $description,
        ]);
    }

    public function create()
    {
        $title = "Sistem Sekolah - Menambahkan Guru";
        $description = "Menampilkan daftar guru yang terdaftar";

        return view('teachers.create', [
            'title' => $title,
            'description' => $description,
        ]);
    } 

    public function edit(string $id)
    {
        $title = "Sistem Sekolah - Edit Guru";
        $description = "Menampilkan daftar guru yang terdaftar";

        return view('teachers.edit', [
            'title' => $title,
            'description' => $description,
        ]);
    } 

    public function store()
    {
        return "Menambah data guru baru";
    } 

    public function update(string $id)
    {
        return "Mengubah data guru dengan ID: {$id}";
    }

    public function destroy(string $id)
    {
        return "Menghapus data guru dengan ID: {$id}";
    }
}