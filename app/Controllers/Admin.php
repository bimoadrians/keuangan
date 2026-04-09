<?php
namespace App\Controllers;

use App\Controllers\BaseController;

class Admin extends BaseController
{
    public function __construct()
    {
        $this->validation = \Config\Services::validation();
        helper(["url"]);
    }

    public function login()
    {
        echo view('ui/header');
        echo view('login/login');
        echo view('ui/footer');
    }
}