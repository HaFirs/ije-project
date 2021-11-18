<?php

namespace App\Controllers;

class Ije extends BaseController
{
    public function index()
    {
        $data['title'] = ('Welcome to Infinity Journey Enterprise | IJE');

        return view('ije/home', $data);
    }
}
