<?php

class Tools extends CI_Controller {
	
	
	function useremails()
	{
		$data['mode'] = "page";
		$data['today'] = date("Y-m-d");
		$data['title'] = "User Emails";
		$data['subtitle'] = "";
		$data['folder'] = $this->uri->segment(3);
		$this->session->set_userdata('menuitem', 'tools');

		
		switch ($data['folder']){
			case 1 : $dsn = sprintf('{%s}%s', IMAP_SERVER, "[Gmail]/Sent Mail");break;
			case 2 : $dsn = sprintf('{%s}%s', IMAP_SERVER, "[Gmail]/Drafts");break;
			case 3 : $dsn = sprintf('{%s}%s', IMAP_SERVER, "[Gmail]/Trash");break;
			default : $dsn = sprintf('{%s}%s', IMAP_SERVER, "INBOX");break;
		}
		//$dsn = sprintf('{%s}%s', IMAP_SERVER, IMAP_FOLDER);
		$imap = $this->mail->openMailbox(IMAP_EMAIL,IMAP_PASSWORD,$dsn);
		$data['mailboxinfo'] = $this->mail->getMailBoxInfo($imap);
		$data['messages'] = $this->mail->getAllMessages($imap,$dsn);
		imap_close($imap);
		
		//$data['newmessages']	= 0;
			/*
			switch ($id) {
				case 1:
					//get New Messages
					$this->email->getNewMessages($imap,50);
					break;
				case 2:
					//get New Messages Count
					$this->email->getNewMessagesCount($imap);
					break;
				case 3:
					//get All Messages
					$this->email->getAllMessages($imap,$dsn,50);
					break;
				case 4:
					//get All Messages Cout
					$this->email->getAllMessagesCount($imap);
					break;
				case 5:
					//get All Folder
					$this->email->getAllFolders($imap);
					break;
				case 6:
					//read Message => Give message Id
					$this->email->readMessage($imap,5);
					break;
				case 7:
					//Delete Message => Give message Id
					$this->email->deleteMessage($imap,746); //741 Don't use it
					break;
				case 8:
					//Unmark the message which is marked deleted
					$this->email->undeleteMessage($imap,746);
					break;
				case 9:
					//Deletes all the messages marked for deletion
					$this->email->expungeMessages($imap);
					break;
				case 10:
					//Create a MIME message based on given envelope and body sections
					$this->email->composeMessage();
					break;
				case 11:
					//Send an email message
					$this->email->sendMessage();
					break;
				case 12:
					//imap_alerts — Returns all IMAP alert messages that have occurred
					//imap_errors — Returns all of the IMAP errors that have occurred
					$this->email->getErrors($imap);
					break;
				case 13:
					//imap_alerts — Returns all IMAP alert messages that have occurred
					//imap_errors — Returns all of the IMAP errors that have occurred
					$this->email->getAttachmentsByMsgNo($imap,765);
					break;
				default:
					# code...
					break;
			}
			*/
		$this->layout->buildPage('tools/useremails', $data);
	}
	
	function useremails_new()
	{
		$data['mode'] = "page";
		$data['today'] = date("Y-m-d");
		$data['title'] = "New Email";
		$data['subtitle'] = "";
		$this->session->set_userdata('menuitem', 'tools');

		
		$dsn = sprintf('{%s}%s', IMAP_SERVER, IMAP_FOLDER);
		$imap = $this->mail->openMailbox(IMAP_EMAIL,IMAP_PASSWORD,$dsn);
		$data['mailboxinfo'] = $this->mail->getMailBoxInfo($imap);
		imap_close($imap);
		
		$this->layout->buildPage('tools/useremails/new', $data);
	}
	
	function useremails_view()
	{
		$data['mode'] = "page";
		$data['today'] = date("Y-m-d");
		$data['title'] = "View Email";
		$data['subtitle'] = "";
		$data['msgno'] = $this->uri->segment(3);
		$data['folder'] = $this->uri->segment(4);
		$this->session->set_userdata('menuitem', 'tools');
		
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
		
		$this->layout->buildPage('tools/useremails/view', $data);
	}
	
	function useremails_reply()
	{
		$data['mode'] = "page";
		$data['today'] = date("Y-m-d");
		$data['title'] = "Reply Email";
		$data['subtitle'] = "";
		$data['msgno'] = $this->uri->segment(3);
		$data['msgtype'] = $this->uri->segment(4);
		$this->session->set_userdata('menuitem', 'tools');

		
		$dsn = sprintf('{%s}%s', IMAP_SERVER, IMAP_FOLDER);
		$imap = $this->mail->openMailbox(IMAP_EMAIL,IMAP_PASSWORD,$dsn);
		$data['mailboxinfo'] = $this->mail->getMailBoxInfo($imap);
		$message = $this->mail->readMessage($imap,$data['msgno']);
		imap_close($imap);
		
		$data['msgoverview'] = $message['overview'];
		$data['msgbody'] = quoted_printable_decode($message['body']);
		
		$this->layout->buildPage('tools/useremails/reply', $data);
	}
	
