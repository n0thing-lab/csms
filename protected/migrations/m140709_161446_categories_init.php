<?php

class m140709_161446_categories_init extends CDbMigration
{
	public function up()
	{
		$this->createTable('{{categories}}', array(
			'id' => 'pk',
			'parent' => 'integer',
			'name' => 'string',
		));
	}

	public function down()
	{
		echo "m140709_161446_categories_init does not support migration down.\n";
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