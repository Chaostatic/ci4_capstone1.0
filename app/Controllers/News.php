<?php

namespace App\Controllers;

class News extends BaseController
{
    public function index()
    {
        echo view('welcome_message');
        return view('news');
        
    }

  

}