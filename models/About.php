<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "about".
 *
 * @property integer $id
 * @property string $comment
 */
class About extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'about';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['comment'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'comment' => 'Comment',
        ];
    }
}
