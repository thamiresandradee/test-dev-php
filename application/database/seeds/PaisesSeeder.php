<?php
date_default_timezone_set('America/Sao_paulo');

class PaisesSeeder extends Seeder {

	private $table = 'paises';

	public function run() {
		$this->db->truncate($this->table);

        $string = file_get_contents('./files/country.txt');
        $arquivo = explode("\n", $string);

        foreach ($arquivo as $key => $value) {
            $array = explode(",",$value);
            //print_r($array);
            //exit;

            $sigla = $array[0];
            $nome = $array[1];

            $data = array(
                'sigla'     		=> $sigla,
                'nome'              => $nome,
                'dt_cadastro'   	=> date('Y-m-d H:i:s'),
                'dt_atualizacao'    => date('Y-m-d H:i:s'),
            );
            
            $this->db->insert($this->table, $data);
		    echo PHP_EOL;

        }
        return;
        
	}
}
