<?php

namespace App\Controllers;

use App\Models\UserModel;


class Attractions extends BaseController
{
      public function index()
    {
      echo view('welcome_message');
      return view('attractions');

    }
}
