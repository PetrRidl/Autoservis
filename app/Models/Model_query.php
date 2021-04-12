<?php namespace App\Models;

use CodeIgniter\Model;

class Model_query extends Model
{
    
    
    function opravy($auto)
    {
        $db = db_connect();
      
        $query = $db->query("SELECT * FROM `nahradni_dily` INNER JOIN `opravy` ON nahradni_dily.iddilu=opravy.nahradni_dily_iddilu WHERE opravy.automobily_idautomobily = ". $auto);
        return $query;
    }
    
}