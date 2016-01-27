<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Loader File
 *
 * @package		YATS 1.2 -- The Layout Library
 * @subpackage	Views
 * @category	Template
 * @author		Mario Mariani
 * @copyright	Copyright (c) 2006-2007, mariomariani.net All rights reserved.
 * @license		http://svn.mariomariani.net/yats/trunk/license.txt
 */

$this->load->view($data['settings']['default'] . "/" . $data['settings']['commons'] . "header", $data);

if ($this->session->userdata('logged_in')) {

	$this->db->where('uid', $this->session->userdata('uid'));
	$this->db->where('status', 1);
	$this->db->from('users_tasks');
	$tasks = $this->db->get();
	$data['usertasks'] = $tasks->result_array();
	
	$this->db->select("entities_tickets.*");
	$this->db->select("entities.*");
	$this->db->from('entities');
	$this->db->join('entities_tickets', 'entities_tickets.eid = entities.eid');
	$this->db->where('entities_tickets.ownedby', $this->session->userdata('uid'));
	$this->db->where('entities_tickets.status !=', 3);
	if ($this->session->userdata['accesslevel'] != 1){
		$this->db->where('entities.profile', $this->session->userdata('profile'));		
	}
	$tickets = $this->db->get();
	$data['entitytickets'] = $tickets->result_array();
	
	$this->db->where('uid', $this->session->userdata('uid'));
	$this->db->or_where('uid', 0);
	$this->db->from('users_notifications');
	$notifications = $this->db->get();
	$usernotifications = $notifications->result_array();	
	
	$this->db->select("entities.*");
	$this->db->select("entities_contacts.*");
	$this->db->from('entities');
	$this->db->join('entities_contacts', 'entities_contacts.eid = entities.eid');
	$this->db->where('entities.profile', $this->session->userdata('profile'));
	$this->db->where('entities.createdby', $this->session->userdata('uid'));
	//$this->db->where('entities.mode', 1);
	//$this->db->where('entities.status', 2);
	$this->db->where('entities_contacts.dateofbirth !=', "0000-00-00");
	$this->db->where('SUBSTRING(entities_contacts.dateofbirth,6,6)', date('m-d'));
	$query = $this->db->get();
	$x = sizeof($usernotifications);
	foreach ($query->result() as $row){
		$usernotifications[$x]['unid'] = "1";
		$usernotifications[$x]['uid'] = $this->session->userdata('profile');
		$usernotifications[$x]['description'] = "Birthday Reminder for ".$row->firstname."&nbsp;".$row->lastname;
		$usernotifications[$x]['updated'] = date('Y-m-d');		
		$x++;
	}
	$data['usernotifications'] = $usernotifications;
	
	$this->load->view($data['settings']['default'] . "/" . $data['settings']['commons'] . "menu", $data);
	$this->load->view($data['settings']['default'] . "/" . $data['settings']['content'] . "$view",  $data);
}else {
	$this->load->view($data['settings']['default'] . "/" . $data['settings']['commons'] . "login",  $data);
}

$this->load->view($data['settings']['default'] . "/" . $data['settings']['commons'] . "footer", $data);

?>