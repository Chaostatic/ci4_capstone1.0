<?php

namespace App\Controllers;

use App\Models\UserModel;


class Attractions extends BaseController
{
      public function index()
    {
      
      return view('attractions');

    }

    public function daranakfalls()
    {
      
      return view('attraction/daranakfalls');

    }
}
