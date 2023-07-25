<?php

namespace App\Controllers;
use App\Models\MahasiswaModel;
class Crud extends BaseController
{
    protected $db;
    public function __construct()
    {
        $this->db = new MahasiswaModel();
    }


public function index()
{
    return view('CRUD/View');
}

public function tambah()
{
    if ($this->request->getMethod()=== 'post'){
        $nim = $this->request->getPost('nim');
        $upload =[
            'nim' => $nim
        ];
        $this->db->insert($upload);
        return redirect()->to(base_url('/crud'));
    } else {
        return view('CRUD/Upload');
    }
}

public function edit()
{
    return view('CRUD/Edit');
}
}