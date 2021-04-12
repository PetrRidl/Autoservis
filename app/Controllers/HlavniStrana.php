<?php
namespace App\Controllers;
use App\Models\Hlavni_model;
use App\Models\Model_zamestnanci;
use App\Models\Model_dily;
use App\Models\Model_zakaznici;

use Codeigniter\Controller;



class HlavniStrana extends BaseController
{
	

	public function index()
	{
		$this->ionAuth = new \IonAuth\Libraries\IonAuth(); 
		if(!$this->ionAuth->loggedIn())echo view('templates/header_zaklad');
		elseif($this->ionAuth->loggedIn() && $this->ionAuth->isAdmin())echo view('templates/header_admin');
		else echo view('templates/header_user');
		echo view('pages/hlavni_strana');
		echo view('templates/footer');
	}
	public function vypisAut()
	{
		$model = new Hlavni_Model();
		$data['auta'] = $model->findAll();
		

		echo view('templates/header_admin');
		echo view('pages/vypis_aut', $data);
		echo view('templates/footer');
	}
	public function vypisZamestnancu()
	{
		$model = new Model_zamestnanci();
		$data['zamestnanci'] = $model->findAll();
		

		echo view('templates/header_admin');
		echo view('pages/zamestnanci', $data);
		echo view('templates/footer');
	}
	public function vypisDilu()
	{
		$model = new Model_dily();
		$data['dily'] = $model->findAll();
		

		echo view('templates/header_admin');
		echo view('pages/dily', $data);
		echo view('templates/footer');
	}
	public function vypisZakazniku()
	{
		$model = new Model_zakaznici();
		$data['zakaznik'] = $model->findAll();
		

		echo view('templates/header_admin');
		echo view('pages/zakaznici', $data);
		echo view('templates/footer');
	}

	public function zapisObjednavky()
	{
		$data = ['vyrobce' => $this->request->getVar('vyrobce'),
		'typ_vozu' => $this->request->getVar('typ_vozu'),
		'registracni_znacka' => $this->request->getVar('registracni_znacka'),
		'rok_vyroby' => $this->request->getVar('rok_vyroby'),
		'obsah_motoru' => $this->request->getVar('obsah_motoru'),
		'prevodovka' => $this->request->getVar('prevodovka')];
		$model = new Hlavni_model();
		$model->insert($data);

		echo view('templates/header_admin');
		echo view('pages/polozka');
		echo view('templates/footer');
	}
	public function formObjednavka()
	{
		echo view('templates/header_admin');
		echo view('pages/objednavka');
		echo view('templates/footer');
	}
	public function formZamestnanec()
	{
		echo view('templates/header_admin');
		echo view('pages/zapisZamestnanci');
		echo view('templates/footer');
	}
	public function zapisZamestnanci()
	{
		$data = ['jmeno' => $this->request->getVar('jmeno'),
		'prijmeni' => $this->request->getVar('prijmeni')];
		$model = new Model_zamestnanci();
		$model->insert($data);

		echo view('templates/header_admin');
		echo view('pages/polozka');
		echo view('templates/footer');		
	}
	public function vypisOprav($auto)
	{
		$model = new Model_query();
		
		$data['oprava'] = $model->opravy($auto);

		echo view('templates/header_admin');
		echo view('pages/opravy', $data);
		echo view('templates/footer');
	}
	public function formZakaznik()
	{
		echo view('templates/header_admin');
		echo view('pages/novy_zakaznik');
		echo view('templates/footer');
	}
	public function zapisZakaznici()
	{
		$data = ['jmeno' => $this->request->getVar('jmeno'),
		'prijmeni' => $this->request->getVar('prijmeni'),
		'adresa' => $this->request->getVar('adresa'),
		'telefon' => $this->request->getVar('telefon'),
		'email' => $this->request->getVar('email')];
		$model = new Model_zakaznici();
		$model->insert($data);

		echo view('templates/header_admin');
		echo view('pages/polozka');
		echo view('templates/footer');		
	}

}
