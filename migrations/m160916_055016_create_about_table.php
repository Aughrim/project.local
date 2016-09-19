<?php

use yii\db\Migration;

/**
 * Handles the creation for table `about`.
 */
class m160916_055016_create_about_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('about', [
            'id' => 'integer',
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
