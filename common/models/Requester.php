<?php

namespace common\models;

use Yii;
use yii\behaviors\SluggableBehavior;

/**
 * This is the model class for table "requester".
 *
 * @property int $id
 * @property int $user_id
 * @property string $title
 * @property string $slug
 * @property string $src
 */
class Requester extends \yii\db\ActiveRecord
{
    public function behaviors() {
        return [
            [
                'class' => SluggableBehavior::className(),
                'attribute' => 'title',
                'slugAttribute' => 'slug'
            ],
        ];
    }
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'requester';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'title', 'slug', 'src'], 'required'],
            [['user_id'], 'integer'],
            [['title', 'slug', 'src'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'title' => 'Город',
            'slug' => 'Slug',
            'src' => 'IP',
        ];
    }
}
