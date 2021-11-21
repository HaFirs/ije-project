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


    public function add_news()
    {
        $uri = service('uri');
        $data = [
            'title' => 'Add News',
            'uri' => $uri
        ];

        return view('admin/add-news', $data);
    }
    public function news_list()
    {
        $uri = service('uri');
        $data = [
            'title' => 'News List',
            'uri' => $uri
        ];

        return view('admin/news-list', $data);
    }
    public function news_category()
    {
        $uri = service('uri');
        $data = [
            'title' => 'News Category',
            'uri' => $uri
        ];

        return view('admin/news-category', $data);
    }
}
