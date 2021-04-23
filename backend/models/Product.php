<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $slug
 * @property string $description
 * @property string $content
 * @property int|null $status
 * @property int|null $created_at
 * @property int|null $created_by
 * @property string|null $avatar
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description', 'content'], 'required'],
            [['description', 'content'], 'string'],
            [['status', 'created_at', 'created_by'], 'integer'],
            [['title', 'slug', 'avatar'], 'string'],
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
            'slug' => 'Slug',
            'description' => 'Description',
            'content' => 'Content',
            'status' => 'Status',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'avatar' => 'Avatar',
        ];
    }
}
