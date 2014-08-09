<?php

class m140724_195816_documents_init extends CDbMigration
{
	public function up()
	{
		$this->createTable('{{documents}}', array(
			'id' => 'pk',
			'name' => 'string',
			'category_id' => 'integer',
			'year' => 'integer',
		));
	}

	public function down()
	{
		echo "m140724_195816_documents_init does not support migration down.\n";
		return false;
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}