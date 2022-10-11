<?php

namespace App\Controllers;

use App\Controllers\BaseController;
// use App\Models\OrangTuaLkModel;
use App\Models\OrangTuaPrModel;

class OrangTuaPr extends BaseController
{
    protected $orangtua_pr_Model;

    public function __construct()
    {
        // $this->orangtua_lk_Model = new OrangTuaLkModel();
        $this->orangtua_pr_Model = new OrangTuaPrModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Daftar Orang Tua / Wali',
            // 'orangtua_lk' => $this->orangtua_lk_Model->getOrangTuaLk()
            'orangtua_pr' => $this->orangtua_pr_Model->getOrangTuaPr()

        ];

        return view('orangtua_pr/index', $data);
    }

    public function detail($nik)
    {
        $data = [
            'title' => 'Detail Orang Tua / Wali',
            // 'orangtua_lk' => $this->orangtua_lk_Model->getOrangTuaLk($nik)
            'orangtua_pr' => $this->orangtua_pr_Model->getOrangTuaPr($nik)
        ];

        if (empty($data['orangtua_pr'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Nama Orang Tua Dengan NIK ' . $nik . ' Tidak Ditemukan');
        }
        return view('orangtua_pr/detail', $data);
    }

    public function delete($id)
    {
        $this->orangtua_pr_Model->delete($id);
        return redirect()->to('/orangtua_pr');
    }

    public function edit($nim)
    {
        $data = [
            'title' => 'Form Ubah Data Orang Tua',
            'validation' => \Config\Services::validation(),
            'orangtua_pr' => $this->orangtua_pr_Model->getOrangTuaPr($nim)
        ];

        return view('orangtua_pr/edit', $data);
    }

    public function update($id)
    {
        $this->orangtua_pr_Model->save([
            'id' => $id,
            'nama' => $this->request->getVar('nama'),
            'nik' => $this->request->getVar('nik'),
            'agama' => $this->request->getVar('agama'),
            'ttl' => $this->request->getVar('ttl'),
            'pekerjaan' => $this->request->getVar('pekerjaan'),
            'pendidikan_terakhir' => $this->request->getVar('pendidikan_terakhir'),
        ]);

        // session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan.');

        return redirect()->to('orangtua_pr');
    }
}
