<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class Database_model extends CI_Model 
{
	/**
	 * Constructor
	 *
	 * @access	public
	 */
    function __construct(){
        parent::__construct();
	}
	

	/**
	 * Verify that an email address is found on the database
	 *
	 * @access	public
	 * @param	null
	 * @return	string
	 */	   
	function verify_email($fromaddress)
	{
		$this->db->select('entities.*');
		$this->db->from('entities');
		$this->db->join('entities_contacts', 'entities_contacts.eid = entities.eid');
		$this->db->where('entities_contacts.email', $fromaddress);
		$query = $this->db->get();
		$entity = $query->first_row();
		
		
		if (isset($entity->eid)){
			return $entity->eid;
		}else{
			return NULL;
		}
		
	}

	// --------------------------------------------------------------------

}
?>