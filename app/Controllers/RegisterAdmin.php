<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\AdminModel; 

class RegisterAdmin extends ResourceController
{
    public function __construct() {
        $this->adminModel = new AdminModel();
    }

    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        echo view('auth/registerAdmin');
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        //
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $payload = [
            "nama" => $this->request->getPost('nama'),
            "email" => $this->request->getPost('email'),
            "password" => md5($this->request->getPost('password')),
            "usia" => (int)$this->request->getPost('email'),
            "nomor_telepon" => (int)$this->request->getPost('nomor_telepon'),
            "alamat" => $this->request->getPost('alamat'),
        ];

        $this->adminModel->insert($payload);
        return redirect()->to('/loginAdmin');
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        //
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        //
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        //
    }
}