	function useremails_send(){
		$dsn = sprintf('{%s}%s', IMAP_SERVER, IMAP_FOLDER);
		$imap = $this->mail->openMailbox(IMAP_EMAIL,IMAP_PASSWORD,$dsn);
		$data['mailboxinfo'] = $this->mail->getMailBoxInfo($imap);
		$this->mail->sendMessage($_POST['toaddress'], $_POST['ccaddress'], $_POST['bccaddress'], $_POST['subject'], $_POST['message']);
		imap_close($imap);
		
		redirect('tools/useremails');
	}
	
	function useremails_archive(){

		$data['today'] = date("Y-m-d");
		$data['msgno'] = $this->uri->segment(3);
		$data['folder'] = $this->uri->segment(4);
		$this->session->set_userdata('menuitem', 'tools');
		
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
			   'description' => $msgbody,
			   'createdby' => $this->session->userdata('uid'),
			   'updated' => date('Y-m-d h:m:s')		   
			);
			$this->db->insert('entities_comments', $comment);
			
			$activity = array(
			   'eid' => $eid ,
			   'type' => 6 ,
			   'description' => 'Comment Added',
			   'createdby' => $this->session->userdata('uid'),
			   'updated' => date('Y-m-d h:m:s')
			);		
			$this->db->insert('entities_activities', $activity);
		$this->db->trans_complete();	

		$imap = $this->mail->openMailbox(IMAP_EMAIL,IMAP_PASSWORD,$dsn);
		$this->mail->deleteMessage($imap,$data['msgno']);
		imap_close($imap);		
		
