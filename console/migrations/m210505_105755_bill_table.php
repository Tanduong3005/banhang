<?php

use yii\db\Migration;

/**
 * Class m210505_105755_bill_table
 */
class m210505_105755_bill_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function Up()
    {
        $this->createTable('bill', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'product_id' => $this->integer(),
            'product_title' => $this->string(),
            'amount' => $this->integer(),
            'order_total' => $this->integer(),
            'created_at' => $this->integer(),
            'update_at' => $this->integer(),
            'created_by' => $this->integer(),
        ]);
        $this->addForeignKey('FK_bill_procduct', 'bill',  'product_id', 'product', 'id');



    }

    /**
     * {@inheritdoc}
     */
    public function Down()
    {
        $this->dropTable('bill');
        $this->dropForeignKey('FK_bill_procduct', 'bill');
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210505_105755_bill_table cannot be reverted.\n";

        return false;
    }
    */
}
