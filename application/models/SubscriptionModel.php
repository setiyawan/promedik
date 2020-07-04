<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class SubscriptionModel extends CI_Model {

    // POST TRANSACTION
    public function add_subscription($data) {
        return $this->db->insert('subscription', $data);
    }

}

?>