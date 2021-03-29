<?php namespace App\Models;

use CodeIgniter\Model;

class Model_dily extends Model
{
    
    protected $table = 'nahradni_dily';
    protected $allowedFields = ['nazev', 'cena', 'sklad'];
    

    
}