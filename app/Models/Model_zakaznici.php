<?php namespace App\Models;

use CodeIgniter\Model;

class Model_zakaznici extends Model
{
    
    protected $table = 'majitele';
    protected $allowedFields = ['jmeno', 'prijmeni', 'adresa', 'telefon', 'email'];
    

    
}