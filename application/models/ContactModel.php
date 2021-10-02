<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class ContactModel extends CI_Model {

    // POST TRANSACTION
    public function add_mail($data) {
        return $this->db->insert('mail', $data);
    }

}

?>