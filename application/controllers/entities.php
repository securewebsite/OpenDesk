<?php

class Entities extends CI_Controller {

	function leads()
	{
		$data['mode'] = "page";
		$data['today'] = date("Y-m-d");
		$data['title'] = "Leads";
		$data['subtitle'] = "";
		$this->session->set_userdata('menuitem', 'leads');
		
		$this->db->select("entities.*");
		$this->db->select("options_entitystatus.description as entitystatus");
		$this->db->select("options_entitytypes.description as entitytype");
		$this->db->select("options_entitymodes.description as entitymode");
		$this->db->from('entities');
		$this->db->join('options_entitystatus', 'options_entitystatus.oesid = entities.status');
		$this->db->join('options_entitytypes', 'options_entitytypes.oetid = entities.type');
		$this->db->join('options_entitymodes', 'options_entitymodes.oemid = entities.mode');
		$this->db->where('entities.status', 1);
		$this->db->where('entities.profile', $this->session->userdata('profile'));
		$data['query'] = $this->db->get();
		
        $this->layout->buildPage('entities/leads', $data);
	}
	
	function prospects()
	{
		$data['mode'] = "page";
		$data['today'] = date("Y-m-d");
		$data['title'] = "Prospects";
		$data['subtitle'] = "";
		$this->session->set_userdata('menuitem', 'prospects');
		
		$this->db->select("entities.*");
		$this->db->select("options_entitystatus.description as entitystatus");
		$this->db->select("options_entitytypes.description as entitytype");
		$this->db->select("options_entitymodes.description as entitymode");
		$this->db->from('entities');
		$this->db->join('options_entitystatus', 'options_entitystatus.oesid = entities.status');
		$this->db->join('options_entitytypes', 'options_entitytypes.oetid = entities.type');
		$this->db->join('options_entitymodes', 'options_entitymodes.oemid = entities.mode');
		$this->db->where('entities.status', 2);
		$this->db->where('entities.profile', $this->session->userdata('profile'));
		$data['query'] = $this->db->get();
		
        $this->layout->buildPage('entities/prospects', $data);
	}
	
	function clients()
	{
		$data['mode'] = "page";
		$data['today'] = date("Y-m-d");
		$data['title'] = "Clients";
		$data['subtitle'] = "";
		$this->session->set_userdata('menuitem', 'clients');
		
		$this->db->select("entities.*");
		$this->db->select("options_entitystatus.description as entitystatus");
		$this->db->select("options_entitytypes.description as entitytype");
		$this->db->select("options_entitymodes.description as entitymode");
		$this->db->from('entities');
		$this->db->join('options_entitystatus', 'options_entitystatus.oesid = entities.status');
		$this->db->join('options_entitytypes', 'options_entitytypes.oetid = entities.type');
		$this->db->join('options_entitymodes', 'options_entitymodes.oemid = entities.mode');
		$this->db->where('entities.status', 3);
		$this->db->where('entities.profile', $this->session->userdata('profile'));
		$data['query'] = $this->db->get();
		
        $this->layout->buildPage('entities/clients', $data);
	}
	
