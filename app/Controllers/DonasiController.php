<?php

namespace App\Controllers;
use App\Models\DonasiModel;
use App\Models\UserModel;
use App\Models\AdminModel;
use App\Models\TerkumpulModel;

class DonasiController extends BaseController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function __construct() {
        $this->donasiModel = new DonasiModel();
        $this->userModel = new UserModel();
        $this->adminModel = new AdminModel();
        $this->terkumpulModel = new TerkumpulModel();
    }

    public function index()
    {
        $donasis = $this->donasiModel->paginate(1, 'donasis');

        $payload = [
            "donasis" => $donasis,
            "photo" => $donasis,
            "pager" => $this->donasiModel->pager
        ];

        echo view('donasi/index', $payload);
    }

    public function about()
    {
        echo view('donasi/about');
    }

    public function donasi()
    {
        echo view('donasi/donasi');
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
        echo view('donasi/new');
    }

    public function newAdmin()
    {
        echo view('donasi/newAdmin');
    }

    public function newUser()
    {
        echo view('donasi/newUser');
    }

    public function newTerkumpul()
    {
        echo view('donasi/newTerkumpul');
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
            "nama_pembuat" => $this->request->getPost('nama_pembuat'),
            "membutuhkan" => $this->request->getPost('membutuhkan'),
            "terkumpulkan" => (int) $this->request->getPost('terkumpulkan'),
            "deskripsi" => $this->request->getPost('deskripsi'),
            "photo" => $fileName, // Kita simpan nama filenya saja
        ];

        $this->donasiModel->insert($payload);
        return redirect()->to('/user/home');
    }

    public function createUser()
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
            "nama" => $this->request->getPost('nama'),
            "email" => $this->request->getPost('email'),
            "usia" => (int) $this->request->getPost('usia'),
            "nomor_telepon" => (int) $this->request->getPost('nomor_telepon'),
            "alamat" => $this->request->getPost('alamat'),
            "photo" => $fileName, // Kita simpan nama filenya saja
        ];

        $this->userModel->insert($payload);
        return redirect()->to('/user/user');
    }

    public function createAdmin()
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
            "nama" => $this->request->getPost('nama'),
            "email" => $this->request->getPost('email'),
            "nomor_telepon" => (int) $this->request->getPost('nomor_telepon'),
            "alamat" => $this->request->getPost('alamat'),
            "photo" => $fileName, // Kita simpan nama filenya saja
        ];

        $this->adminModel->insert($payload);
        return redirect()->to('/user/admin');
    }

    public function createTerkumpul()
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
            "nama" => $this->request->getPost('nama'),
            "jumlah" => $this->request->getPost('jumlah'),
            "e-money" => $this->request->getPost('e-money'),
            "deskripsi" => $this->request->getPost('deskripsi'),
            "id_donasi" => (int)$this->request->getPost('id_donasi'),
            "donasi_untuk" => $this->request->getPost('donasi_untuk'),
            "photo" => $fileName, // Kita simpan nama filenya saja
        ];

        $this->terkumpulModel->insert($payload);
        return redirect()->to('/user/terkumpul');
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        $donasi = $this->donasiModel->find($id);
        
        if (!$donasi) {
            throw new \Exception("Data not found!");   
        }
        
        echo view('donasi/edit', ["data" => $donasi]);
    }

    public function editAdmin($id = null)
    {
        $admin = $this->adminModel->find($id);
        
        if (!$admin) {
            throw new \Exception("Data not found!");   
        }
        
        echo view('donasi/editAdmin', ["data" => $admin]);
    }
    
    public function editUser($id = null)
    {
        $user = $this->userModel->find($id);
        
        if (!$user) {
            throw new \Exception("Data not found!");   
        }
        
        echo view('donasi/editUser', ["data" => $user]);
    }

    public function editTerkumpul($id = null)
    {
        $terkumpul = $this->terkumpulModel->find($id);
        
        if (!$terkumpul) {
            throw new \Exception("Data not found!");   
        }
        
        echo view('donasi/editTerkumpul', ["data" => $terkumpul]);
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

        if ($photo->getError() == 4) {
            $fileName = $this->request->getVar('oldphoto');
            
        }
        
        else{
            $fileName = $photo->getRandomName();
            $photo->move('photos', $fileName);
        }

        $payload = [
            "nama_pembuat" => $this->request->getPost('nama_pembuat'),
            "membutuhkan" => $this->request->getPost('membutuhkan'),
            "terkumpulkan" => (int) $this->request->getPost('terkumpulkan'),
            "deskripsi" => $this->request->getPost('deskripsi'),
            "photo" => $fileName,
        ];

        $this->donasiModel->update($id, $payload);
        return redirect()->to('/admin/home');
    
    }

    public function updateUser($id = null)
    {
        $fileName = "";

        $photo = $this->request->getFile('photo');

        if ($photo->getError() == 4) {
            $fileName = $this->request->getVar('oldphoto');
            
        }
        
        else{
            $fileName = $photo->getRandomName();
            $photo->move('photos', $fileName);
        }

        $payload = [
            "nama" => $this->request->getPost('nama'),
            "email" => $this->request->getPost('email'),
            "usia" => (int) $this->request->getPost('usia'),
            "nomor_telepon" => (int) $this->request->getPost('nomor_telepon'),
            "alamat" => $this->request->getPost('alamat'),
            "photo" => $fileName, // Kita simpan nama filenya saja
        ];

        $this->userModel->update($id, $payload);
        return redirect()->to('/admin/user');
    
    }

    public function updateAdmin($id = null)
    {
        $fileName = "";

        $photo = $this->request->getFile('photo');

        if ($photo->getError() == 4) {
            $fileName = $this->request->getVar('oldphoto');
            
        }
        
        else{
            $fileName = $photo->getRandomName();
            $photo->move('photos', $fileName);
        }

        $payload = [
            "nama" => $this->request->getPost('nama'),
            "email" => $this->request->getPost('email'),
            "nomor_telepon" => (int) $this->request->getPost('nomor_telepon'),
            "alamat" => $this->request->getPost('alamat'),
            "photo" => $fileName, // Kita simpan nama filenya saja
        ];

        $this->adminModel->update($id, $payload);
        return redirect()->to('/admin/admin');
    }

    public function updateTerkumpul($id = null)
    {
        $fileName = "";

        $photo = $this->request->getFile('photo');

        if ($photo->getError() == 4) {
            $fileName = $this->request->getVar('oldphoto');
            
        }
        
        else{
            $fileName = $photo->getRandomName();
            $photo->move('photos', $fileName);
        }

        $payload = [
            "nama" => $this->request->getPost('nama'),
            "jumlah" => $this->request->getPost('jumlah'),
            "e-money" => $this->request->getPost('e-money'),
            "deskripsi" => $this->request->getPost('deskripsi'),
            "id_donasi" => (int) $this->request->getPost('id_donasi'),
            "donasi_untuk" => $this->request->getPost('donasi_untuk'),
            "photo" => $fileName, // Kita simpan nama filenya saja
        ];

        $this->terkumpulModel->update($id, $payload);
        return redirect()->to('/admin/terkumpul');
    
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $this->donasiModel->delete($id);
        return redirect()->to('/admin/home');
    }

    public function deleteUser($id = null)
    {
        $this->userModel->delete($id);
        return redirect()->to('/admin/user');
    }

    public function deleteAdmin($id = null)
    {
        $this->adminModel->delete($id);
        return redirect()->to('/admin/admin');
    }

    public function deleteTerkumpul($id = null)
    {
        $this->terkumpulModel->delete($id);
        return redirect()->to('/admin/terkumpul');
    }

}