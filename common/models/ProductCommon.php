<?php


namespace common\models;

use yii\db\ActiveRecord;
use yii\debug\models\router\ActionRoutes;

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

 */
class ProductCommon extends ActiveRecord
{
    const ACTIVE_STATUS = 1;

    public static function tableName()
    {
        return 'product';
}

    }