	function view(){
		$data['mode'] = "page";
		$data['today'] = date("Y-m-d");
		$data['subtitle'] = "";
		$data['eid'] = $this->uri->segment(3);
		
		$this->db->select("entities.*");
		$this->db->select("entities_contacts.*");
		$this->db->select("users.fullname as entityowner");
		$this->db->select("options_entitytypes.description as entitytype");
		$this->db->select("options_entitystatus.description as entitystatus");
		$this->db->select("options_entitymodes.description as entitymode");
		$this->db->from('entities');
		$this->db->join('users', 'users.uid = entities.createdby');
		$this->db->join('entities_contacts', 'entities_contacts.ecid = entities.primarycontact', 'left outer');
		$this->db->join('options_entitytypes', 'options_entitytypes.oetid = entities.type');
		$this->db->join('options_entitystatus', 'options_entitystatus.oesid = entities.status');
		$this->db->join('options_entitymodes', 'options_entitymodes.oemid = entities.mode');
		$this->db->where('entities.eid', $data['eid']);
		$this->db->where('entities.profile', $this->session->userdata('profile'));
		$entities = $this->db->get();
		$data['entity'] = $entities->first_row();
		$data['title'] = $data['entity']->name;	
		
		$data['profilegroups'] = $this->db->get('profiles_groups');
		$data['entitymodes'] = $this->db->get('options_entitymodes');
		$data['entitystatus'] = $this->db->get('options_entitystatus');
		
		$this->db->select("entities_contacts.*");
		$this->db->from('entities_contacts');
		$this->db->where('entities_contacts.eid', $data['eid']);
		$data['contacts'] = $this->db->get();
		
		$this->db->select("entities_comments.*");
		$this->db->select("users.fullname as entityowner");
		$this->db->select("options_entitycommenttypes.fa_icon, options_entitycommenttypes.description as commenttypedescription");
		$this->db->from('entities_comments');
		$this->db->join('users', 'users.uid = entities_comments.createdby');
		$this->db->join('options_entitycommenttypes', 'options_entitycommenttypes.oectid = entities_comments.type');
		$this->db->where('entities_comments.eid', $data['eid']);
		$this->db->order_by('entities_comments.updated', 'DESC');
		$data['comments'] = $this->db->get();
		
		$this->db->select("entities_tickets.*");
		$this->db->select("entities_products.*");
		$this->db->select("users.fullname as ticketowner");
		$this->db->select("options_entitytickettypes.description as tickettype");
		$this->db->select("options_entityticketstatus.description as ticketstatus");
		$this->db->from('entities_tickets');
		$this->db->join('entities_products', 'entities_products.epid = entities_tickets.epid');
		$this->db->join('users', 'users.uid = entities_tickets.ownedby');
		$this->db->join('options_entitytickettypes', 'options_entitytickettypes.oettid = entities_tickets.type');
		$this->db->join('options_entityticketstatus', 'options_entityticketstatus.oetsid = entities_tickets.status');
		$this->db->where('entities_tickets.eid', $data['eid']);
		$this->db->order_by('entities_tickets.duedate', 'ASC');
		$data['tickets'] = $this->db->get();
		
		$this->db->select("entities_products.*");
		$this->db->select("options_entityproductproviders.description as productproviderdescription");
		$this->db->select("options_entityproducttypes.description as producttypedescription");
		$this->db->select("options_entityproductstatus.description as productstatusdescription");
		$this->db->select("options_entityproductcategories.description as productcategorydescription");
		$this->db->from('entities_products');
		$this->db->join('options_entityproductproviders', 'options_entityproductproviders.oepid = entities_products.provider');
		$this->db->join('options_entityproducttypes', 'options_entityproducttypes.oeptid = entities_products.type');
		$this->db->join('options_entityproductstatus', 'options_entityproductstatus.oepsid = entities_products.status');
		$this->db->join('options_entityproductcategories', 'options_entityproductcategories.oepcid = entities_products.category');
		$this->db->where('entities_products.eid', $data['eid']);
		//$this->db->where('entities_products.category', 1);
		$data['products'] = $this->db->get();
		
		$this->db->select("entities_activities.*");
		$this->db->select("users.fullname as userfullname");
		$this->db->select("options_entityactivitytypes.description as activitytypedescription");
		$this->db->from('entities_activities');
		$this->db->join('users', 'users.uid = entities_activities.createdby');
		$this->db->join('options_entityactivitytypes', 'options_entityactivitytypes.oeatid = entities_activities.type');
		$this->db->where('entities_activities.eid', $data['eid']);
		$this->db->order_by('entities_activities.updated', 'DESC');
		$data['activities'] = $this->db->get();
		
        $this->layout->buildPage('entities/view', $data);
	}
	
	function add(){
		$data['mode'] = "page";
		$data['today'] = date("Y-m-d");
		$data['subtitle'] = "";
		$data['status'] = $this->uri->segment(3);
		
		switch($data['status']){
			case "1" : $data['title'] = "New Lead"; break;
			case "2" : $data['title'] = "New Prospect"; break;
			case "3" : $data['title'] = "New Client"; break;
		}
		
		$this->db->where('users.profile', $this->session->userdata('profile'));
		$data['users'] = $this->db->get('users');
		
		$data['entitytypeoptions'] = $this->db->get('options_entitytypes');
		$this->db->select("profiles_groups.*");
		$this->db->from('profiles_groups');
		$this->db->where('profiles_groups.pid', $this->session->userdata('profile'));
		$this->db->where('profiles_groups.status', 1);
		$data['profilegroups'] = $this->db->get();
		
        $this->layout->buildPage('entities/add', $data);	
	}
	
