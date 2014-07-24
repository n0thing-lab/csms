<?php

class m140724_202419_documents_versions_init extends CDbMigration
{
	public function up()
	{
		$this->createTable('{{documents_versions}}', array(
			'id' => 'pk',
			'document_id' => 'integer',
			'name' => 'string',
			'user_id' => 'integer',
			'file' => 'string',
		));
	}

	public function down()
	{
		echo "m140724_202419_documents_versions_init does not support migration down.\n";
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