<?php

namespace App\Controllers;

class Food extends BaseController
{
    public function index()
    {
        echo view('welcome_message');
        return view('food');
        
    }

  

}