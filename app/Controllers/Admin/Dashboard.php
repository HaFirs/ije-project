<?php 

namespace App\Controllers\Admin;
use App\Controllers\BaseController;

class Dashboard extends BaseController
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