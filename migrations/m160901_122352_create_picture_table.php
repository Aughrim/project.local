<?php

use yii\db\Migration;

/**
 * Handles the creation for table `picture`.
 */
class m160901_122352_create_picture_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('picture', [
            'id' => 'pk',
            'name' => 'string NOT NULL',
            'author' => 'string NOT NULL',
            'date_create' => 'date',
            'date_add' => 'date',
            'comment' => 'text',
            'link' => 'string',
            'gallery' => 'string',

        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('picture');
    }
}
