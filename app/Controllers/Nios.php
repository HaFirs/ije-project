<?php 

namespace App\Controllers;
use CodeIgniter\Controller;

class Nios extends Controller
{
    public function index()
    {
        $uri = service('uri');
        $data = [
            'title' => 'Welcome to Night Owl Studio',
            'uri' => $uri
        ];

        echo view('nios/templates/header', $data);
        echo view('nios/home');
        echo view('nios/templates/footer');
    }
    
    public function nios_news()
    {
        $uri = service('uri');
        $data = [
            'title' => 'News - Night Owl Studio',
            'uri' => $uri
        ];
        
        echo view('nios/templates/header', $data);
        echo view('nios/news');
        echo view('nios/templates/footer');
    }
    
    public function nios_project()
    {
        $uri = service('uri');
        $data = [
            'title' => 'Project - Night Owl Studio',
            'uri' => $uri
        ];
        
        echo view('nios/templates/header', $data);
        echo view('nios/project');
        echo view('nios/templates/footer');
    }

    public function nios_contact()
    {
        $uri = service('uri');
        $data = [
            'title' => 'Contact - Night Owl Studio',
            'uri' => $uri
        ];

        echo view('nios/templates/header', $data);
        echo view('nios/contact');
    }

    public function nios_about()
    {
        $uri = service('uri');
        $data = [
            'title' => 'About Us - Night Owl Studio',
            'uri' => $uri
        ];

        echo view('nios/templates/header', $data);
        echo view('nios/about');
        echo view('nios/templates/footer', $data);
    }

}
