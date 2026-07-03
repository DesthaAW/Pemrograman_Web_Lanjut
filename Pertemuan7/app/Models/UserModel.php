<?php

namespace App\Models;

use CodeIgniter\Model;

class Usermodel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'password'];
}
