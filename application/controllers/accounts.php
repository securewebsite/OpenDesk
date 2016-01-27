<?php

class Accounts extends CI_Controller {
	
	function overview()
	{
		$data['mode'] = "page";
		$data['today'] = date("Y-m-d");
		$data['subtitle'] = "";
		$this->session->set_userdata('menuitem', '');
		
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
		
		$this->db->select("entities.*");
		$this->db->select("options_entitystatus.description as entitystatus");
		$this->db->select("options_entitytypes.description as entitytype");
		$this->db->select("options_entitymodes.description as entitymode");
		$this->db->from('entities');
		$this->db->join('options_entitystatus', 'options_entitystatus.oesid = entities.status');
		$this->db->join('options_entitytypes', 'options_entitytypes.oetid = entities.type');
		$this->db->join('options_entitymodes', 'options_entitymodes.oemid = entities.mode');
		$this->db->where('entities.profile', $this->session->userdata('profile'));
		$data['entities'] = $this->db->get();
		
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
		
		$data['folder'] = 'INBOX';
		$imap_username = $this->session->userdata('imap_username');
		$dsn = sprintf('{%s}%s', IMAP_SERVER, "INBOX");		
		$imap = $this->mail->openMailbox(IMAP_EMAIL,IMAP_PASSWORD,$dsn);
		$data['mailboxinfo'] = $this->mail->getMailBoxInfo($imap);
		$data['messages'] = $this->mail->getAllMessages($imap,$dsn);
		imap_close($imap);
		
        $this->layout->buildPage('accounts/index', $data);
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
	
	function tasks_add(){
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
	
	function tasks_insert(){	
		$this->db->trans_start();
		$this->db->insert('users_tasks', $_POST);
		$this->db->trans_complete();
		
		redirect('settings/users_view/' . $_POST['uid'].'#tab_1_2');
	}
	
	function tasks_edit(){
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
	
	function tasks_update(){		
		$this->db->trans_start();
		$this->db->where('utid', $_POST['utid']);
		$this->db->update('users_tasks', $_POST);
		$this->db->trans_complete();

		redirect('settings/users_view/' . $_POST['uid'].'#tab_1_2');
	}
	
	
	function emails_drafts()
	{
		$data['mode'] = "page";
		$data['today'] = date("Y-m-d");
		$data['title'] = "Drafts";
		$data['subtitle'] = "";
		$data['folder'] = $this->uri->segment(3);
		$this->session->set_userdata('menuitem', 'emails');
		
		$dsn = sprintf('{%s}%s', IMAP_SERVER, "[Gmail]/Drafts");		
		$imap = $this->mail->openMailbox(IMAP_EMAIL,IMAP_PASSWORD,$dsn);
		$data['mailboxinfo'] = $this->mail->getMailBoxInfo($imap);
		$data['messages'] = $this->mail->getAllMessages($imap,$dsn);
		imap_close($imap);
		
		$this->layout->buildPage('emails/index', $data);
	}
	
	function emails_sentmail()
	{
		$data['mode'] = "page";
		$data['today'] = date("Y-m-d");
		$data['title'] = "Sent Mail";
		$data['subtitle'] = "";
		$data['folder'] = $this->uri->segment(3);
		$this->session->set_userdata('menuitem', 'emails');
		
		$dsn = sprintf('{%s}%s', IMAP_SERVER, "[Gmail]/Sent Mail");		
		$imap = $this->mail->openMailbox(IMAP_EMAIL,IMAP_PASSWORD,$dsn);
		$data['mailboxinfo'] = $this->mail->getMailBoxInfo($imap);
		$data['messages'] = $this->mail->getAllMessages($imap,$dsn);
		imap_close($imap);
		
		$this->layout->buildPage('emails/index', $data);
	}
	
	function emails_trash()
	{
		$data['mode'] = "page";
		$data['today'] = date("Y-m-d");
		$data['title'] = "Trash";
		$data['subtitle'] = "";
		$data['folder'] = $this->uri->segment(3);
		$this->session->set_userdata('menuitem', 'emails');
		
		$dsn = sprintf('{%s}%s', IMAP_SERVER, "[Gmail]/Trash");		
		$imap = $this->mail->openMailbox(IMAP_EMAIL,IMAP_PASSWORD,$dsn);
		$data['mailboxinfo'] = $this->mail->getMailBoxInfo($imap);
		$data['messages'] = $this->mail->getAllMessages($imap,$dsn);
		imap_close($imap);
		
		$this->layout->buildPage('emails/index', $data);
	}
	
	function emails_compose()
	{
		$data['mode'] = "page";
		$data['today'] = date("Y-m-d");
		$data['title'] = "New Email";
		$data['subtitle'] = "";
		$this->session->set_userdata('menuitem', 'emails');

		
		$dsn = sprintf('{%s}%s', IMAP_SERVER, IMAP_FOLDER);
		$imap = $this->mail->openMailbox(IMAP_EMAIL,IMAP_PASSWORD,$dsn);
		$data['mailboxinfo'] = $this->mail->getMailBoxInfo($imap);
		imap_close($imap);
		
		$this->layout->buildPage('emails/new', $data);
	}
	
	function emails_view()
	{
		$data['mode'] = "page";
		$data['today'] = date("Y-m-d");
		$data['title'] = "View Email";
		$data['subtitle'] = "";
		$data['msgno'] = $this->uri->segment(3);
		$data['folder'] = $this->uri->segment(4);
		$this->session->set_userdata('menuitem', 'emails');
		
		switch ($data['folder']){
			case 1 : $dsn = sprintf('{%s}%s', IMAP_SERVER, "[Gmail]/Sent Mail");break;
			case 2 : $dsn = sprintf('{%s}%s', IMAP_SERVER, "[Gmail]/Drafts");break;
			case 3 : $dsn = sprintf('{%s}%s', IMAP_SERVER, "[Gmail]/Trash");break;
			default : $dsn = sprintf('{%s}%s', IMAP_SERVER, "INBOX");break;
		};
		
		$imap = $this->mail->openMailbox(IMAP_EMAIL,IMAP_PASSWORD,$dsn);
		$data['mailboxinfo'] = $this->mail->getMailBoxInfo($imap);
		$message = $this->mail->readMessage($imap,$data['msgno']);
		imap_close($imap);
		
		$data['msgoverview'] = $message['overview'];
		$data['msgbody'] = quoted_printable_decode($message['body']);
		$data['msgheader'] = $message['header']->from;
		
		$fromaddress = $data['msgheader'][0]->mailbox."@".$data['msgheader'][0]->host;
		$data['eid'] = $this->database_model->verify_email($fromaddress);
		
		$this->layout->buildPage('accounts/emails/view', $data);
	}
	
	function emails_reply()
	{
		$data['mode'] = "page";
		$data['today'] = date("Y-m-d");
		$data['title'] = "Reply Email";
		$data['subtitle'] = "";
		$data['msgno'] = $this->uri->segment(3);
		$data['msgtype'] = $this->uri->segment(4);
		$this->session->set_userdata('menuitem', 'emails');

		
		$dsn = sprintf('{%s}%s', IMAP_SERVER, IMAP_FOLDER);
		$imap = $this->mail->openMailbox(IMAP_EMAIL,IMAP_PASSWORD,$dsn);
		$data['mailboxinfo'] = $this->mail->getMailBoxInfo($imap);
		$message = $this->mail->readMessage($imap,$data['msgno']);
		imap_close($imap);
		
		$data['msgoverview'] = $message['overview'];
		$data['msgbody'] = quoted_printable_decode($message['body']);
		
		$this->layout->buildPage('emails/reply', $data);
	}
	
	function emails_send(){
		$dsn = sprintf('{%s}%s', IMAP_SERVER, IMAP_FOLDER);
		$imap = $this->mail->openMailbox(IMAP_EMAIL,IMAP_PASSWORD,$dsn);
		$data['mailboxinfo'] = $this->mail->getMailBoxInfo($imap);
		$this->mail->sendMessage($_POST['toaddress'], $_POST['ccaddress'], $_POST['bccaddress'], $_POST['subject'], $_POST['message']);
		imap_close($imap);
		
		redirect('emails/inbox');
	}
	
	function emails_archive(){

		$data['today'] = date("Y-m-d");
		$data['msgno'] = $this->uri->segment(3);
		$data['folder'] = $this->uri->segment(4);
		$this->session->set_userdata('menuitem', 'emails');
		
		switch ($data['folder']){
			case 1 : $dsn = sprintf('{%s}%s', IMAP_SERVER, "[Gmail]/Sent Mail");break;
			case 2 : $dsn = sprintf('{%s}%s', IMAP_SERVER, "[Gmail]/Drafts");break;
			case 3 : $dsn = sprintf('{%s}%s', IMAP_SERVER, "[Gmail]/Trash");break;
			default : $dsn = sprintf('{%s}%s', IMAP_SERVER, "INBOX");break;
		};
		
		$imap = $this->mail->openMailbox(IMAP_EMAIL,IMAP_PASSWORD,$dsn);
		$data['mailboxinfo'] = $this->mail->getMailBoxInfo($imap);
		$message = $this->mail->readMessage($imap,$data['msgno']);
		imap_close($imap);
		
		$msgoverview = $message['overview'];
		$msgbody = quoted_printable_decode($message['body']);
		$msgheader = $message['header']->from;
		
		$fromaddress = $msgheader[0]->mailbox."@".$msgheader[0]->host;
		$eid = $this->database_model->verify_email($fromaddress);
		
		$this->db->trans_start();
			$comment = array(
			   'eid' => $eid,
			   'type' => 3,
			   'description' => $msgoverview[0]->subject,
			   'content' => $msgbody,
			   'createdby' => $this->session->userdata('uid'),
			   'updated' => date('Y-m-d h:m:s')		   
			);
			$this->db->insert('entities_comments', $comment);
			
			$activity = array(
			   'eid' => $eid ,
			   'type' => 1 ,
			   'description' => 'Comment Added',
			   'createdby' => $this->session->userdata('uid'),
			   'updated' => date('Y-m-d h:m:s')
			);		
			$this->db->insert('entities_activities', $activity);
		$this->db->trans_complete();	

		$imap = $this->mail->openMailbox(IMAP_EMAIL,IMAP_PASSWORD,$dsn);
		$this->mail->deleteMessage($imap,$data['msgno']);
		imap_close($imap);		
		
		redirect('accounts/overview#tab_1_5');
	}
	
}
?>