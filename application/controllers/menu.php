<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends MY_Controller {
	
	public function getItem()
    {
          $data = [];
          $parent_key = '0';
          $row = $this->db->query('SELECT id, text, url , classname from menu');
            
          if($row->num_rows() > 0)
          {
              $data = $this->membersTree($parent_key);
          }else{
              $data=["id"=>"0","text"=>"No Members presnt in list","text"=>"No Members is presnt in list","children"=>[]];
          }
   
          echo json_encode(array_values($data));
	}
	
	public function membersTree($parent_key)
    {
        $row1 = [];
        $row = $this->db->query('SELECT id, text, classname from menu WHERE parent_id="'.$parent_key.'"')->result_array();
    
        foreach($row as $key => $value)
        {
           $row1[$key]['imageCssClass'] = $value['classname'];
           $row1[$key]['text'] = $value['text'];
           $row1[$key]['children'] = array_values($this->membersTree($value['id']));
        }
  
        return $row1;
    }
      
}
