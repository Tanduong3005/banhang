<?php


namespace common\models;

use backend\models\Category;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "category".
 *
 * @property int $id
 * @property string $title
 * @property string|null $slug
 * @property string|null $description
 * @property string $content
 * @property int|null $created_at
 * @property int|null $created_by
 */
class CategoryCommon extends ActiveRecord
{
    const ACTIVE_STATUS = 1;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'category';
    }

}