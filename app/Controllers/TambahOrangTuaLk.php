<?php

namespace App\Controllers;

use App\Models\OrangTuaLkModel;
use App\Models\OrangTuaPrModel;
use App\Controllers\BaseController;

class TambahOrangTuaLk extends BaseController
{
    protected $orangtua_lk_Model;

    public function __construct()
    {
        $this->orangtua_lk_Model = new OrangTuaLkModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Form Tambah Data Orang Tua / Wali'
        ];
        return view('orangtua_lk/create', $data);
    }

    public function save()
    {
        $this->orangtua_lk_Model->save([
            'nama' => $this->request->getVar('nama'),
            'nik' => $this->request->getVar('nik'),
            'agama' => $this->request->getVar('agama'),
            'ttl' => $this->request->getVar('ttl'),
            'pekerjaan' => $this->request->getVar('pekerjaan'),
            'pendidikan_terakhir' => $this->request->getVar('pendidikan_terakhir'),
        ]);

        // session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan.');

        return redirect()->to('orangtua_lk');
    }

    public function edit($nim)
    {
        $data = [
            'title' => 'Form Ubah Data Orang Tua',
            'validation' => \Config\Services::validation(),
            'orangtua_lk' => $this->orangtua_lk_Model->getOrangTuaLk($nim)
        ];

        return view('orangtua_lk/edit', $data);
    }

    public function update($id)
    {
        $this->orangtua_lk_Model->save([
            'id' => $id,            'nama' => $this->request->getVar('nama'),
            'nik' => $this->request->getVar('nik'),
            'agama' => $this->request->getVar('agama'),
            'ttl' => $this->request->getVar('ttl'),
            'pekerjaan' => $this->request->getVar('pekerjaan'),
            'pendidikan_terakhir' => $this->request->getVar('pendidikan_terakhir'),
        ]);

        // session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan.');

        return redirect()->to('orangtua_lk');
    }
}
