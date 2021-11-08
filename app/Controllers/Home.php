<?php

namespace App\Controllers;

use PhpParser\Node\Stmt\Echo_;

class Home extends BaseController
{
    public function index()
    {
        $data['title'] = ('Welcome to Ije Group');

        echo view('ije/templates/header', $data);
        echo view('ije/home');
        echo view('ije/templates/footer');
    }

    public function nios()
    {
        $data['title'] = ('Welcome to Night Owl Studio');

        echo view('nios/templates/header', $data);
        echo view('nios/home');
        echo view('nios/templates/footer');
    }
}
