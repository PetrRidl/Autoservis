<?php

namespace App\Controllers;

class MujController extends BaseController
{
    public function hlavni_strana()
    {
        echo view('header');
        echo view('hlavni_strana');
        echo view('footer');
    }
}