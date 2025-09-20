<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'About Us - Company Name',
            'page' => 'about'
        ];
        return view('about', $data);
    }
}
