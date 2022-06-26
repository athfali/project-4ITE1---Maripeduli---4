<?php

namespace App\Controllers;
use App\Models\DonasiModel;
use App\Models\UserModel;
use App\Models\AdminModel;
use App\Models\TerkumpulModel;

class UserController extends BaseController
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

        echo view('dashboard/home', $payload);
    }

    public function user()
    {
        $users = $this->userModel->findAll();

        $payload = [
            "users" => $users,
        ];

        echo view('dashboard/user', $payload);
    }

    public function admin()
    {
        $admins = $this->adminModel->findAll();

        $payload = [
            "admins" => $admins,
        ];

        echo view('dashboard/admin', $payload);
    }

    public function terkumpul()
    {
        $terkumpuls = $this->terkumpulModel->findAll();

        $payload = [
            "terkumpuls" => $terkumpuls,
        ];

        echo view('dashboard/terkumpul', $payload);
    }
    
    public function profile()
    {
        $data['pageTitle'] = 'Profile';
        return view('dashboard/profile',$data);
    }

}
