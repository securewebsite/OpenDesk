<?php

class Settings extends CI_Controller {
	
	function groups()
	{
		$data['mode'] = "page";
		$data['today'] = date("Y-m-d");
		$data['title'] = "Groups";
		$data['subtitle'] = "";
		$this->session->set_userdata('menuitem', 'settings');
		
		$this->db->select("profiles_groups.*");
		$this->db->from('profiles_groups');
		$this->db->where('profiles_groups.pid', $this->session->userdata('profile'));		
		$data['query'] = $this->db->get();
		
        $this->layout->buildPage('settings/groups', $data);
	}
	
	function groups_view()
	{
		$data['mode'] = "page";
		$data['today'] = date("Y-m-d");
		$data['subtitle'] = "";
		$this->session->set_userdata('menuitem', 'settings');
		$data['pgid'] = $this->uri->segment(3);
		
		$this->db->select("profiles_groups.*");
		$this->db->from('profiles_groups');
		$this->db->where('profiles_groups.pgid', $data['pgid']);
		$group = $this->db->get();
		$data['group'] = $group->first_row();
		$data['title'] = $data['group']->name;
		
		$this->db->select("entities.*");
		$this->db->from('entities');
		$this->db->where('entities.status', 1);
		$this->db->where_in('entities.groups', $data['pgid']);
		$data['leads'] = $this->db->get();
		
		$this->db->select("entities.*");
		$this->db->from('entities');
		$this->db->where('entities.status', 2);
		$this->db->where_in('entities.groups', $data['pgid']);
		$data['prospects'] = $this->db->get();
		
		$this->db->select("entities.*");
		$this->db->from('entities');
		$this->db->where('entities.status', 3);
		$this->db->where_in('entities.groups', $data['pgid']);
		$data['clients'] = $this->db->get();
		
        $this->layout->buildPage('settings/groups/view', $data);
	}
	
	function groups_add(){
		$data['mode'] = "page";
		$data['today'] = date("Y-m-d");
		$data['title'] = "New Group";
		$data['subtitle'] = "";
		
        $this->layout->buildPage('settings/groups/add', $data);
	}
	
	function groups_insert(){	
	
		$this->db->trans_start();
		$this->db->insert('profiles_groups', $_POST);
		$this->db->trans_complete();
		
		redirect('settings/groups');
	}
	
	function groups_edit()
	{
		$data['mode'] = "page";
		$data['today'] = date("Y-m-d");
		$data['subtitle'] = "";
		$this->session->set_userdata('menuitem', 'settings');
		$data['pgid'] = $this->uri->segment(3);
		
		$this->db->select("profiles_groups.*");
		$this->db->from('profiles_groups');
		$this->db->where('profiles_groups.pgid', $data['pgid']);
		$group = $this->db->get();
		$data['group'] = $group->first_row();
		$data['title'] = $data['group']->name;
		
        $this->layout->buildPage('settings/groups/edit', $data);
	}
	
	function groups_update(){
	
		$data['pgid'] = $this->uri->segment(3);
		
		$this->db->trans_start();
		$this->db->where('profiles_groups.pgid', $_POST['pgid']);
		$this->db->update('profiles_groups', $_POST);
		$this->db->trans_complete();

		redirect('settings/groups/view/' . $_POST['pgid']);
	}
	
	function groups_unsubscribe(){
	
		$data['pgid'] = $this->uri->segment(3);
		$data['eid'] = $this->uri->segment(4);
		
		$this->db->trans_start();
		$this->db->where('entities.eid', $_POST['eid']);
		$this->db->update('entities', $group);
		$this->db->trans_complete();

		redirect('settings/groups/view/' . $_POST['pgid']);
	}


	function users()
	{
		$data['mode'] = "page";
		$data['today'] = date("Y-m-d");
		$data['title'] = "Users";
		$data['subtitle'] = "";
		$this->session->set_userdata('menuitem', 'settings');
		
		$this->db->select("users.*");
		$this->db->select("options_useraccesslevels.description as accessleveldescription");
		$this->db->select("profiles.name as profilename");
		$this->db->from('users');
		$this->db->join('options_useraccesslevels', 'options_useraccesslevels.oualid = users.accesslevel');
		$this->db->join('profiles', 'profiles.pid = users.profile');
		$this->db->where('users.profile', $this->session->userdata('profile'));		
		$data['query'] = $this->db->get();
		
        $this->layout->buildPage('settings/users', $data);
	}
	
