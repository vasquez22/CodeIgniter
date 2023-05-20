<?php

namespace App\Controllers;
use \App\Models\RolModel;

class Roles extends BaseController
{
    public function roles()
    {
        return view('sidebar'); //editado
    }

    public function prueba()
    {
        return view('prueba'); //editado
    }

    //metodo consultar id en la base de datos
    public function consultar()
    {
        $rolModel = new RolModel();
        $id_rol = 1;
        $rol = $rolModel->find($id_rol);
        print_r ($rol);
    }

    //metodo mostrar
    public function listar()
    {
        $rolModel = new RolModel();
        $rol = $rolModel->findAll();
        print_r ($rol);
    }
    
    //metodo insertar en la base de datos
    public function insertar()
    {
        $rolModel = new RolModel();
        $data = [
            'nombre_rol' => 'darth',
            'email_rol' => 'd.vader@theempire.com',
            'descripcion_rol' => 'El usuario puede interactuar con el sistema',
        ];
        
        // Inserts data and returns inserted row's primary key
        $rolModel->insert($data);
        return 'Registro ingresado!!';
    }

    //metodo actualizar id en la base de datos
    public function actualizar()
    {
        $rolModel = new RolModel();
        $id_rol = 6;
        $data = [
            'nombre_rol' => 'darth',
            'email_rol'    => 'd.vader@theempire.com',
            'descripcion_rol' => 'El usuario puede interactuar con el sistema',
        ];
        
        $rolModel->update($id_rol, $data);

        return "Registro actualizado!!";
    }

    //metodo eliminar id en la base de datos
    public function eliminar()
    {
        $rolModel = new RolModel();
        $id_rol = 6;
        $rolModel->delete($id_rol);
        return "Registro eliminado!!";
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