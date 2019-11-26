<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HistoriqueMedical extends MY_Controller {

    public function __construct()
    {
        parent::__construct();

       $this->load->model('userModel');
       $this->load->model('membreModel');
    }

	public function index()
	{
        $users = $this->userModel->getUser();
        $typeMembre = $this->membreModel->getTypeMembre(); 
        $preuveRevenu = $this->membreModel->getPreuveRevenu();
        $sourceRevenu = $this->membreModel->getSourceRevenu();
        $groupeSpecifique = $this->membreModel->getGroupeSpecifique();
        $userLists = data_list($users, 'user_id', 'user_nom','Complete par');
        $typeMembreLists = data_list($typeMembre, 'id_type_membre', 'type_membre','Choisir le type');
        $preuveRevenuLists = data_list($preuveRevenu, 'id_preuve_revenu', 'preuve_revenu','Choisir ...');
        $sourceRevenuLists = data_list($sourceRevenu, 'id_source_revenu', 'source_revenu','Choisir ...');
        $groupeSpecLists = data_list($groupeSpecifique, 'id_groupe_spec', 'groupe_spec','Choisir ...');
        echo $this->blade->view()->make('membre/historiqueMedical_vue', ['users' => $userLists,'typeMembre'=>$typeMembreLists,'preuveRevenu'=>$preuveRevenuLists,'sourceRevenu'=>$sourceRevenuLists,'groupeSpec'=>$groupeSpecLists]);
	}
}