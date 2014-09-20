<?php

class m140920_100515_users_init extends CDbMigration
{
	public function up()
	{
        $this->createTable('{{users}}', array(
            'id' => 'pk',
            'name' => 'string',
            'surname' => 'string',
            'email' => 'string',
            'password' => 'string',
        ));
	}

	public function down()
	{
		echo "m140920_100515_users_init does not support migration down.\n";
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