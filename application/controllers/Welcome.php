<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

	public function index()
	{
	
		$this->retrieveMenuOptions($this->retrieveModules($this->retrievePermissions()),$this->retrievePermissions());
		exit();
		echo $this->blade->view()->make('membreSearch');
	}

	public function retrievePermissions(){

		$this->db->select('p.menu_id');
		$this->db->from('user u');
		$this->db->join('permissions p', 'u.groupes_id_groupe = p.groupes_id_groupe');
		$this->db->join('menu m', 'p.menu_id = m.id');
		$this->db->where('u.nom_user','jabrane'); 
		$rows = $this->db->get()->result_array();
		$permissions = [];
		
		if(count($rows) > 0){
			foreach($rows as $row)
			{
				$permissions[] = $row['menu_id'];
			}
		}
	
		return $permissions;
		
	}

	public function retrieveModules($permissions){
			$inClause = '(' . join(',',$permissions) . ')';
			$row = $this->db->query("SELECT id, text, url , classname as imageCssClass from menu WHERE parent_id = 0 AND id in $inClause");
			$result = $row->result_array();
			return $result;
		}


	public function retrieveMenuOptions($modules, $permissions){
		
		$inClause = '(' . join(',',$permissions) . ')';
			$result = [];
			foreach ($modules as $module) {
				$sqlQuery = "SELECT id, text, url , classname as imageCssClass FROM menu WHERE parent_id = '";
				$sqlQuery .= $module['id'] ."' AND id in $inClause";

				$rows = $this->db->query($sqlQuery);
				$resultdb = $rows->result_array();
				$count = $rows->num_rows();
				
				if ($count > 0){
						$module['children'] = array();
						foreach($resultdb as $row){
							$module['children'][] = $row;		
						}
					}
					$result[] = $module;
			}
			return $result;
	}
}
