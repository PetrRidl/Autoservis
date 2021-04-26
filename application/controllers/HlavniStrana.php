<?php
defined('BASEPATH') OR exit ('No direct script acces allowed');

class HlavniStrana extends CI_Controller
{
	
	public function __construct() {
		parent::__construct();
		$this->load->library('ion_auth');
		$this->load->model('Model');
		

	 }

	public function index()
	{
		
		if(!$this->ion_auth->logged_in())$this->load->view('templates/header_zaklad');
		else $this->load->view('templates/header_admin');
		
		$this->load->view('pages/hlavni_strana');
		$this->load->view('templates/footer');
	}
	public function vypisAut()
	{
		$data["auta"] = $this->Model->vypisAut();
		

		$this->load->view('templates/header_admin');
		$this->load->view('pages/objednavka');
		$this->load->view('pages/vypis_aut', $data);
		$this->load->view('templates/footer');
	}
	public function vypisZamestnancu()
	{
		
		$data['zamestnanci'] = $this->Model->vypisZamestnancu();

		

		$this->load->view('templates/header_admin');
		$this->load->view('pages/zapisZamestnanci');
		$this->load->view('pages/zamestnanci', $data);
		$this->load->view('templates/footer');
	}
	public function zapisZamestnanci()
	{
		$data1['zamestnanci'] = $this->Model->vypisZamestnancu();

			$this->load->library('form_validation');  
			$this->form_validation->set_rules("jmeno", "jmeno", 'required|alpha');  
			$this->form_validation->set_rules("prijmeni", "prijmeni", 'required|alpha');

			
	
			if($this->form_validation->run())  
			{  
				 $data = array(  
					  "jmeno"     =>$this->input->post("jmeno"),  
					  "prijmeni"  =>$this->input->post("prijmeni"));
	
					  $this->Model->zapisZamestnance($data);  
			}
			
			$this->load->view('templates/header_admin');
			$this->load->view('pages/zapisZamestnanci');
			$this->load->view('pages/zamestnanci', $data1);
			$this->load->view('templates/footer');

	}
	public function upravitZamestnance($zamestnanec)
	{
		$data1['zamestnanci'] = $this->Model->vypisZamestnancu();
		$this->load->library('form_validation');  
		$this->form_validation->set_rules("jmeno", "jmeno", 'required|alpha');  
		$this->form_validation->set_rules("prijmeni", "prijmeni", 'required|alpha');

		

		if($this->form_validation->run())  
		{  
			 $data = array(  
				  "jmeno"     =>$this->input->post("jmeno"),  
				  "prijmeni"  =>$this->input->post("prijmeni"));

				  $this->Model->upravitZamestnance($zamestnanec, $data);  
		}
		$this->load->view('templates/header_admin');
		$this->load->view('pages/zapisZamestnanci');
		$this->load->view('pages/zamestnanci', $data1);
		$this->load->view('templates/footer');
	}
	public function smazatZamestnance($zamestnanec)
	{
		$this->Model->smazatZamestnance($zamestnanec);
		$data1['zamestnanci'] = $this->Model->vypisZamestnancu();
		
		$this->load->view('templates/header_admin');
		$this->load->view('pages/zapisZamestnanci');
		$this->load->view('pages/zamestnanci', $data1);
		$this->load->view('templates/footer');
	}
	public function upravaZamestnance($id)
	{
		$data['zamestnanci'] = $this->Model->vypisZamestnancu();
		$data['zamestnanec'] = $this->Model->ziskejZamestnance($id);

		$this->load->view('templates/header_admin');
		$this->load->view('pages/upravaZamestnanci', $data);
		$this->load->view('pages/zamestnanci', $data);
		$this->load->view('templates/footer');

	}

	public function vypisZakazniku()
	{
		$data["trouba"] = $this->Model->seznamTroubu();
		

		$this->load->view('templates/header_admin');
		$this->load->view('pages/novy_zakaznik');
		$this->load->view('pages/zakaznici', $data);
		$this->load->view('templates/footer');
	}
	public function upravitZakaznika($trouba)
	{
		$this->load->library('form_validation');  
		$this->form_validation->set_rules("jmeno", "jmeno", 'required|alpha');  
		$this->form_validation->set_rules("prijmeni", "prijmeni", 'required|alpha');
		$this->form_validation->set_rules("adresa", "adresa");  
		$this->form_validation->set_rules("telefon", "telefon");
		$this->form_validation->set_rules("email", "email");
		

		if($this->form_validation->run())  
		{  
			 $data = array(  
				  "jmeno"     =>$this->input->post("jmeno"),  
				  "prijmeni"  =>$this->input->post("prijmeni"),
				  "adresa"    =>$this->input->post("adresa"),  
				  "telefon"   =>$this->input->post("telefon"),  
				  "email"     =>$this->input->post("email"));

				  $this->Model->upravenyTrouba($trouba, $data);  
		}
		$data["trouba"] = $this->Model->seznamTroubu();

		$this->load->view('templates/header_admin');
		$this->load->view('pages/novy_zakaznik');
		$this->load->view('pages/zakaznici', $data);
		$this->load->view('templates/footer');	
	}
	public function upravaZakaznika($trouba)
	{
		$data["zakaznik"] = $this->Model->najdiTroubu($trouba);
		$data["trouba"] = $this->Model->seznamTroubu($trouba);

		$this->load->view('templates/header_admin');
		$this->load->view('pages/upraveny_zakaznik', $data);
		$this->load->view('pages/zakaznici', $data);
		$this->load->view('templates/footer');
	}
	public function zapisObjednavky()
	{
		$this->load->library('form_validation');  
		$this->form_validation->set_rules("vyrobce", "vyrobce", 'required|alpha');  
		$this->form_validation->set_rules("typ_vozu", "typ_vozu", 'required|alpha');
		$this->form_validation->set_rules("rok_vyroby", "rok_vyroby");  
		$this->form_validation->set_rules("registracni_znacka", "registracni_znacka");
		$this->form_validation->set_rules("obsah_motoru", "obsah_motoru");
		$this->form_validation->set_rules("prevodovka", "prevodovka");
		if($this->form_validation->run())  
           {  
                $data = array(  
                     "vyrobce"     =>$this->input->post("vyrobce"),  
                     "typ_vozu"  =>$this->input->post("typ_vozu"),
                     "rok_vyroby"    =>$this->input->post("rok_vyroby"),  
                     "registracni_znacka"   =>$this->input->post("registracni_znacka"),  
                     "obsah_motoru"     =>$this->input->post("obsah_motoru"),
					 "prevodovka"     =>$this->input->post("prevodovka"));

				$this->Model->ulozAuto($data);		 
					    
			}
		$data["auta"] = $this->Model->vypisAut();
		

		$this->load->view('templates/header_admin');
		$this->load->view('pages/objednavka');
		$this->load->view('pages/vypis_aut', $data);
		$this->load->view('templates/footer');
	}

