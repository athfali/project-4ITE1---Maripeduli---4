<?php
namespace App\Controllers;

use App\Models\KonserModel;
use CodeIgniter\RESTful\ResourceController;

class Konser extends ResourceController
{
    public function __construct() {
        $this->KonserModel = new KonserModel();
    }

    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $konsers = $this->KonserModel->paginate(1, 'konsers');

        $payload = [
            "konsers" => $konsers,
            "pager" => $this->KonserModel->pager
        ];

        echo view('konser/index', $payload);
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
        echo view('konser/new');
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $fileName = "";

        $photo = $this->request->getFile('photo');

        if ($photo->getError() ==4) {
            $fileName =('null.jpg');
            
        }
        
        else{
            $fileName = $photo->getRandomName();
            $photo->move('photos', $fileName);
        }

        $payload = [
            "pembuat" => $this->request->getPost('pembuat'),
            "stok" => (int) $this->request->getPost('stok'),
            "harga" => (int) $this->request->getPost('harga'),
            "deskripsi" => $this->request->getPost('deskripsi'),
            "photo" => $fileName, // Kita simpan nama filenya saja
            "komentar" => $this->request->getPost('komentar'),
        ];

        $this->KonserModel->insert($payload);
        return redirect()->to('/konser');
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        $konser = $this->KonserModel->find($id);
        
        if (!$konser) {
            throw new \Exception("Data not found!");   
        }
        
        echo view('konser/edit', ["data" => $konser]);
    }

    public function komentar($id = null)
    {
        $konser = $this->KonserModel->find($id);
        
        if (!$konser) {
            throw new \Exception("Data not found!");   
        }
        
        echo view('konser/komentar', ["data" => $konser]);
    }


    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        $fileName = "";

        $photo = $this->request->getFile('photo');

        if ($photo->getError() ==4) {
            $fileName = $this->request->getVar('oldphoto');
            
        }
        
        else{
            $fileName = $photo->getRandomName();
            $photo->move('photos', $fileName);
            unlink('photos/' .$this->request->getVar('oldphoto'));
        }

        $payload = [
            "pembuat" => $this->request->getPost('pembuat'),
            "stok" => (int) $this->request->getPost('stok'),
            "harga" => (int) $this->request->getPost('harga'),
            "deskripsi" => $this->request->getPost('deskripsi'),
            "photo" => $fileName,
            "komentar" => $this->request->getPost('komentar'),
             
        ];

        $this->KonserModel->update($id, $payload);
        return redirect()->to('/konser');
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $konsers = $this->KonserModel->find($id);
        unlink('photos/' .$konsers['photo']);
        $this->KonserModel->delete($id);
        return redirect()->to('/konser');   
    }
}