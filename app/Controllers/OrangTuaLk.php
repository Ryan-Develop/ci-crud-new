<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\OrangTuaLkModel;
// use App\Models\OrangTuaPrModel;

class OrangTuaLk extends BaseController
{
    protected $orangtua_lk_Model;

    public function __construct()
    {
        $this->orangtua_lk_Model = new OrangTuaLkModel();
        // $this->orangtua_pr_Model = new OrangTuaPrModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Daftar Orang Tua / Wali',
            'orangtua_lk' => $this->orangtua_lk_Model->getOrangTuaLk()
            // 'orangtua_pr' => $this->orangtua_pr_Model->getOrangTuaPr()

        ];

        return view('orangtua_lk/index', $data);
    }

    public function detail($nik)
    {
        $data = [
            'title' => 'Detail Orang Tua / Wali',
            'orangtua_lk' => $this->orangtua_lk_Model->getOrangTuaLk($nik)
            // 'orangtua_pr' => $this->orangtua_pr_Model->getOrangTuaPr($nik)
        ];

        if (empty($data['orangtua_lk'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Nama Orang Tua Dengan NIK ' . $nik . ' Tidak Ditemukan');
        }
        return view('orangtua_lk/detail', $data);
    }

    public function delete($id)
    {

        $this->orangtua_lk_Model->delete($id);
        return redirect()->to('/orangtua_lk');
    }
}
