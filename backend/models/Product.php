<?php

namespace backend\models;

use common\models\ProductCommon;
use Yii;


class Product extends ProductCommon
{
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
     * @property int $category_id
     *
     * @property Category $category
     */
    public function rules()
    {
        return [
            [['description', 'content', 'category_id'], 'required'],
            [['description', 'content'], 'string'],
            [['status', 'created_at', 'created_by', 'category_id'], 'integer'],
            [['title', 'slug', 'avatar'], 'string', 'max' => 255],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('backend', 'ID'),
            'title' => Yii::t('backend', 'Title'),
            'slug' => Yii::t('backend', 'Slug'),
            'description' => Yii::t('backend', 'Description'),
            'content' => Yii::t('backend', 'Content'),
            'status' => Yii::t('backend', 'Status'),
            'created_at' => Yii::t('backend', 'Created At'),
            'created_by' => Yii::t('backend', 'Created By'),
            'avatar' => Yii::t('backend', 'Avatar'),
            'category_id' => Yii::t('backend', 'Category ID'),
        ];
    }

    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }
}
