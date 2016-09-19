<?php

use yii\db\Migration;

class m160916_054622_delete_about_table extends Migration
{
    public function up()
    {
        $this->dropTable('about');
    }

    public function down()
    {

        $this->createTable('about', [
            'id' => 'pk',
            'comment' => 'text',
        ]);

        echo "m160916_054622_delete_about_table cannot be reverted.\n";

    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