	function users_view()
	{
		$data['mode'] = "page";
		$data['today'] = date("Y-m-d");
		$data['subtitle'] = "";
		$this->session->set_userdata('menuitem', 'settings');
		
		if ($this->uri->segment(3) != ""){
			$data['uid'] = $this->uri->segment(3);
		}else{
			$data['uid'] = $this->session->userdata('uid');
		}
		
		$this->db->select("users.*");
		$this->db->select("profiles.name as profilename");
		$this->db->from('users');
		$this->db->join('profiles', 'profiles.pid = users.profile');
		$this->db->where('users.uid', $data['uid']);
		$user = $this->db->get();
		$data['user'] = $user->first_row();
		$data['title'] = $data['user']->fullname;
		
		$data['accesslevels'] = $this->db->get('options_useraccesslevels');
		
		$this->db->select("users_tasks.*");
		$this->db->select("options_usertaskstatus.description as usertaskstatus");
		$this->db->from('users_tasks');
		$this->db->join('options_usertaskstatus', 'options_usertaskstatus.outsid = users_tasks.status');
		$this->db->where('users_tasks.uid', $data['uid']);
		$data['tasks'] = $this->db->get();
		
		$this->db->select("entities_tickets.*");
		$this->db->select("options_entityticketstatus.description as entityticketstatus");
		$this->db->select("options_entitytickettypes.description as entitytickettype");
		$this->db->select("entities.*");
		$this->db->from('entities_tickets');
		$this->db->join('options_entityticketstatus', 'options_entityticketstatus.oetsid = entities_tickets.status');
		$this->db->join('options_entitytickettypes', 'options_entitytickettypes.oettid = entities_tickets.type');
		$this->db->join('entities', 'entities.eid = entities_tickets.eid');
		$this->db->where('entities_tickets.ownedby', $data['uid']);
		$this->db->where('entities.profile', $this->session->userdata('profile'));		
		$data['tickets'] = $this->db->get();
		
		$imap_username = $this->session->userdata('imap_username');
		
        $this->layout->buildPage('settings/users/view', $data);
	}
	
	function users_add(){
		$data['mode'] = "page";
		$data['today'] = date("Y-m-d");
		$data['title'] = "New User";
		$data['subtitle'] = "";
		
		$this->db->where('profiles.pid', $this->session->userdata('profile'));		
		$data['profiles'] = $this->db->get('profiles');
		$data['accesslevels'] = $this->db->get('options_useraccesslevels');
		
        $this->layout->buildPage('settings/users/add', $data);
	}
	
	function users_insert(){	
		
		$password = md5($_POST['password']);
		$_POST['password'] = $password;
	
		$this->db->trans_start();
		$this->db->insert('users', $_POST);
		$this->db->trans_complete();
		
		redirect('settings/users');
	}
	
	function users_edit(){
		$data['mode'] = "page";
		$data['today'] = date("Y-m-d");
		$data['subtitle'] = "";
		$this->session->set_userdata('menuitem', 'settings');
		
		if ($this->uri->segment(3) != ""){
			$data['uid'] = $this->uri->segment(3);
		}else{
			$data['uid'] = $this->session->userdata('uid');
		}
		
		$this->db->select("users.*");
		$this->db->from('users');
		$this->db->where('users.uid', $data['uid']);
		$users = $this->db->get();
		$data['user'] = $users->first_row();
		$data['title'] = $data['user']->fullname;
		
		$data['accesslevels'] = $this->db->get('options_useraccesslevels');
		
        $this->layout->buildPage('settings/users/edit', $data);
	}
	
	function users_update(){
		if (isset($_POST['password'])){
			$encpassword = md5($_POST['password']);
			$_POST['password'] = $encpassword;
		}
	
		$this->db->trans_start();
		$this->db->where('uid', $_POST['uid']);
		$this->db->update('users', $_POST);
		$this->db->trans_complete();

		redirect('settings/users/view/' . $_POST['uid']);
	}
	
	function users_delete(){
		$this->db->trans_start();
		$this->db->delete('users', array('uid' => $this->uri->segment(3)));
		$this->db->trans_complete();

		redirect('settings/users');
	}

	function users_reset(){
		$data['mode'] = "page";
		$data['today'] = date("Y-m-d");
		$data['subtitle'] = "";
		$data['uid'] = $this->uri->segment(3);
		
		$this->db->select("users.*");
		$this->db->from('users');
		$this->db->where('users.uid', $data['uid']);
		$users = $this->db->get();
		$data['user'] = $users->first_row();
		$data['title'] = $data['user']->fullname;
		
        $this->layout->buildPage('settings/users/reset', $data);
	}
	
