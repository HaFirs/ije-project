<?php

namespace App\Controllers;

class Nios extends BaseController
{
    public function index()
    {
        $uri = service('uri');
        $data = [
            'title' => 'Welcome to Night Owl Studio',
            'uri' => $uri
        ];

        return view('nios/home', $data);
    }

    public function nios_news()
    {
        $uri = service('uri');
        $data = [
            'title' => 'News - Night Owl Studio',
            'uri' => $uri
        ];

        return view('nios/news', $data);
    }

    public function nios_project()
    {
        $uri = service('uri');
        $data = [
            'title' => 'Project - Night Owl Studio',
            'uri' => $uri
        ];

        return view('nios/project', $data);
    }

    public function nios_about()
    {
        $uri = service('uri');
        $data = [
            'title' => 'About Us - Night Owl Studio',
            'uri' => $uri
        ];

        return view('nios/about', $data);
    }

    public function nios_contact()
    {
        $uri = service('uri');
        $data = [
            'title' => 'Contact - Night Owl Studio',
            'uri' => $uri
        ];

        return view('nios/contact', $data);
    }
}
