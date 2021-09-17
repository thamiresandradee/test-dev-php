<?php

defined('BASEPATH') or exit('Ação não permitida');

class Paises_model extends CI_Model{
    
    public function get_all_order_by($order = NULL){

		$this->db->select([
			'*',
		]);

		$this->db->order_by($order, 'ASC');

		return $this->db->get('paises')->result();

	}
}