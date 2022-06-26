<?php

namespace App\Controllers;
use App\Models\DonasiModel;
use App\Models\UserModel;
use App\Models\AdminModel;
use App\Models\TerkumpulModel;
use Dompdf\Dompdf;

class AdminController extends BaseController
{
    public function __construct() {
        $this->donasiModel = new DonasiModel();
        $this->userModel = new UserModel();
        $this->adminModel = new AdminModel();
        $this->terkumpulModel = new TerkumpulModel();
    }    

    public function index()
    {
        $donasis = $this->donasiModel->findAll();

        $payload = [
            "donasis" => $donasis,
        ];

        echo view('admin/home', $payload);
    }

    public function user()
    {
        $users = $this->userModel->findAll();

        $payload = [
            "users" => $users,
        ];

        echo view('admin/user', $payload);
    }

    public function admin()
    {
        $admins = $this->adminModel->findAll();

        $payload = [
            "admins" => $admins,
        ];

        echo view('admin/admin', $payload);
    }

    public function terkumpul()
    {
        $terkumpuls = $this->terkumpulModel->findAll();

        $payload = [
            "terkumpuls" => $terkumpuls,
        ];

        echo view('admin/terkumpul', $payload);
    }
    
    public function profile()
    {
        $data['pageTitle'] = 'Profile';
        return view('admin/profile',$data);
    }

    public function exportPDF()
    {
        $fileName = "";

        $payload = [
            "nama_pembuat" => $this->request->getPost('nama_pembuat'),
            "membutuhkan" => $this->request->getPost('membutuhkan'),
            "terkumpulkan" => (int) $this->request->getPost('terkumpulkan'),
            "deskripsi" => $this->request->getPost('deskripsi'),
            "photo" => $fileName, // Kita simpan nama filenya saja
        ];

        $this->donasiModel->insert($payload);
        $donasis = $this->donasiModel->findAll();

        $data = [
            'result' => $donasis
        ];
        
        $view = view('admin/export-laporan-pdf', $data);

        $dompdf = new Dompdf();
        $dompdf->loadHtml($view);

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream("laporan-donasi", array("Attachment" => false));
    }

}
