<?php

class Profiles extends CI_Controller {
	
	function index()
	{
		$data['mode'] = "page";
		$data['today'] = date("Y-m-d");
		$data['title'] = "Profiles";
		$data['subtitle'] = "";
		$this->session->set_userdata('menuitem', 'profiles');
		
		$this->db->select("profiles.*");
		$this->db->from('profiles');
		$this->db->where('profiles.pid', $this->session->userdata('profile'));		
		$data['query'] = $this->db->get();
		
        $this->layout->buildPage('profiles/index', $data);
	}
	
	function overview()
	{
		$data['mode'] = "page";
		$data['today'] = date("Y-m-d");
		$data['subtitle'] = "";
		if ($this->uri->segment(3) != NULL){
			$data['pid'] = $this->uri->segment(3);
		}else{
			$data['pid'] = $this->session->userdata('profile');
		}
		
		$this->session->set_userdata('menuitem', 'profiles');
		
		$this->db->select("profiles.*");
		$this->db->from('profiles');
		$this->db->where('profiles.pid', $data['pid']);
		$profile = $this->db->get();
		$data['profile'] = $profile->first_row();
		$data['title'] = $data['profile']->name;
		
		$this->db->select("profiles.*");
		$this->db->from('profiles');
		$data['profiles'] = $this->db->get();
		
		$this->db->select("users.*");
		$this->db->select("options_userstatus.description as userstatus");
		$this->db->select("options_useraccesslevels.description as useraccesslevel");
		$this->db->from('users');
		$this->db->join('options_userstatus', 'options_userstatus.ousid = users.status');
		$this->db->join('options_useraccesslevels', 'options_useraccesslevels.oualid = users.accesslevel');
		$this->db->where('users.profile', $data['pid']);
		$data['users'] = $this->db->get();
		
        $username = $this->session->userdata('sms_username');
		$password = $this->session->userdata('sms_password');
		$api_id = $this->session->userdata('sms_api');			
		$this->curl->open();
		$data['sms'] = $this->curl->http_get("https://api.clickatell.com/http/getbalance?user=".$username ."&password=".$password."&api_id=".$api_id);
		$this->curl->close();
		
        $this->layout->buildPage('profiles/view', $data);
	}
	
	function add(){
		$data['mode'] = "page";
		$data['today'] = date("Y-m-d");
		$data['title'] = "New Profile";
		$data['subtitle'] = "";
		
        $this->layout->buildPage('profiles/add', $data);
	}
	
	function insert(){	
		$this->db->trans_start();
		$this->db->insert('profiles', $_POST);
		$this->db->trans_complete();
		
		redirect('profiles');
	}
	
	function edit(){
		$data['mode'] = "page";
		$data['today'] = date("Y-m-d");
		$data['subtitle'] = "";
		$data['pid'] = $this->uri->segment(3);
		
		$this->db->select("profiles.*");
		$this->db->from('profiles');
		$this->db->where('profiles.pid', $data['pid']);
		$profiles = $this->db->get();
		$data['profile'] = $profiles->first_row();
		$data['title'] = $data['profile']->name;
		
        $this->layout->buildPage('profiles/edit', $data);
	}
	
	function update(){
	
		$this->db->trans_start();
		$this->db->where('pid', $_POST['pid']);
		$this->db->update('profiles', $_POST);
		$this->db->trans_complete();

		redirect('profiles/overview/' . $_POST['pid']);
	}
	
	function delete(){
		$this->db->trans_start();
		//$this->db->delete('profiles', array('pid' => $this->uri->segment(3)));
		$this->db->trans_complete();

		redirect('profiles');
	}
}
?>