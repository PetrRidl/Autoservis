<?php namespace App\Models;

use CodeIgniter\Model;

class Hlavni_model extends Model
{
    protected $db;
    protected $table = 'automobily';
    protected $allowedFields = ['registracni_znacka', 'vyrobce', 'typ_voze', 'rok_vyroby', 'obsah_motoru', 'prevodovka'];
    
    function opravy($auto)
    {
        $db = db_connect();
        //$query = $this->db->query(
            //"SELECT * FROM `nahradni_dily` INNER JOIN `opravy` ON nahradni_dily.iddilu=opravy.nahradni_dily_iddilu WHERE opravy.automobily_idautomobily = ". $auto);
            //return $query->result();
        $query = $db->query("SELECT * FROM `nahradni_dily` INNER JOIN `opravy` ON nahradni_dily.iddilu=opravy.nahradni_dily_iddilu WHERE opravy.automobily_idautomobily = ". $auto);
    }
    
}