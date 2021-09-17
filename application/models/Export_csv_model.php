<?php
class Export_csv_model extends CI_Model{

    public function fetch_data($tipo = NULL){
  
        $this->db->select("sigla, nome");
        $this->db->from('paises');
        $this->db->order_by($tipo, 'ASC');
        return $this->db->get();
    
    }

    public function fetch_data_nome(){
  
        $this->db->select("sigla, nome");
        $this->db->from('paises');
        $this->db->order_by('nome', 'ASC');
        return $this->db->get();
    
    }

}