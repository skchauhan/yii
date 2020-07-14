<?php

class m200712_175830_create_news_table extends CDbMigration
{
	public function up()
    {
        $this->createTable('tbl_news', array(
            'id' => 'pk',
            'title' => 'string NOT NULL',
            'content' => 'text',
        ));
    }
 
    public function down()
    {
        $this->dropTable('tbl_news');
    }
}