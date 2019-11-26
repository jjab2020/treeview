<?php

class UserModel extends CI_Model
{
    

public function check($email, $password)
    {
        
        $query = $this->db->where([
            'courriel_employe' => $email,
            'password_user' => md5($password)
        ])->get('user');
       
        if ($query->num_rows() > 0) {
            
            return $query->result();
        }
    }

    public function getUser(){
       
        $this->db->select('us.id_user user_id,concat(us.nom_user," ",us.prenom_user) user_nom');
		$this->db->from('user us');
		
		return $this->db->get()->result_array();	

	}

}
