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

        return view('admin/home', $data);
    }
}
