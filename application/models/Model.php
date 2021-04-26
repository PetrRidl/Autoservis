<?php

class Model extends CI_model

{
    public function __construct() {
        parent::__construct();
    }
    public function vypisAut()
    {
        $query = $this->db->query("SELECT * FROM automobily ORDER BY idautomobily ASC");  
        return $query->result(); 
    }
    public function ziskejAuto($auto)
    {
        $query = $this->db->query("SELECT * FROM automobily WHERE idautomobily =". $auto);  
        return $query->result(); 
    }
    public function upravAuto($id, $data)
    {
        
        $this->db->where("idautomobily", $id);
        $this->db->update("automobily", $data);
           
    }
    public function smazAuto($id)
    {
        $this->db->where("idautomobily =". $id);
        $this->db->delete("automobily");
    }
    public function ulozAuto($auto)
    {
        $this->db->insert("automobily", $auto);
    }
    public function opravy($auto)
    {
        $query = $this->db->query("SELECT * FROM `nahradni_dily` INNER JOIN `opravy` ON nahradni_dily.iddilu=opravy.nahradni_dily_iddilu INNER JOIN `zamestnanci` ON zamestnanci.osobnicislo=opravy.zamestananci_osobnicislo WHERE opravy.automobily_idautomobily =". $auto );
        return $query->result(); 
    }
    public function NovyTrouba($data)
    {
        $this->db->insert("majitele", $data);
    }
    public function seznamTroubu()
    {
        $query = $this->db->query("SELECT * FROM majitele ORDER BY idmajitele ASC");  
        return $query->result(); 
    }
    public function upravenyTrouba($id, $data)
    {
        $this->db->where("idmajitele", $id);
        $this->db->update("majitele", $data);
    }
    public function najdiTroubu($id)
    {
        $query = $this->db->query("SELECT * FROM majitele WHERE idmajitele =". $id);  
        return $query->result(); 
    }
    public function vypisZamestnancu()
    {
        $query = $this->db->query("SELECT * FROM zamestnanci ORDER BY osobnicislo ASC");  
        return $query->result(); 
    }
    
    public function zapisZamestnance($data)
    {
        $this->db->insert("zamestnanci", $data); 
    }
    public function ziskejZamestnance($id)
    {
        $query = $this->db->query("SELECT * FROM zamestnanci WHERE osobnicislo =". $id);  
        return $query->result(); 
    }
    public function upravitZamestnance($id, $data)
    {
        $this->db->where("osobnicislo", $id);
        $this->db->update("zamestnanci", $data);
    }
    public function smazatZamestnance($id)
    {
        $this->db->where("osobnicislo =". $id);
        $this->db->delete("zamestnanci");
    }
}
?>