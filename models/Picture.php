<?php

namespace app\models;

use Yii;
use yii\base\Event;


/**
 * This is the model class for table "picture".
 *
 * @property integer $id
 * @property string $name
 * @property string $author
 * @property string $date_create
 * @property string $date_add
 * @property string $comment
 * @property string $link
 * @property string $gallery
 */
class Picture extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'picture';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'author' ], 'required'],
            [['date_create', 'date_add'], 'safe'],
            [['comment'], 'string'],
            [['name', 'author', 'link', 'gallery'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Идентификатор',
            'name' => 'Название',
            'author' => 'Автор',
            'date_create' => 'Дата создания',
            'date_add' => 'Дата публикации',
            'comment' => 'Комментарий',
            'link' => 'Ссылка',
            'gallery' => 'Галлерея',
        ];
    }

}
