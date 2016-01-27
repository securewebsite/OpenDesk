<?php

class Authentication extends CI_Controller {
	
	function index(){
	}
	
	function login(){
        $data['mode'] = "page";
		
		//Check incoming variables
		$rules['login_username']	= "required|min_length[4]|max_length[32]";
		$rules['login_password']	= "required|min_length[4]|max_length[32]";		

		$this->validation->set_rules($rules);

		$fields['login_username'] = 'Username';
		$fields['login_password'] = 'Password';

		$this->validation->set_fields($fields);

		if ($this->validation->run() == TRUE) {
            //$data['message'] = "Incorrect username or password, please try again.";
            //$this->layout->buildPage('authentication/login', $data);
		//} else {

			if($this->simplelogin->login($this->input->post('login_username'), $this->input->post('login_password'))) {
				$this->session->set_userdata('auth_status', 'User currently logged in: '. $this->session->userdata('fullname'));
				//$this->session->set_userdata('auth_status', 1);
				$this->db->where('uid', $this->session->userdata('uid'));
				$this->db->set('updated', date("Y-m-d"));
				$this->db->update('users');
				
				$this->db->select("profiles.*");
				$this->db->from('profiles');
				$this->db->where('profiles.pid', $this->session->userdata('profile'));
				$result = $this->db->get();
				$profile = $result->first_row();
				$this->session->set_userdata('module_sti', $profile->module_sti);
				$this->session->set_userdata('module_lti', $profile->module_lti);
				$this->session->set_userdata('module_hsb', $profile->module_hsb);
				$this->session->set_userdata('module_cis', $profile->module_cis);
				$this->session->set_userdata('sms_api', $profile->sms_apiid);
				$this->session->set_userdata('sms_username', $profile->sms_username);
				$this->session->set_userdata('sms_password', $profile->sms_password);
				$this->session->set_userdata('profile_name', $profile->name);
				
				redirect('dashboard/index');
			} else {
				$data['message'] = "Username or password not found.";
				$this->layout->buildPage('authentication/login', $data);
			}
		}else{
			//$data['message'] = "Username or password not valid.";
			$this->layout->buildPage('authentication/login', $data);
		}
	}

	function logout()
	{
        $data['body'] = "";
        $data['window'] = "mainWindow";
        $data['mode'] = "view";
        
		//Load
		$this->load->helper('url');

		//Logout
		$this->simplelogin->logout();
        $data['message'] = "You have successfully logged out.";
		$this->layout->buildPage('authentication/login', $data);
	}
}
?>