<?php

namespace App\Controllers;

class MahasiswaController extends BaseController
{
    public function index()
    {
        return view('mahasiswa_form');
    }

    public function processForm()
    {
        $data = [
            'nama' => $this->request->getPost('nama'),
            'nim'  => $this->request->getPost('nim'),
            'prodi' => $this->request->getPost('prodi')
        ];

        // Simpan data ke session
        session()->setFlashdata('data_mahasiswa', $data);

        return redirect()->to('/mahasiswa');
    }
}