	function insert(){	
		if (isset($_POST['groups'])){
			$groups = implode(",", $_POST['groups']);
			$_POST['groups'] = $groups;
		}
	
		$this->db->trans_start();
		$this->db->insert('entities', $_POST);
		$activity = array(
		   'eid' => $this->db->insert_id() ,
		   'type' => 4 ,
		   'description' => 'Entity Created',
		   'createdby' => $this->session->userdata('uid'),
		   'updated' => date('Y-m-d h:m:s')
		   
		);
		$this->db->insert('entities_activities', $activity);
		$this->db->trans_complete();
		
		switch($_POST['status'] ){
			case "1" : redirect('entities/leads'); break;
			case "2" : redirect('entities/prospects'); break;
			case "3" : redirect('entities/clients'); break;
		}
	}
	
	function edit(){
		$data['mode'] = "page";
		$data['today'] = date("Y-m-d");
		$data['subtitle'] = "";
		$data['eid'] = $this->uri->segment(3);
		
		$this->db->select("entities.*");
		$this->db->from('entities');
		$this->db->where('entities.eid', $data['eid']);
		$entities = $this->db->get();
		$data['entity'] = $entities->first_row();
		$data['title'] = $data['entity']->name;
		$this->db->where('users.profile', $this->session->userdata('profile'));
		$data['users'] = $this->db->get('users');
		
		$data['entitystatusoptions'] = $this->db->get('options_entitystatus');
		$data['entitytypeoptions'] = $this->db->get('options_entitytypes');
		
		$this->db->select("profiles_groups.*");
		$this->db->from('profiles_groups');
		$this->db->where('profiles_groups.pid', $this->session->userdata('profile'));
		$this->db->where('profiles_groups.status', 1);
		$data['profilegroups'] = $this->db->get();
		
        $this->layout->buildPage('entities/edit', $data);
	}
	
	function update(){
		$groups = implode(",", $_POST['groups']);
		$_POST['groups'] = $groups;
		
		$this->db->trans_start();
		$this->db->where('eid', $_POST['eid']);
		$this->db->update('entities', $_POST);
		$activity = array(
		   'eid' => $_POST['eid'] ,
		   'type' => 4 ,
		   'description' => 'Entity Updated',
		   'createdby' => $this->session->userdata('uid'),
		   'updated' => date('Y-m-d h:m:s')
		   
		);
		$this->db->insert('entities_activities', $activity);
		$this->db->trans_complete();

		redirect('entities/view/' . $_POST['eid']);
	}
	
	function delete(){
		
		$this->db->trans_start();
		$this->db->delete('entities', array('eid' => $this->uri->segment(3)));
		$this->db->delete('entities_contacts', array('eid' => $this->uri->segment(3)));
		$this->db->trans_complete();

		redirect('entities/'.$this->uri->segment(4));
	}
	
	function primary(){
		$data['eid'] = $this->uri->segment(3);
		$data['ecid'] = $this->uri->segment(4);
	
		$this->db->trans_start();
		$this->db->where('eid', $data['eid']);
		$this->db->update('entities', array('primarycontact' => $data['ecid']));
		$this->db->trans_complete();

		redirect('entities/view/' . $data['eid']);
	}
	
	function mode(){
		$data['eid'] = $this->uri->segment(3);
		$data['oemid'] = $this->uri->segment(4);
	
		$this->db->trans_start();
		$this->db->where('eid', $data['eid']);
		$this->db->update('entities', array('mode' => $data['oemid']));
		$this->db->trans_complete();

		redirect('entities/view/' . $data['eid']);
	}
	
	function status(){
		$data['eid'] = $this->uri->segment(3);
		$data['oesid'] = $this->uri->segment(4);
	
		$this->db->trans_start();
		$this->db->where('eid', $data['eid']);
		$this->db->update('entities', array('status' => $data['oesid']));
		$this->db->trans_complete();

		redirect('entities/view/' . $data['eid']);
	}
	
	function contacts_add(){
		$data['mode'] = "page";
		$data['today'] = date("Y-m-d");
		$data['subtitle'] = "";
		$data['eid'] = $this->uri->segment(3);
		
		$this->db->select("entities.*");
		$this->db->from('entities');
		$this->db->where('entities.eid', $data['eid']);
		$entities = $this->db->get();
		$data['entity'] = $entities->first_row();
		$data['title'] = $data['entity']->name;
		
        $this->layout->buildPage('entities/contacts/add', $data);
	}
	
