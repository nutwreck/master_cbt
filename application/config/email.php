<?php

$config = Array(
	'useragent' => $_ENV['MAIL_USERAGENT'],
	'mailtype' => $_ENV['MAIL_TYPE'],
	'mailpath' => $_ENV['MAIL_PATH'],
	'protocol' => $_ENV['MAIL_PROTOCOL'],
	'smtp_host' => $_ENV['MAIL_SMTP_HOST'],
	'smtp_port' => $_ENV['MAIL_SMTP_PORT'],
	'smtp_user' => $_ENV['MAIL_SMTP_USER'],
	'smtp_pass' => $_ENV['MAIL_SMTP_PASSWORD'],
	'smtp_crypto' => $_ENV['MAIL_SMTP_CRYPTO'],
	'smtp_timeout' => $_ENV['MAIL_SMTP_TIMEOUT'],
	'send_multipart' => $_ENV['MAIL_SEND_MULTIPART'],
	'charset'   => 'utf-8',
	'crlf' => "\r\n",
	'newline' => "\r\n",
	'wordwrap' => TRUE
);

/* How To Use
    1. Tambah e $this->load->config('email'); //SET CONFIG EMAIL ning function __construct class
    2. Kode email
            $from = $this->config->item('smtp_user');
			$subject = 'Testing Email;
			$message = $this->load->view("",$data,TRUE); //halaman view email, $data berisi data2 lemparan ke view

			$this->email->set_newline("\r\n");
			$this->email->from($from, '[NO-REPLY] Testing Sistem');
			$this->email->to($send_to);
			$this->email->subject($subject);
			$this->email->message($message);
			$this->email->send();
*/