		redirect('tools/useremails');
	}
	
	function bulkemails()
	{
		$data['mode'] = "page";
		$data['today'] = date("Y-m-d");
		$data['title'] = "Bulk Emails";
		$data['subtitle'] = "";
		$this->session->set_userdata('menuitem', 'tools');
		
		$this->db->select("profiles_communications.*");
		$this->db->select("options_communicationmodes.description as communicationmode");
		$this->db->select("options_communicationstatus.description as communicationstatus");
		$this->db->from('profiles_communications');
		$this->db->join('options_communicationmodes', 'options_communicationmodes.ocmid = profiles_communications.mode');
		$this->db->join('options_communicationstatus', 'options_communicationstatus.ocsid = profiles_communications.status');
		$this->db->where('profiles_communications.type', 1);
		if ($this->session->userdata['accesslevel'] != 1){
			$this->db->where('profiles_communications.pid', $this->session->userdata('profile'));
		}
		$data['query'] = $this->db->get();
		
        $this->layout->buildPage('tools/bulkemails', $data);
	}
	
	function bulkemails_view()
	{
		$data['mode'] = "page";
		$data['today'] = date("Y-m-d");
		$data['subtitle'] = "";
		$data['pcid'] = $this->uri->segment(3);
		
		$this->session->set_userdata('menuitem', 'tools');
		
		$this->db->select("profiles_communications.*");
		$this->db->from('profiles_communications');
		$this->db->where('profiles_communications.pcid', $data['pcid']);
		$communications = $this->db->get();
		$data['communication'] = $communications->first_row();
		$data['title'] = $data['communication']->subject;
		
		$this->db->select("profiles_communications.*");
		$this->db->select("options_communicationmodes.description as communicationmode");
		$this->db->select("options_communicationstatus.description as communicationstatus");
		$this->db->from('profiles_communications');
		$this->db->join('options_communicationmodes', 'options_communicationmodes.ocmid = profiles_communications.mode');
		$this->db->join('options_communicationstatus', 'options_communicationstatus.ocsid = profiles_communications.status');
		$this->db->where('profiles_communications.type', 1);
		$data['query'] = $this->db->get();
		
		$this->db->select("entities.*");
		$this->db->select("options_entitystatus.description as entitystatus");
		$this->db->select("options_entitytypes.description as entitytype");
		$this->db->select("options_entitymodes.description as entitymode");
		$this->db->from('entities');
		$this->db->join('options_entitystatus', 'options_entitystatus.oesid = entities.status');
		$this->db->join('options_entitytypes', 'options_entitytypes.oetid = entities.type');
		$this->db->join('options_entitymodes', 'options_entitymodes.oemid = entities.mode');
		$this->db->where_in('entities.subscriptions', $data['pcid']);
		$data['subscribers'] = $this->db->get();
		
        $this->layout->buildPage('tools/bulkemails/view', $data);
	}
	
	function bulkemails_add(){
		$data['mode'] = "page";
		$data['today'] = date("Y-m-d");
		$data['title'] = "New Bulk Email";
		$data['subtitle'] = "";
		
		$data['communicationstatus'] = $this->db->get('options_communicationstatus');
		
        $this->layout->buildPage('tools/bulkemails/add', $data);
	}
	
	function bulkemails_insert(){	
		$this->db->trans_start();
		$this->db->insert('profiles_communications', $_POST);
		$this->db->trans_complete();
		
		redirect('tools/bulkemails');
	}
	
	function bulkemails_edit(){
		$data['mode'] = "page";
		$data['today'] = date("Y-m-d");
		$data['subtitle'] = "";
		$data['pcid'] = $this->uri->segment(3);
		
		$this->db->select("profiles_communications.*");
		$this->db->from('profiles_communications');
		$this->db->where('profiles_communications.pcid', $data['pcid']);
		$communications = $this->db->get();
		$data['communication'] = $communications->first_row();
		$data['title'] = $data['communication']->subject;
		
		$data['communicationstatus'] = $this->db->get('options_communicationstatus');
		
        $this->layout->buildPage('tools/bulkemails/edit', $data);
	}
	
	function bulkemails_update(){
	
		$this->db->trans_start();
		$this->db->where('pcid', $_POST['pcid']);
		$this->db->update('profiles_communications', $_POST);
		$this->db->trans_complete();

		redirect('tools/bulkemails');
	}
	
	function bulkemails_send(){
		$data['cid'] = $this->uri->segment(3);
		
		$this->db->trans_start();
		$this->db->where('pcid', $data['cid']);
		$this->db->update('ofiles_communications', array('mode' => 2));
		$this->db->trans_complete();

		redirect('tools/bulkemails');
	}
	
	function bulksms()
	{
		$data['mode'] = "page";
		$data['today'] = date("Y-m-d");
		$data['title'] = "Bulk SMS";
		$data['subtitle'] = "";
		$this->session->set_userdata('menuitem', 'tools');
		
		$this->db->select("profiles_communications.*");
		$this->db->select("profiles_groups.name as groupname");
		$this->db->select("options_communicationmodes.description as communicationmode");
		$this->db->select("options_communicationstatus.description as communicationstatus");
		$this->db->from('profiles_communications');
		$this->db->join('profiles_groups', 'profiles_groups.pgid = profiles_communications.group');
		$this->db->join('options_communicationmodes', 'options_communicationmodes.ocmid = profiles_communications.mode');
		$this->db->join('options_communicationstatus', 'options_communicationstatus.ocsid = profiles_communications.status');
		$this->db->where('profiles_communications.type', 2);
		$this->db->where('profiles_communications.pid', $this->session->userdata('profile'));
		$data['query'] = $this->db->get();
		
        $this->layout->buildPage('tools/bulksms', $data);
	}

	function bulksms_view()
	{
		$data['mode'] = "page";
		$data['today'] = date("Y-m-d");
		$data['subtitle'] = "";
		$data['pcid'] = $this->uri->segment(3);
		
		$this->session->set_userdata('menuitem', 'tools');
		
		$this->db->select("profiles_communications.*");
		$this->db->from('profiles_communications');
		$this->db->where('profiles_communications.pcid', $data['pcid']);
		$communications = $this->db->get();
		$data['communication'] = $communications->first_row();
		$data['title'] = $data['communication']->subject;
		$data['group'] = $data['communication']->group;
		
		$this->db->select("profiles_communications.*");
		$this->db->select("profiles_groups.name as groupname");
		$this->db->select("options_communicationmodes.description as communicationmode");
		$this->db->select("options_communicationstatus.description as communicationstatus");
		$this->db->from('profiles_communications');
		$this->db->join('profiles_groups', 'profiles_groups.pgid = profiles_communications.group');
		$this->db->join('options_communicationmodes', 'options_communicationmodes.ocmid = profiles_communications.mode');
		$this->db->join('options_communicationstatus', 'options_communicationstatus.ocsid = profiles_communications.status');
		$this->db->where('profiles_communications.type', 1);
		$this->db->where('profiles_communications.pid', $this->session->userdata('profile'));
		$data['query'] = $this->db->get();
		
		$this->db->select("entities.*");
		$this->db->select("entities_contacts.firstname, entities_contacts.lastname, entities_contacts.mobile");
		$this->db->select("options_entitystatus.description as entitystatus");
		$this->db->select("options_entitytypes.description as entitytype");
		$this->db->select("options_entitymodes.description as entitymode");
		$this->db->from('entities');
		$this->db->join('entities_contacts', 'entities_contacts.ecid = entities.primarycontact');
		$this->db->join('options_entitystatus', 'options_entitystatus.oesid = entities.status');
		$this->db->join('options_entitytypes', 'options_entitytypes.oetid = entities.type');
		$this->db->join('options_entitymodes', 'options_entitymodes.oemid = entities.mode');
		$this->db->where_in('entities.groups', $data['group']);
		$data['subscribers'] = $this->db->get();
		
        $username = $this->session->userdata('sms_username');
		$password = $this->session->userdata('sms_password');
		$api_id = $this->session->userdata('sms_api');			
		$this->curl->open();
		$data['sms'] = $this->curl->http_get("https://api.clickatell.com/http/getbalance?user=".$username ."&password=".$password."&api_id=".$api_id);
		$this->curl->close();
		
        $this->layout->buildPage('tools/bulksms/view', $data);
	}
	
	function bulksms_add(){
		$data['mode'] = "page";
		$data['today'] = date("Y-m-d");
		$data['title'] = "New Bulk SMS";
		$data['subtitle'] = "";
		
		$data['communicationstatus'] = $this->db->get('options_communicationstatus');
		
		$this->db->from('profiles_groups');
		$this->db->where('profiles_groups.pid', $this->session->userdata('profile'));
		$data['groups'] = $this->db->get();
		
        $this->layout->buildPage('tools/bulksms/add', $data);
	}
	
	function bulksms_insert(){	
		$this->db->trans_start();
		$this->db->insert('profiles_communications', $_POST);
		$this->db->trans_complete();
		
		redirect('tools/bulksms');
	}
	
	function bulksms_edit(){
		$data['mode'] = "page";
		$data['today'] = date("Y-m-d");
		$data['subtitle'] = "";
		$data['pcid'] = $this->uri->segment(3);
		
		$this->db->select("profiles_communications.*");
		$this->db->from('profiles_communications');
		$this->db->where('profiles_communications.pcid', $data['pcid']);
		$communications = $this->db->get();
		$data['communication'] = $communications->first_row();
		$data['title'] = $data['communication']->subject;
		
		$data['communicationstatus'] = $this->db->get('options_communicationstatus');
		$this->db->from('profiles_groups');
		$this->db->where('profiles_groups.pid', $this->session->userdata('profile'));
		$data['groups'] = $this->db->get();
		
        $this->layout->buildPage('tools/bulksms/edit', $data);
	}
	
	function bulksms_update(){
	
		$this->db->trans_start();
		$this->db->where('pcid', $_POST['pcid']);
		$this->db->update('profiles_communications', $_POST);
		$this->db->trans_complete();

		redirect('tools/bulksms');
	}
	
	function bulksms_send()
	{
		$data['mode'] = "page";
		$data['today'] = date("Y-m-d");
		$data['subtitle'] = "";
		$data['pcid'] = $this->uri->segment(3);
		
		$this->session->set_userdata('menuitem', 'tools');
		
		$this->db->select("profiles_communications.*");
		$this->db->from('profiles_communications');
		$this->db->where('profiles_communications.pcid', $data['pcid']);
		$communications = $this->db->get();
		$data['communication'] = $communications->first_row();
		$data['title'] = $data['communication']->subject;
		$data['group'] = $data['communication']->group;
		
		$this->db->select("profiles_communications.*");
		$this->db->from('profiles_communications');
		$this->db->where('profiles_communications.pcid', $data['pcid']);
		$query = $this->db->get();
		$sms = $query->first_row();
		
		$this->db->select("entities.*");
		$this->db->select("entities_contacts.firstname, entities_contacts.lastname, entities_contacts.mobile");
		$this->db->select("options_entitystatus.description as entitystatus");
		$this->db->select("options_entitytypes.description as entitytype");
		$this->db->select("options_entitymodes.description as entitymode");
		$this->db->from('entities');
		$this->db->join('entities_contacts', 'entities_contacts.ecid = entities.primarycontact');
		$this->db->join('options_entitystatus', 'options_entitystatus.oesid = entities.status');
		$this->db->join('options_entitytypes', 'options_entitytypes.oetid = entities.type');
		$this->db->join('options_entitymodes', 'options_entitymodes.oemid = entities.mode');
		$this->db->where_in('entities.groups', $data['group']);
		$data['subscribers'] = $this->db->get();
		
        $username = $this->session->userdata('sms_username');
		$password = $this->session->userdata('sms_password');
		$api_id = $this->session->userdata('sms_api');	
		
		foreach ($data['subscribers']->result() as $row){
			//$to = '27824155587';
			//$text = $sms->content;			
			//$this->curl->open();
			//$newtext = preg_replace("/ /", "+", $text);
			//$content = $this->curl->http_get("http://api.clickatell.com/http/sendmsg?user=$username&password=$password&api_id=$api_id&to=$to&text=$newtext");
			//$this->curl->close();

			echo $row->firstname." - ".$row->mobile." : ".$sms->content;
		}

        //$data['result'] = $content;
		
        //$this->layout->buildPage('tools/bulksms/result', $data);
	}
	
}
?>