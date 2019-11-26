<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Information extends MY_Controller {

    public function __construct()
    {
        parent::__construct();

       $this->load->model('userModel');
       $this->load->model('membreModel');
    }
	public function index()
	{
        $users = $this->userModel->getUser();
        $soutiens = $this->membreModel->getSoutien()->result();
        $villes = $this->membreModel->getVille(); 
        $sexes = $this->membreModel->getSexe();
        $etatCivil = $this->membreModel->getEtatCivil();
        $citoyennete = $this->membreModel->getCitoyennete();
        $liens = $this->membreModel->getLien(); 
        $userLists = data_list($users, 'user_id', 'user_nom','Complete par');
        $villeLists = data_list($villes, 'id_ville', 'nom_ville','Choisir une ville');
        $sexeLists = data_list($sexes, 'id_sexe', 'sexe','Choisir le sexe');
        $etatCivilLists = data_list($etatCivil, 'id_etat_civil', 'etat_civil_membre','Choisir l\'etat civil');
        $citoyenneteLists = data_list($citoyennete, 'id_citoyennete', 'citoyennete_membre','Choisir citoyennete');
        $langues = $this->membreModel->getLangue()->result();
        $lienLists = data_list($liens, 'id_lien', 'lien_membre','Choisir le lien');
		echo $this->blade->view()->make('membre/information_vue', ['users' => $userLists,'soutiens' => $soutiens,'villes'=>$villeLists,'sexes'=>$sexeLists,'etatCivil'=>$etatCivilLists,'citoyennete'=>$citoyenneteLists,'langues'=>$langues,'lien'=>$lienLists]);
	}
}