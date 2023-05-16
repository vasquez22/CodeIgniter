<?php

namespace App\Controllers;

class Roles extends BaseController
{
    public function roles()
    {
        return view('sidebar'); //editado
    }

    public function vista1()
    {
        $data = [
            'title' => 'My Title',
            'heading'     => 'My Heading',
            'message'   => 'Hola mundo',
        ];

        return view('vista1', $data);
    }
}