	function contacts_insert(){
		
		$this->db->trans_start();
		$this->db->insert('entities_contacts', $_POST);
		$activity = array(
		   'eid' => $_POST['eid'] ,
		   'type' => 2 ,
		   'description' => 'Contact Added',
		   'createdby' => $this->session->userdata('uid'),
		   'updated' => date('Y-m-d h:m:s')
		   
		);
		$this->db->insert('entities_activities', $activity);
		$this->db->trans_complete();
		
		redirect('entities/view/' . $_POST['eid']);
	}
	
	function contacts_edit(){
		$data['mode'] = "page";
		$data['today'] = date("Y-m-d");
		$data['subtitle'] = "";
		$data['eid'] = $this->uri->segment(3);
		$data['ecid'] = $this->uri->segment(4);
		
		$this->db->select("entities.*");
		$this->db->select("entities_contacts.*");
		$this->db->from('entities');
		$this->db->join('entities_contacts', 'entities_contacts.eid = entities.eid');
		$this->db->where('entities_contacts.ecid', $data['ecid']);
		$contacts = $this->db->get();
		$data['contact'] = $contacts->first_row();
		$data['title'] = $data['contact']->name;
		
        $this->layout->buildPage('entities/contacts/edit', $data);
	}
	
	function contacts_update(){
		$this->db->trans_start();
		$this->db->where('ecid', $_POST['ecid']);
		$this->db->update('entities_contacts', $_POST);
		$activity = array(
		   'eid' => $_POST['eid'] ,
		   'type' => 2 ,
		   'description' => 'Contact Updated',
		   'createdby' => $this->session->userdata('uid'),
		   'updated' => date('Y-m-d h:m:s')
		   
		);
		$this->db->insert('entities_activities', $activity);
		$this->db->trans_complete();

		redirect('entities/view/' . $_POST['eid']);
	}
	
	function contacts_delete(){
		$this->db->trans_start();
		$this->db->delete('entities_contacts', array('ecid' => $this->uri->segment(4)));
		$this->db->trans_complete();

		redirect('entities/view/'.$this->uri->segment(3));
	}
	
	function comments_add(){
		$data['mode'] = "page";
		$data['today'] = date("Y-m-d");
		$data['subtitle'] = "";
		$data['eid'] = $this->uri->segment(3);
		
		$this->db->select("entities.*");
		$this->db->from('entities');
		$this->db->where('entities.eid', $data['eid']);
		$entities = $this->db->get();
		$data['entity'] = $entities->first_row();
		$data['title'] = $data['entity']->name;
		
		$this->db->where('users.profile', $this->session->userdata('profile'));
		$data['users'] = $this->db->get('users');
		
        $this->layout->buildPage('entities/comments/add', $data);
	}
	
	function comments_insert(){
		$this->db->trans_start();
		$this->db->insert('entities_comments', $_POST);
		$this->db->trans_complete();
		
		redirect('entities/view/' . $_POST['eid']);
	}
	
	function tickets_add(){
		$data['mode'] = "page";
		$data['today'] = date("Y-m-d");
		$data['subtitle'] = "";
		$data['eid'] = $this->uri->segment(3);
		
		$this->db->select("entities.*");
		$this->db->from('entities');
		$this->db->where('entities.eid', $data['eid']);
		$entities = $this->db->get();
		$data['entity'] = $entities->first_row();
		$data['title'] = $data['entity']->name;
		
		$this->db->select("entities_products.*");
		$this->db->select("options_entityproductcategories.description as productcategorydescription");
		$this->db->select("options_entityproducttypes.description as producttypedescription");
		$this->db->from('entities_products');
		$this->db->where('entities_products.eid', $this->uri->segment(3));		
		$this->db->join('options_entityproducttypes', 'options_entityproducttypes.oeptid = entities_products.type');
		$this->db->join('options_entityproductcategories', 'options_entityproductcategories.oepcid = entities_products.category');
		$data['products'] = $this->db->get();
		
		$this->db->from('users');
		$this->db->where('users.profile', $this->session->userdata('profile'));		
		$data['users'] = $this->db->get();
		
		$data['entitytickettypes'] = $this->db->get('options_entitytickettypes');
		$data['entityticketstatus'] = $this->db->get('options_entityticketstatus');
		
        $this->layout->buildPage('entities/tickets/add', $data);
	}
	
