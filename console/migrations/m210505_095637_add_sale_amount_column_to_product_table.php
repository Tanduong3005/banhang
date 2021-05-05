<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%product}}`.
 */
class m210505_095637_add_sale_amount_column_to_product_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function Up()
    {
        $this->addColumn('product', 'sales_amount', $this->integer());

    }

    /**
     * {@inheritdoc}
     */
    public function Down()
    {
        $this->dropColumn('product', 'sales_amount');

    }
}
