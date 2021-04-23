<?php


namespace common\models;


use yii\db\ActiveRecord;
/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $slug
 * @property string $description
 * @property string|null $content
 * @property int|null $status
 * @property int|null $created_at
 * @property int|null $created_by
 */
class NewsCommon extends ActiveRecord
{
    const ACTIVE_STATUS = 1;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'news';
    }
}