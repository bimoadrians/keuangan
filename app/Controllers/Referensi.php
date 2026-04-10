<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Referensi extends BaseController
{
    public function __construct()
    {
        $this->validation = \Config\Services::validation();
        helper(["url"]);
    }

    public function ref()
    {
        $sidebar = 'referensi';
        $data = [
            'sidebar' => $sidebar,
        ];

        echo view('ui/header');
        echo view('ui/sidebar', $data);
        echo view('referensi/ref');
        echo view('ui/footer');
    }

    public function kod_rek()
    {
        $sidebar = 'kod_rek';
        $data = [
            'sidebar' => $sidebar,
        ];

        echo view('ui/header');
        echo view('ui/sidebar', $data);
        echo view('referensi/kod_rek');
        echo view('ui/footer');
    }
}
