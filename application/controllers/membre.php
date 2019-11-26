<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Membre extends MY_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model('membreModel');
    }

    public function getAllmembre()
    {
       
        $membres = $this->membreModel->getmembre();

        $data = [];

        foreach ($membres->result() as $r) {

            $data[] = [
                $r->nom_membre,
                $r->prenom_membre

            ];
        }

        $output = [
            "data" => $data
        ];

        echo json_encode($output);
    }

}
