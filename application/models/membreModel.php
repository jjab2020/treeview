<?php
class MembreModel extends CI_Model
{
/**
 * retourne la liste des clients
 * @return 
 */
	public function getmembre()
	{
		$this->db->select('*');
		$this->db->from('membre');
		return $this->db->get();
	}
	public function getSoutien()
	{
		$this->db->select('*');
		$this->db->from('soutien_membre');
		return $this->db->get();
	}
	public function getVille()
	{
		$this->db->select('*');
		$this->db->from('ville');
		return $this->db->get()->result_array();
	}
	public function getSexe()
	{
		$this->db->select('*');
		$this->db->from('sexe');
		return $this->db->get()->result_array();
	}
	public function getEtatCivil()
	{
		$this->db->select('*');
		$this->db->from('etat_civil');
		return $this->db->get()->result_array();
	}
	public function getCitoyennete()
	{
		$this->db->select('*');
		$this->db->from('citoyennete');
		return $this->db->get()->result_array();
	}
	public function getLangue()
	{
		$this->db->select('*');
		$this->db->from('langue');
		return $this->db->get();
	}
	public function getLien()
	{
		$this->db->select('*');
		$this->db->from('lien');
		return $this->db->get()->result_array();
	}
	public function getTypeMembre()
	{
		$this->db->select('*');
		$this->db->from('type_membre');
		return $this->db->get()->result_array();
	}
	public function getSourceRevenu()
	{
		$this->db->select('*');
		$this->db->from('source_revenu');
		return $this->db->get()->result_array();
	}
	public function getPreuveRevenu()
	{
		$this->db->select('*');
		$this->db->from('preuve_revenu');
		return $this->db->get()->result_array();
	}
	public function getGroupeSpecifique()
	{
		$this->db->select('*');
		$this->db->from('groupe_specefique');
		return $this->db->get()->result_array();
	}
	
}