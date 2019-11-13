<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property string $title
 * @property string $date_time
 * @property string $place
 * @property string $detail
 * @property int $category_id
 * @property string $photo
 * @property string $video
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['detail'], 'string'],
            [['category_id'], 'integer'],
            [['title', 'date_time', 'place', 'video'], 'string', 'max' => 255],
            [['photo'], 'string', 'max' => 128],
            [['title'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'date_time' => 'Date Time',
            'place' => 'Place',
            'detail' => 'Detail',
            'category_id' => 'Category ID',
            'photo' => 'Photo',
            'video' => 'Video',
        ];
    }
}
