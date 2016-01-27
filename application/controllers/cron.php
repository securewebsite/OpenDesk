<?php

class Cron extends CI_Controller {
	
	//--send email birthday reminders to users for today
	function email_birthdays(){				
		$this->load->library('mail');

		$this->db->select("entities.*");
		$this->db->select("entities_contacts.*");
		$this->db->from('entities');
		$this->db->join('entities_contacts', 'entities_contacts.eid = entities.eid');
		$this->db->where('entities.mode', 1);
		$this->db->where('entities_contacts.dateofbirth !=', "0000-00-00");
		$this->db->where('SUBSTRING(entities_contacts.dateofbirth,6,6)', date('m-d'));
		$this->db->group_by("entities.profile");
		$bigquery = $this->db->get();
		
		foreach ($bigquery->result() as $bigrow){
		
			$this->db->select("entities.*");
			$this->db->select("entities_contacts.*");
			$this->db->select("users.fullname, users.imap_email");
			$this->db->from('entities');
			$this->db->join('entities_contacts', 'entities_contacts.eid = entities.eid');
			$this->db->join('users', 'users.uid = entities.createdby');
			$this->db->where('entities.profile', $bigrow->profile);
			$this->db->where('entities.mode', 1);
			$this->db->where('entities_contacts.dateofbirth !=', "0000-00-00");
			$this->db->where('SUBSTRING(entities_contacts.dateofbirth,6,6)', date('m-d'));
			$query = $this->db->get();
			
			$user = $query->first_row();
			$message = "<p>Dear ".$user->fullname.",</p>";
			$message .= "</p>This is a system generated email. Please do not respond to this address.</p>";
			$message .= "<p>The following birthday reminders are set for today:</p>";
			$message .= "<ul>";
			foreach ($query->result() as $row){
				$message .= "<li>".$row->firstname."&nbsp;".$row->lastname."</li>";
			}		
			$message .= "</ul>";
			$message .= "<p>Please login to the system if you wish to send these individuals an SMS.<br>";
			$message .= "If you are receiving incorrect notifications, please contact the system administrator on leroux@etude.co.za<br><br>";
			$message .= "Regards<br>OpenDesk</p>";
			
			$this->email->from('admin@opendesk.co.za', 'OpenDesk');
			$this->email->to($user->imap_email);
			$this->email->cc('leroux@etude.co.za');
			$this->email->subject('OpenDesk - Daily Birthday Reminder');
			$this->email->message($message);
			//$this->email->send();
			//echo $this->email->print_debugger();
			echo $message;
			echo "<hr>";
		}
		
	}
	
