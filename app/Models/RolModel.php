<?php

namespace App\Models;

use CodeIgniter\Model;

class RolModel extends Model
{
    protected $table      = 'roles';
    protected $primaryKey = 'id_rol';
    protected $allowedFields = ['nombre_rol', 'email_rol','descripcion_rol'];
}