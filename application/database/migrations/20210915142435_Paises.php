<?php

class Migration_Paises extends CI_Migration {

	public function up() {
		$this->dbforge->add_field(array(
			'id'              => array(
				'type'           => 'INT',
				'constraint'     => 11,
				'auto_increment' => true,
			),
			'sigla'     => array(
				'type'       => 'VARCHAR',
				'constraint' => 5,
			)
			,
			'nome' => array(
				'type'       => 'VARCHAR',
				'constraint' => 100,
			),
			'dt_cadastro'    => array(
				'type' => 'DATETIME',
			),
			'dt_atualizacao'    => array(
				'type' => 'DATETIME',
			),
		));
		$this->dbforge->add_key('id', true);
		$this->dbforge->create_table('paises');
	}

	public function down() {
		$this->dbforge->drop_table('paises');
	}
}
