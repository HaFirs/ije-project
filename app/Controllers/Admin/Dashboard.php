<?php 

namespace App\Controllers;
use CodeIgniter\Controller;

class Dashboard extends Controller
{
    public function index()
    {
        $uri = service('uri');
        $data = [
            'title' => 'Ije Group - Admin',
            'uri' => $uri
        ];

        echo view('admin/templates/header', $data);
        echo view('admin/templates/sidebar');
        echo view('admin/home');
        echo view('admin/templates/footer');
    }
}