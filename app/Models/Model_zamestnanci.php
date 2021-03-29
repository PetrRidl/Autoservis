<?php namespace App\Models;

use CodeIgniter\Model;

class Model_zamestnanci extends Model
{
    
    protected $table = 'zamestnanci';
    protected $allowedFields = ['jmeno', 'prijmeni', 'osobnicislo'];
    

    
}