	function users_tasks_add(){
		$data['mode'] = "page";
		$data['today'] = date("Y-m-d");
		$data['subtitle'] = "";
		
		if ($this->uri->segment(3) != ""){
			$data['uid'] = $this->uri->segment(3);
		}else{
			$data['uid'] = $this->session->userdata('uid');
		}
		
		$this->db->select("users.*");
		$this->db->from('users');
		$this->db->where('users.uid', $data['uid']);
		$user = $this->db->get();
		$data['user'] = $user->first_row();
		$data['title'] = $data['user']->fullname;
		
        $this->layout->buildPage('settings/users/tasks/add', $data);
	}
	
	function users_tasks_insert(){	
		$this->db->trans_start();
		$this->db->insert('users_tasks', $_POST);
		$this->db->trans_complete();
		
		redirect('settings/users_view/' . $_POST['uid'].'#tab_1_2');
	}
	
	function users_tasks_edit(){
		$data['mode'] = "page";
		$data['today'] = date("Y-m-d");
		$data['subtitle'] = "";
		$this->session->set_userdata('menuitem', 'settings');
		$data['utid'] = $this->uri->segment(3);		
		
		$this->db->select("users.*");
		$this->db->select("users_tasks.*");
		$this->db->from('users');
		$this->db->join('users_tasks', 'users_tasks.uid = users.uid');
		$this->db->where('users_tasks.utid', $data['utid']);
		$users = $this->db->get();
		$data['user'] = $users->first_row();
		$data['title'] = $data['user']->fullname;
		
		$data['taskstatus'] = $this->db->get('options_usertaskstatus');
		
        $this->layout->buildPage('settings/users/tasks/edit', $data);
	}
	
	function users_tasks_update(){		
		$this->db->trans_start();
		$this->db->where('utid', $_POST['utid']);
		$this->db->update('users_tasks', $_POST);
		$this->db->trans_complete();

		redirect('settings/users_view/' . $_POST['uid'].'#tab_1_2');
	}
	
	function profiles()
	{
		$data['mode'] = "page";
		$data['today'] = date("Y-m-d");
		$data['title'] = "Profiles";
		$data['subtitle'] = "";
		$this->session->set_userdata('menuitem', 'settings');
		
		$this->db->select("profiles.*");
		$this->db->from('profiles');
		$this->db->where('profiles.pid', $this->session->userdata('profile'));		
		$data['query'] = $this->db->get();
		
        $this->layout->buildPage('settings/profiles', $data);
	}
	
	function profiles_view()
	{
		$data['mode'] = "page";
		$data['today'] = date("Y-m-d");
		$data['subtitle'] = "";
		$data['pid'] = $this->uri->segment(3);
		
		$this->session->set_userdata('menuitem', 'settings');
		
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
		
        $this->layout->buildPage('settings/profiles/view', $data);
	}
	
	function profiles_add(){
		$data['mode'] = "page";
		$data['today'] = date("Y-m-d");
		$data['title'] = "New Profile";
		$data['subtitle'] = "";
		
        $this->layout->buildPage('settings/profiles/add', $data);
	}
	
	function profiles_insert(){	
		$this->db->trans_start();
		$this->db->insert('profiles', $_POST);
		$this->db->trans_complete();
		
		redirect('settings/profiles');
	}
	
	function profiles_edit(){
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
		
        $this->layout->buildPage('settings/profiles/edit', $data);
	}
	
	function profiles_update(){
	
		$this->db->trans_start();
		$this->db->where('pid', $_POST['pid']);
		$this->db->update('profiles', $_POST);
		$this->db->trans_complete();

		redirect('settings/profiles/view/' . $_POST['pid']);
	}
	
	function profiles_delete(){
		$this->db->trans_start();
		//$this->db->delete('profiles', array('pid' => $this->uri->segment(3)));
		$this->db->trans_complete();

		redirect('settings/profiles');
	}
	
	function options()
	{
		$data['mode'] = "page";
		$data['today'] = date("Y-m-d");
		$data['title'] = "Options";
		$data['subtitle'] = "";
		$this->session->set_userdata('menuitem', 'settings');
		
		$this->db->select("profiles.*");
		$this->db->from('profiles');
		$this->db->where('profiles.pid', $this->session->userdata('profile'));		
		$data['query'] = $this->db->get();
		
        $this->layout->buildPage('settings/options', $data);
	}
}
?>