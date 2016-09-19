<?php

use yii\db\Migration;

class m160916_060446_delete_about_table extends Migration
{
    public function up()
    {
        $this->dropTable('about');
    }

    public function down()
    {
        echo "m160916_060446_delete_about_table cannot be reverted.\n";

        return false;
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
