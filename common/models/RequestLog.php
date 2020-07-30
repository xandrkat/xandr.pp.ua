<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "request_log".
 *
 * @property int $id
 * @property string $src
 * @property string $user_email
 * @property int $code
 * @property int $timestamp
 */
class RequestLog extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'request_log';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['src', 'user_email', 'code', 'timestamp'], 'required'],
            [['code', 'timestamp'], 'integer'],
            [['src', 'user_email'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'src' => 'Src',
            'user_email' => 'User Email',
            'code' => 'Code',
            'timestamp' => 'Timestamp',
        ];
    }
}
