<?php

use yii\db\Migration;

/**
 * Handles the creation for table `about`.
 */
class m160916_060455_create_about_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('about', [
            'id' => $this->primaryKey(),
            'anchor' => 'integer',
            'comment' => 'text',
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('about');
    }
}
