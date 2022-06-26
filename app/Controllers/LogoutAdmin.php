<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class LogoutAdmin extends BaseController
{
    public function index()
    {
        $session = \Config\Services::session();
        $session->remove('id');
        $session->remove('name');
        $session->remove('loggedIn');

        $session->setFlashdata('success', 'Admin Successfully logout!');

        return redirect()->to('/loginAdmin');
    }
}