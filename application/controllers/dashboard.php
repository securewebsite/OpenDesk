<?php

class Dashboard extends CI_Controller {

	function index()
	{
		$this->session->set_userdata('menuitem', 'dashboard');
		
		$this->db->select("profiles.*");
		$this->db->from('profiles');
		$this->db->where('active', '1');
		$this->db->where('pid', $this->session->userdata('profile'));		
		$profiles = $this->db->get();
		$data['profile'] = $profiles->first_row();
		
		$this->db->where('status', '1');
		$this->db->where('entities.profile', $this->session->userdata('profile'));		
		$this->db->from('entities');
		$data['leads'] = $this->db->count_all_results();
		
		$this->db->where('status', '2');
		$this->db->where('entities.profile', $this->session->userdata('profile'));		
		$this->db->from('entities');
		$data['prospects'] = $this->db->count_all_results();
		
		$this->db->where('status', '3');
		$this->db->where('entities.profile', $this->session->userdata('profile'));		
		$this->db->from('entities');
		$data['clients'] = $this->db->count_all_results();
		
		$this->db->select("users_tasks.*");
		$this->db->select("users.*");
		$this->db->from('users_tasks');
		$this->db->join('users', 'users_tasks.uid = users.uid');
		$this->db->where('users_tasks.uid', $this->session->userdata('uid'));
		$this->db->where('users.profile', $this->session->userdata('profile'));
		$this->db->where('users_tasks.status', 1);
		$data['tasks'] = $this->db->get();		
		
		$this->db->select("entities_tickets.*");
		$this->db->select("entities.*");
		$this->db->select("options_entitytickettypes.description as tickettypedescription");
		$this->db->from('entities');
		$this->db->join('entities_tickets', 'entities_tickets.eid = entities.eid');
		$this->db->join('options_entitytickettypes', 'options_entitytickettypes.oettid = entities_tickets.type');
		$this->db->where('entities_tickets.ownedby', $this->session->userdata('uid'));
		$this->db->where('entities_tickets.status !=', 3);
		$this->db->where('entities.profile', $this->session->userdata('profile'));		
		$this->db->order_by("entities_tickets.duedate","ASC");
		$data['tickets'] = $this->db->get();
		
        $this->layout->buildPage('dashboard/index', $data);
	}
	
	function search()
	{
		$this->session->set_userdata('menuitem', '');
		
		$data['searchstring'] = $_POST['searchstring'];
		
		$this->db->select("entities.*");
		$this->db->select("options_entitystatus.description as entitystatus");
		$this->db->select("options_entitytypes.description as entitytype");
		$this->db->from('entities');
		$this->db->join('options_entitystatus', 'options_entitystatus.oesid = entities.status');
		$this->db->join('options_entitytypes', 'options_entitytypes.oetid = entities.type');
		$this->db->like('name', $data['searchstring']);
		$this->db->where('entities.status', 1);
		$this->db->where('entities.profile', $this->session->userdata('profile'));		
		$data['leads'] = $this->db->get();
		
		$this->db->select("entities.*");
		$this->db->select("options_entitystatus.description as entitystatus");
		$this->db->select("options_entitytypes.description as entitytype");
		$this->db->from('entities');
		$this->db->join('options_entitystatus', 'options_entitystatus.oesid = entities.status');
		$this->db->join('options_entitytypes', 'options_entitytypes.oetid = entities.type');
		$this->db->like('name', $data['searchstring']);
		$this->db->where('entities.status', 2);
		$this->db->where('entities.profile', $this->session->userdata('profile'));		
		$data['prospects'] = $this->db->get();
		
		$this->db->select("entities.*");
		$this->db->select("options_entitystatus.description as entitystatus");
		$this->db->select("options_entitytypes.description as entitytype");
		$this->db->from('entities');
		$this->db->join('options_entitystatus', 'options_entitystatus.oesid = entities.status');
		$this->db->join('options_entitytypes', 'options_entitytypes.oetid = entities.type');
		$this->db->like('name', $data['searchstring']);
		$this->db->where('entities.status', 3);
		$this->db->where('entities.profile', $this->session->userdata('profile'));		
		$data['clients'] = $this->db->get();
		
        $this->layout->buildPage('dashboard/search/results', $data);
	}
	

}
?>