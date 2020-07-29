<?php

namespace common\modules\posts\models;

use Yii;
use yii\behaviors\SluggableBehavior;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "posts".
 *
 * @property int $id
 * @property int $user_id
 * @property string $title
 * @property string $slug
 * @property string $description
 * @property string $body
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 */
class Posts extends \yii\db\ActiveRecord
{
    const STATUS_INACTIVE 		= 0;
    const STATUS_ACTIVE 		= 1;
    const STATUS_ARCHIVE 		= 2;

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
        return 'posts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'title', 'slug', 'description', 'body', 'created_at', 'updated_at'], 'required'],
            [['user_id', 'status', 'created_at', 'updated_at'], 'integer'],
            [['title', 'slug'], 'string', 'max' => 32],
            [['description', 'body'], 'string', 'max' => 255],
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
            'title' => 'Title',
            'slug' => 'Slug',
            'description' => 'Description',
            'body' => 'Body',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function getStatusName() {
        return ArrayHelper::getValue(self::getStatusesArray(), $this->status);
    }
    public static function getStatusesArray() {
        return [
            self::STATUS_ACTIVE 	=> 'Активный',
            self::STATUS_INACTIVE 	=> 'Не активный',
            self::STATUS_ARCHIVE 	=> 'Архивный',
        ];
    }
}
