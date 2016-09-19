<?php

use yii\db\Migration;

/**
 * Handles the creation for table `about`.
 */
class m160915_081019_create_about_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('about', [
            'id' => 'pk',
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
