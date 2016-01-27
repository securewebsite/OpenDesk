<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mail {

    /*----Start: Imap Functions-----------------------------------------------------------------------*/
	public function openMailbox($emailAddress,$password,$dsn){
		$mbox = imap_open($dsn, $emailAddress, $password);

		if (!$mbox) {
		    die ('Unable to connect');
		}
		return $mbox;
	}
	
	public function getMailBoxInfo($imap){
		$mailboxinfo = imap_mailboxmsginfo ($imap);
		//print_r($recentmessagecount);
		return $mailboxinfo;
	}

	public function getNewMessages($imap,$limit){
	    $messages = imap_sort($imap, SORTARRIVAL, 1);

	    $mails = array();
	    $i = 0;
	    echo "<pre>";
	    foreach ($messages as $message) {
	        $i++;
	        $header = imap_header($imap, $message);
	        $header = json_decode(json_encode($header),true);
	        print_r($header);
	        /*
	        $prettydate = date("jS F Y", $header->udate);
	        print "{$header->fromaddress} - $prettydate\n";
	        $mails[]['fromaddress'] = $header->fromaddress;
	        */
	        if($i==$limit)
	        {
	        	die();
	        }
	    }
	    //print_r($mails);
	}

	public function getNewMessagesCount($imap){

		$recentmessagecount = imap_num_recent ($imap);
		//print_r($recentmessagecount);
		return $recentmessagecount;

	}

	public function getAllMessages($imap,$dsn){

		$status = imap_status($imap, $dsn, SA_ALL);
		$msgs = imap_sort($imap, SORTDATE, 1, SE_UID);
		foreach ($msgs as $msguid) {
		    $msgno = imap_msgno($imap, $msguid);
		    $messages[$msgno] = imap_headerinfo($imap, $msgno);
		}
		
		return $messages;
	}

	public function getAllMessagesCount($imap){
		$allmsgcount = imap_num_msg($imap);
		echo $allmsgcount;
	}

	public function getAllFolders($imap){
		
		$folders = imap_list($imap, "{imap.gmail.com:993/imap/ssl}", "*");
		echo "<pre>";
		print_r($folders);
	}

	public function readMessage($imap,$email_number){
		
        $message['header'] = imap_headerinfo($imap,$email_number,0);
		$message['overview'] = imap_fetch_overview($imap,$email_number,0);
		$message['body'] = imap_fetchbody($imap,$email_number,2);
				
		//$output = '';
		/* output the email header information *
		$output.= '<div class="toggler '.($overview[0]->seen ? 'read' : 'unread').'">';
		$output.= '<span class="subject">'.$overview[0]->subject.'</span> ';
		$output.= '<span class="from">'.$overview[0]->from.'</span>';
		$output.= '<span class="date">on '.$overview[0]->date.'</span>';
		$output.= '</div>';
		/* output the email body */
		//$output.= '<div class="body">'.$message.'</div>';

		return $message;
	}

	public function deleteMessage($imap,$email_number){
		print_r(imap_delete($imap, $email_number));
	}

	public function undeleteMessage($imap,$email_number){
		print_r(imap_delete($imap, $email_number));
	}

	public function expungeMessages($imap){

		print_r(imap_undelete($imap));
	}

	public function composeMessage($message){
		
		$envelope["from"]= "flrvanwyk@gmail.com";
		$envelope["to"]  = "";
		$envelope["cc"]  = "hiren.g@eternalsoftsolutions.com";
		
		$part1["type"] = TYPEMULTIPART;
		$part1["subtype"] = "mixed";

		$filename = "attachment1.txt";
		$fp = fopen($filename, "r");
		$contents = fread($fp, filesize($filename));
		fclose($fp);

		$part2["type"] = TYPEAPPLICATION;
		$part2["encoding"] = ENCBINARY;
		//$part2["encoding"] = ENCBASE64;
		$part2["subtype"] = "octet-stream";
		$part2["description"] = basename($filename);
		$part2['disposition.type'] = 'attachment';
		$part2['disposition'] = array ('filename' => $file_name);
		$part2['dparameters.filename'] = $file_name;
		$part2['parameters.name'] = $file_name;
		$part2["contents.data"] =  base64_encode($contents);

		$part3["type"] = TYPETEXT;
		$part3["subtype"] = "html";
		$part3["description"] = "message";
		$part3["contents.data"] = $message;

		$body[1] = $part1;
		$body[2] = $part2;
		$body[3] = $part3;
		return imap_mail_compose($envelope, $body);
	}
	
	public function appendMessage($header, $body, $folder){
	}

	public function sendMessage($toaddress, $ccaddress, $bccaddress, $subject, $message){
		$body = $this->composeMessage($message);
		
		imap_mail($toaddress, $subject, $body, null, $ccaddress, $bccaddress, null);
		
		//use imap_append to add message sent to Sent Items
	}

	public function getErrors(){
		$errors = imap_errors();
		$alerts = imap_alerts();
		if(is_array($errors))
		{
			echo "<pre>"; print_r($errors);
		}
		if(is_array($alerts))
		{
			echo "<pre>"; print_r($alerts);
		}
	}

	public function getAttachmentsByMsgNo($imap,$email_number)
	{
		$structure = imap_fetchstructure($imap, $email_number);
		//echo "<pre>"; print_r($structure); die();
		$attachments = array();
		/* if any attachments found... */
        if(isset($structure->parts) && count($structure->parts)) 
        {
            for($i = 0; $i < count($structure->parts); $i++) 
            {
                $attachments[$i] = array(
                    'is_attachment' => false,
                    'filename' => '',
                    'name' => '',
                    'attachment' => ''
                );
 				
                if($structure->parts[$i]->ifdparameters) 
                {
                    foreach($structure->parts[$i]->dparameters as $object) 
                    {
                        if(strtolower($object->attribute) == 'filename') 
                        {
                            $attachments[$i]['is_attachment'] = true;
                            $attachments[$i]['filename'] = $object->value;
                        }
                    }
                }
 
                if($structure->parts[$i]->ifparameters) 
                {
                    foreach($structure->parts[$i]->parameters as $object) 
                    {
                        if(strtolower($object->attribute) == 'name') 
                        {
                            $attachments[$i]['is_attachment'] = true;
                            $attachments[$i]['name'] = $object->value;
                        }
                    }
                }
 
                if($attachments[$i]['is_attachment']) 
                {
                    $attachments[$i]['attachment'] = imap_fetchbody($imap, $email_number, $i+1);
 
                    /* 4 = QUOTED-PRINTABLE encoding */
                    if($structure->parts[$i]->encoding == 3) 
                    { 
                        $attachments[$i]['attachment'] = base64_decode($attachments[$i]['attachment']);
                    }
                    /* 3 = BASE64 encoding */
                    elseif($structure->parts[$i]->encoding == 4) 
                    { 
                        $attachments[$i]['attachment'] = quoted_printable_decode($attachments[$i]['attachment']);
                    }
                }
            }
        }
 		//echo "<pre>"; print_r($attachments); die();
        if(!empty($attachments))
        {
	        /* iterate through each attachment and save it */
	        foreach($attachments as $attachment)
	        {
	            if($attachment['is_attachment'] == 1)
	            {
	                $filename = $attachment['name'];
	                if(empty($filename)) $filename = $attachment['filename'];
	 
	                if(empty($filename)) $filename = time() . ".dat";
	 
	                /* prefix the email number to the filename in case two emails
	                 * have the attachment with the same file name.
	                 */
	                $fp = fopen('assets/default/images/frontend/imap/'.$email_number . "-" . $filename, "w+");
	                fwrite($fp, $attachment['attachment']);
	                fclose($fp);
	                $src = base_url('assets/default/images/frontend/imap/'.$email_number.'-'.$filename);
	                echo '<img src="'.$src.'" /> <br>';
	            }
	        }
	    }
	    else
	    {
	    	echo "there is no attachments in this message";
	    }
	}

/*----End: Imap Functions-----------------------------------------------------------------------*/
}

/* End of file Someclass.php */
?>