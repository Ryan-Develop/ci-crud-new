<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MahasiswaModel;

class TambahMahasiswa extends BaseController
{
    protected $mahasiswaModel;

    public function __construct()
    {
        $this->mahasiswaModel = new MahasiswaModel();
    }

    public function index()
    {
        session();
        $data = [
            'title' => 'Form Tambah Data Mahasiswa',
            'validation' => \Config\Services::validation()
        ];
        return view('mahasiswa/create', $data);
    }

    public function save()
    {
        $this->mahasiswaModel->save([
            'nama' => $this->request->getVar('nama'),
            'nim' => $this->request->getVar('nim'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'agama' => $this->request->getVar('agama'),
            'prodi' => $this->request->getVar('prodi'),
            'ttl' => $this->request->getVar('ttl'),
            'alamat' => $this->request->getVar('alamat'),
            'asal_sekolah' => $this->request->getVar('asal_sekolah'),
            'gambar' => $this->request->getVar('gambar')
        ]);

        // session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan.');

        return redirect()->to('mahasiswa');
    }

    public function edit($nim)
    {
        $data = [
            'title' => 'Form Ubah Data Mahasiswa',
            'validation' => \Config\Services::validation(),
            'mahasiswa' => $this->mahasiswaModel->getMahasiswa($nim)
        ];

        return view('mahasiswa/edit', $data);
    }

    public function update($id)
    {
        $this->mahasiswaModel->save([
            'id' => $id,
            'nama' => $this->request->getVar('nama'),
            'nim' => $this->request->getVar('nim'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'agama' => $this->request->getVar('agama'),
            'prodi' => $this->request->getVar('prodi'),
            'ttl' => $this->request->getVar('ttl'),
            'alamat' => $this->request->getVar('alamat'),
            'asal_sekolah' => $this->request->getVar('asal_sekolah'),
            'gambar' => $this->request->getVar('gambar')
        ]);

        // session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan.');

        return redirect()->to('/mahasiswa');
    }
}
