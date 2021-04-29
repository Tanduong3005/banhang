<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%product}}`.
 */
class m210429_075327_add_column_to_product_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function Up()
    {
        $this->addColumn('product', 'price', $this->integer());
        $this->addColumn('product', 'price_sale', $this->integer());
        $this->addColumn('product', 'quantity', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function Down()
    {
        $this->dropColumn('product', 'price');
        $this->dropColumn('product', 'price_sale');
        $this->dropColumn('product', 'quantity');
    }
}
