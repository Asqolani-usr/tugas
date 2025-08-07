<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AnggotaModel;

class MembersController extends BaseController
{
    protected $Modelanggota;

    public function __construct()
    {
        $this->Modelanggota = new AnggotaModel(); // Model langsung connect ke DB sesuai config
    }

    public function index()
    {
        $data['anggota'] = $this->Modelanggota->findAll();
        return view('anggota/index', $data);
    }

    public function tambah()
    {
        echo 'Halaman tambah anggota';
    }

    public function simpan()
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update($id)
    {
        //
    }

    public function hapus($id)
    {
        //
    }
}