	public function formZamestnanec()
	{
		$this->load->view('templates/header_admin');
		$this->load->view('pages/zapisZamestnanci');
		$this->load->view('templates/footer');
	}

	public function vypisOprav($auto)
	{
		
		
		$data['oprava'] = $this->Model->opravy($auto);

		$this->load->view('templates/header_admin');
		$this->load->view('pages/opravy', $data);
		$this->load->view('templates/footer');
	}
	public function formZakaznik()
	{
		$this->load->view('templates/header_admin');
		$this->load->view('pages/novy_zakaznik');
		$this->load->view('templates/footer');
	}
	public function zapisZakaznici()
	{
		$this->load->library('form_validation');  
		$this->form_validation->set_rules("jmeno", "jmeno", 'required|alpha');  
		$this->form_validation->set_rules("prijmeni", "prijmeni", 'required|alpha');
		$this->form_validation->set_rules("adresa", "adresa");  
		$this->form_validation->set_rules("telefon", "telefon");
		$this->form_validation->set_rules("email", "email");
		

		if($this->form_validation->run())  
		{  
			 $data = array(  
				  "jmeno"     =>$this->input->post("jmeno"),  
				  "prijmeni"  =>$this->input->post("prijmeni"),
				  "adresa"    =>$this->input->post("adresa"),  
				  "telefon"   =>$this->input->post("telefon"),  
				  "email"     =>$this->input->post("email"));

				  $this->Model->novyTrouba($data);  
		}
		$data["trouba"] = $this->Model->seznamTroubu();

		$this->load->view('templates/header_admin');
		$this->load->view('pages/novy_zakaznik');
		$this->load->view('pages/zakaznici', $data);
		$this->load->view('templates/footer');		
	}
	public function EditujAuto($auto)
	{
		$data["auto"] = $this->Model->ziskejAuto($auto);
		$data["auta"] = $this->Model->vypisAut();

		$this->load->view('templates/header_admin');
		$this->load->view('pages/objednavka_uprava', $data);
		$this->load->view('pages/vypis_aut', $data);
		$this->load->view('templates/footer');
	}
	public function UpravObjednavku($auto)
	{
		$this->load->library('form_validation');  
		$this->form_validation->set_rules("vyrobce", "vyrobce", 'required|alpha');  
		$this->form_validation->set_rules("typ_vozu", "typ_vozu", 'required|alpha');
		$this->form_validation->set_rules("rok_vyroby", "rok_vyroby");  
		$this->form_validation->set_rules("registracni_znacka", "registracni_znacka");
		$this->form_validation->set_rules("obsah_motoru", "obsah_motoru");
		$this->form_validation->set_rules("prevodovka", "prevodovka");
		if($this->form_validation->run())  
           {  
                $data = array(  
                     "vyrobce"     =>$this->input->post("vyrobce"),  
                     "typ_vozu"  =>$this->input->post("typ_vozu"),
                     "rok_vyroby"    =>$this->input->post("rok_vyroby"),  
                     "registracni_znacka"   =>$this->input->post("registracni_znacka"),  
                     "obsah_motoru"     =>$this->input->post("obsah_motoru"),
					 "prevodovka"     =>$this->input->post("prevodovka"));

				$this->Model->upravAuto($auto, $data);		 
					    
			}
		$data["auta"] = $this->Model->vypisAut();
		

		$this->load->view('templates/header_admin');
		$this->load->view('pages/objednavka');
		$this->load->view('pages/vypis_aut', $data);
		$this->load->view('templates/footer');
	}
	public function SmazAuto($auto)
	{
		$this->Model->smazAuto($auto);
		$data["auta"] = $this->Model->vypisAut();
		

		$this->load->view('templates/header_admin');
		$this->load->view('pages/objednavka');
		$this->load->view('pages/vypis_aut', $data);
		$this->load->view('templates/footer');
	}
}