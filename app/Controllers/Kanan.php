<?php 

namespace App\Controllers;

class Kanan extends BaseController
{
    public function index()
    {
        $uri = service('uri');
        $data = [
            'title' => 'Welcome to Kanan Creative',
            'uri' => $uri
        ];

        echo view('kanan/templates/header', $data);
        echo view('kanan/home');
        echo view('kanan/templates/footer');
    }

    public function kanan_undangan()
    {
        $uri = service('uri');
        $data = [
            'title' => 'Kanan Creative - Desain Undangan',
            'uri' => $uri
        ];

        echo view('kanan/templates/header', $data);
        echo view('kanan/undangan');
        echo view('kanan/templates/footer');
    }

}