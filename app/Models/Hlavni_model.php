<?php namespace App\Models;

use CodeIgniter\Model;

class Hlavni_model extends Model
{
    
    protected $table = 'automobily';
    protected $allowedFields = ['registracni_znacka', 'vyrobce', 'typ_voze', 'rok_vyroby', 'obsah_motoru', 'prevodovka'];
    

    
}