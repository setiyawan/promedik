<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH.'/controllers/MyController.php';

class Contact extends My_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */



    public function __construct() {
        parent::__construct();    
    }

	// POST
	public function add_new_mail() {
    	$this->validate_referer();

		$post = $this->input->post();
		$data = array(
			'name' => $post['name'],
			'email' => $post['email'],
			'phone_number' => $post['phone_number'],
			'message' => $post['message'],
			'status' => 0
		);

		$result = $this->ContactModel->add_mail($data);
		if ($result) {
			$this->set_alert('success', 'Pesan kamu diterima. Mohon menunggu untuk konfirmasi lebih lanjut dari kami. Terimakasih terlah menghubungi Promedik ya :)');
		}
		
		redirect(base_url(). '#contact_part');
	}
}