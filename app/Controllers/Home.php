<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['title'] = ('Welcome to Ije Group');

        echo view('ije/templates/header', $data);
        echo view('ije/home');
        echo view('ije/templates/footer');
    }
}
