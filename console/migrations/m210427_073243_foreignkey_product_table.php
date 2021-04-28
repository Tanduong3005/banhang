<?php

use yii\db\Migration;

/**
 * Class m210427_073243_foreignkey_product_table
 */
class m210427_073243_foreignkey_product_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addForeignKey('FK_product_category', 'product',  'category_id', 'category', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('FK_category_product', 'product');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210427_073243_foreignkey_product_table cannot be reverted.\n";

        return false;
    }
    */
}
