<?php 

namespace App\Controllers;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\URI;

class Nios extends Controller
{
    public function index()
    {
        $data['title'] = ('Welcome to Night Owl Studio');

        echo view('nios/templates/header', $data);
        echo view('nios/home');
        echo view('nios/templates/footer');
    }
    
    public function nios_news()
    {
        $data['title'] = ('News - Night Owl Studio');
        
        echo view('nios/templates/header', $data);
        echo view('nios/news');
        echo view('nios/templates/footer');
    }
    
    public function nios_project()
    {
        $data['title'] = ('Project - Night Owl Studio');
        
        echo view('nios/templates/header', $data);
        echo view('nios/project');
        echo view('nios/templates/footer');
    }

    public function nios_contact()
    {
        $data['title'] = ('Contact - Night Owl Studio');

        echo view('nios/templates/header', $data);
        echo view('nios/contact');
    }

}
