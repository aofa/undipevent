<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_admin extends CI_Migration {

	public function up()
	{
		/*
		$this->dbforge->add_field(array(
			'category_id' => array(
				'type' => 'INT',
				'constraint' => 5,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'category_name' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),
			'slug' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),
			'slug' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),
		));
		$this->dbforge->add_key('category_id',true);
		$this->dbforge->create_table('admin');*/
	}

	public function down()
	{	/*
		$this->dbforge->drop_table('admin');
		*/
	}

}

?>