	function tickets_insert(){
		$this->db->trans_start();
		$this->db->insert('entities_tickets', $_POST);
		$activity = array(
		   'eid' => $_POST['eid'] ,
		   'type' => 5 ,
		   'description' => 'Ticket Added',
		   'createdby' => $this->session->userdata('uid'),
		   'updated' => date('Y-m-d h:m:s')
		   
		);
		$this->db->insert('entities_activities', $activity);
		$this->db->trans_complete();
		
		redirect('entities/view/' . $_POST['eid']);
	}
	
	function tickets_edit(){
		$data['mode'] = "page";
		$data['today'] = date("Y-m-d");
		$data['subtitle'] = "";
		$data['eid'] = $this->uri->segment(3);
		$data['etid'] = $this->uri->segment(4);
		
		$this->db->select("entities.status as entitystatus, entities.name as entityname, entities.eid");
		$this->db->select("entities_tickets.*");
		$this->db->from('entities');
		$this->db->join('entities_tickets', 'entities_tickets.eid = entities.eid');
		$this->db->where('entities_tickets.etid', $data['etid']);
		$tickets = $this->db->get();
		$data['ticket'] = $tickets->first_row();
		$data['title'] = $data['ticket']->entityname;
		
		$this->db->select("entities_products.*");
		$this->db->select("options_entityproductcategories.description as productcategorydescription");
		$this->db->select("options_entityproducttypes.description as producttypedescription");
		$this->db->select("options_entityproductproviders.description as productproviderdescription");
		$this->db->from('entities_products');
		$this->db->join('options_entityproducttypes', 'options_entityproducttypes.oeptid = entities_products.type');
		$this->db->join('options_entityproductcategories', 'options_entityproductcategories.oepcid = entities_products.category');
		$this->db->join('options_entityproductproviders', 'options_entityproductproviders.oepid = entities_products.provider');
		$this->db->where('entities_products.eid', $this->uri->segment(3));
		$this->db->where('entities_products.epid', $data['ticket']->epid);
		$products = $this->db->get();
		$data['product'] = $products->first_row();
				
		$this->db->select("entities_tickets_notes.*");
		$this->db->from('entities_tickets_notes');
		$this->db->where('entities_tickets_notes.etid', $data['etid']);
		$data['entityticketnotes'] = $this->db->get();
		
		$data['users'] = $this->db->get('users');
		$data['entitytickettypes'] = $this->db->get('options_entitytickettypes');
		$data['entityticketstatus'] = $this->db->get('options_entityticketstatus');
		
        $this->layout->buildPage('entities/tickets/edit', $data);
	}
	
	function tickets_update(){
		$this->db->trans_start();
		$this->db->where('etid', $_POST['etid']);
		$this->db->update('entities_tickets', $_POST);
		$activity = array(
		   'eid' => $_POST['eid'] ,
		   'type' => 5 ,
		   'description' => 'Ticket Updated',
		   'createdby' => $this->session->userdata('uid'),
		   'updated' => date('Y-m-d h:m:s')
		   
		);
		$this->db->insert('entities_activities', $activity);
		$this->db->trans_complete();

		redirect('entities/view/' . $_POST['eid']);
	}
	
	function tickets_delete(){
		$this->db->trans_start();
		$this->db->delete('entities_tickets', array('etid' => $this->uri->segment(4)));
		$this->db->trans_complete();

		redirect('entities/view/'.$this->uri->segment(3));
	}
	
	function tickets_notes_insert(){
		$this->db->trans_start();
		$this->db->insert('entities_tickets_notes', $_POST);
		$activity = array(
		   'eid' => $_POST['eid'] ,
		   'type' => 1 ,
		   'description' => 'Ticket Note Added',
		   'createdby' => $this->session->userdata('uid'),
		   'updated' => date('Y-m-d h:m:s')
		   
		);
		$this->db->insert('entities_activities', $activity);
		$this->db->trans_complete();

		redirect('entities/tickets_edit/'.$_POST['eid'].'/'.$_POST['etid']);
	}
	
	function products_add(){
		$data['mode'] = "page";
		$data['today'] = date("Y-m-d");
		$data['subtitle'] = "";
		$data['eid'] = $this->uri->segment(3);

		$this->db->from('options_entityproductcategories');
		$data['productcategories'] = $this->db->get();
		
		$this->db->from('options_entityproductproviders');
		$this->db->where('options_entityproductproviders.product', 1);
		$data['productproviders'] = $this->db->get();
		
		$this->db->from('options_entityproducttypes');
		$this->db->where('options_entityproducttypes.product', 1);
		$data['producttypes'] = $this->db->get();
		
		$this->db->select("entities.*");
		$this->db->from('entities');
		$this->db->where('entities.eid', $data['eid']);
		$entities = $this->db->get();
		$data['entity'] = $entities->first_row();
		$data['title'] = $data['entity']->name;
		
        $this->layout->buildPage('entities/products/add', $data);
	}
	
