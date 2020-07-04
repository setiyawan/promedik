<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH.'/controllers/MyController.php';

class Subscription extends My_Controller {

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

	/*
	SUBSCRIPTION TYPE
	1 email

	SUBSCRIPTION STATUS
	0 none
	1 proceed
	*/

    public function __construct() {
        parent::__construct();    
    }

	// POST
	public function add() {
    	$this->validate_referer();

		$post = $this->input->post();
		$data = array(
			'email' => $post['email'],
			'type' => 1,
			'status' => 0
		);

		$result = $this->SubscriptionModel->add_subscription($data);
		
		redirect(base_url());
	}
}