	//--send email ticket reminders to all users for today
	function email_dailytickets(){
		
		$this->load->library('email');

		$this->db->select("entities_tickets.*");
		$this->db->select("entities.*");
		$this->db->select("options_entitytickettypes.description as tickettypedescription");
		$this->db->select("users.fullname");
		$this->db->from('entities');
		$this->db->join('entities_tickets', 'entities_tickets.eid = entities.eid');
		$this->db->join('options_entitytickettypes', 'options_entitytickettypes.oettid = entities_tickets.type');
		$this->db->join('users', 'users.uid = entities_tickets.ownedby');
		$this->db->where('entities_tickets.status !=', 3);
		$this->db->where('entities_tickets.reminderdate', date("Y-m-d"));
		$this->db->or_where('entities_tickets.duedate', date("Y-m-d"));
		$this->db->group_by("entities_tickets.ownedby");
		$bigquery = $this->db->get();
		
		foreach ($bigquery->result() as $bigrow){
		
			$this->db->select("entities_tickets.*");
			$this->db->select("entities.*");
			$this->db->select("options_entitytickettypes.description as tickettypedescription");
			$this->db->select("users.fullname");
			$this->db->from('entities');
			$this->db->join('entities_tickets', 'entities_tickets.eid = entities.eid');
			$this->db->join('options_entitytickettypes', 'options_entitytickettypes.oettid = entities_tickets.type');
			$this->db->join('users', 'users.uid = entities_tickets.ownedby');
			$this->db->where('entities_tickets.status !=', 3);
			$this->db->where('entities_tickets.ownedby', $bigrow->ownedby);
			$this->db->where('entities_tickets.reminderdate', date("Y-m-d"));
			$this->db->or_where('entities_tickets.duedate', date("Y-m-d"));
			$this->db->order_by("entities_tickets.duedate","ASC");
			$query = $this->db->get();
			
			$user = $query->first_row();
			$message = "<p>Dear ".$user->fullname.",</p>";
			$message .= "</p>This is a system generated email. Please do not respond to this address.</p>";
			$message .= "<p>The following ticket reminders are set for today:</p>";
			$message .= "<ul>";
			foreach ($query->result() as $row){
				$message .= "<li>".$row->tickettypedescription." - ".$row->name." (".$row->title.")</li>";
			}		
			$message .= "</ul>";
			$message .= "<p>Please login to the system and update these tickets. You will also receive a final email notice prior to the due date of your tickets.<br>";
			$message .= "If you are receiving incorrect notifications, please contact the system administrator on leroux@etude.co.za<br><br>";
			$message .= "Regards<br>OpenDesk</p>";
			
			$this->email->from('admin@opendesk.co.za', 'OpenDesk');
			$this->email->to($user->imap_email);
			$this->email->cc('leroux@etude.co.za');
			$this->email->subject('OpenDesk - Daily Ticket Reminder');
			$this->email->message($message);
			$this->email->send();
			//echo $this->email->print_debugger();
			echo $message;
			echo "<hr>";
		}
	}
	
	//--send email task reminders to all users for today
	function email_dailytasks(){
		
		$this->load->library('mail');

		$this->db->select("users_tasks.*");
		$this->db->select("users.fullname");
		$this->db->from('users_tasks');
		$this->db->join('users', 'users.uid = users_tasks.uid');
		$this->db->where('users_tasks.status', 1);
		$this->db->where('users_tasks.reminderdate', date("Y-m-d"));
		$this->db->or_where('users_tasks.duedate', date("Y-m-d"));
		$this->db->group_by("users_tasks.uid");
		$bigquery = $this->db->get();
		
		foreach ($bigquery->result() as $bigrow){
		
			$this->db->select("users_tasks.*");
			$this->db->select("users.fullname");
			$this->db->from('users_tasks');
			$this->db->join('users', 'users.uid = users_tasks.uid');
			$this->db->where('users_tasks.status', 1);
			$this->db->where('users_tasks.uid', $bigrow->uid);
			$this->db->where('users_tasks.reminderdate', date("Y-m-d"));
			$this->db->or_where('users_tasks.duedate', date("Y-m-d"));
			$this->db->order_by("users_tasks.uid","ASC");
			$query = $this->db->get();
			
			$user = $query->first_row();
			$message = "<p>Dear ".$user->fullname.",</p>";
			$message .= "</p>This is a system generated email. Please do not respond to this address.</p>";
			$message .= "<p>The following task reminders are set for today:</p>";
			$message .= "<ul>";
			foreach ($query->result() as $row){
				$message .= "<li>".$row->title." - ".$row->description." (".$row->progress."% completed)</li>";
			}		
			$message .= "</ul>";
			$message .= "<p>Please login to the system and update these tasks. You will also receive a final email notice prior to the due date of your task.<br>";
			$message .= "If you are receiving incorrect notifications, please contact the system administrator on leroux@etude.co.za<br><br>";
			$message .= "Regards<br>OpenDesk</p>";
			
			$this->email->from('admin@opendesk.co.za', 'OpenDesk');
			$this->email->cc('leroux@etude.co.za');
			$this->email->to($user->imap_email);
			$this->email->subject('OpenDesk - Daily Task Reminder');
			$this->email->message($message);
			//$this->email->send();
			//echo $this->email->print_debugger();
			echo $message;
			echo "<hr>";
		}
	}
}
?>