	function products_insert(){
		$this->db->trans_start();
		$this->db->insert('entities_products', $_POST);
		$activity = array(
		   'eid' => $_POST['eid'] ,
		   'type' => 3 ,
		   'description' => 'Product Added',
		   'createdby' => $this->session->userdata('uid'),
		   'updated' => date('Y-m-d h:m:s')
		   
		);
		$this->db->insert('entities_activities', $activity);
		$this->db->trans_complete();
		
		redirect('entities/view/' . $_POST['eid']);
	}
	
	function products_edit(){
		$data['mode'] = "page";
		$data['today'] = date("Y-m-d");
		$data['subtitle'] = "";
		$data['eid'] = $this->uri->segment(3);
		$data['epid'] = $this->uri->segment(4);
		
		$this->db->from('options_entityproductproviders');
		$data['productproviders'] = $this->db->get();
		
		$this->db->from('options_entityproducttypes');
		$data['producttypes'] = $this->db->get();
		
		$this->db->select("entities.*");
		$this->db->from('entities');
		$this->db->where('entities.eid', $data['eid']);
		$entities = $this->db->get();
		$data['entity'] = $entities->first_row();
		$data['title'] = $data['entity']->name;
		
		$this->db->select("entities_products.*");
		$this->db->from("entities_products");
		$this->db->where('entities_products.epid', $data['epid']);
		$query = $this->db->get();
		$data['product'] = $query->first_row();
		
        $this->layout->buildPage('entities/products/edit', $data);
	}
	
	function products_update(){
		$this->db->trans_start();
		$this->db->where('epid', $_POST['epid']);
		$this->db->update('entities_products', $_POST);
		$activity = array(
		   'eid' => $_POST['eid'] ,
		   'type' => 3 ,
		   'description' => 'Product Updated',
		   'createdby' => $this->session->userdata('uid'),
		   'updated' => date('Y-m-d h:m:s')
		   
		);
		$this->db->insert('entities_activities', $activity);
		$this->db->trans_complete();

		redirect('entities/view/' . $_POST['eid']);
	}
	
	function products_delete(){
		$this->db->trans_start();
		$this->db->delete('entities_sti', array('esid' => $this->uri->segment(4)));
		$this->db->trans_complete();

		redirect('entities/view/'.$this->uri->segment(3));
	}
	
	function sms_add(){
		$data['mode'] = "page";
		$data['today'] = date("Y-m-d");
		$data['subtitle'] = "";
		$data['eid'] = $this->uri->segment(3);
		
		$this->db->select("entities.*");
		$this->db->from('entities');
		$this->db->where('entities.eid', $data['eid']);
		$entities = $this->db->get();
		$data['entity'] = $entities->first_row();
		$data['title'] = $data['entity']->name;
		
		$this->db->select("entities_contacts.*");
		$this->db->from('entities_contacts');
		$this->db->where('entities_contacts.eid', $data['eid']);
		$data['entities'] = $this->db->get();
		
        $username = $this->session->userdata('sms_username');
		$password = $this->session->userdata('sms_password');
		$api_id = $this->session->userdata('sms_api');			
		$this->curl->open();
		$data['sms'] = $this->curl->http_get("https://api.clickatell.com/http/getbalance?user=".$username ."&password=".$password."&api_id=".$api_id);
		$this->curl->close();
		
        $this->layout->buildPage('entities/sms/add', $data);
	}
	
	function sms_send(){
		$data['mode'] = "page";
		$data['today'] = date("Y-m-d");
		$data['title'] = "SMS Result";
		$data['subtitle'] = "";
		
        $user = 'LeRoux';
        $password = 'BcEdFIcXCHPaRF';
        $api_id = '3568738';

		$to = $_POST['mobile'];
		$text = $_POST['message'];			
		$this->curl->open();
		$newtext = preg_replace("/ /", "+", $text);
		$content = $this->curl->http_get("http://api.clickatell.com/http/sendmsg?user=$user&password=$password&api_id=$api_id&to=$to&text=$newtext");
		$this->curl->close();

		$data['result'] = $content;
		
        $this->layout->buildPage('entities/sms/result', $data);
	}
}
?>