<?php

use yii\db\Migration;

/**
 * Class m210416_033831_create_table_catagory
 */
class m210416_033831_create_table_catagory extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%catagory}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255)->notNull()->unique(),
            'slug' => $this->string(255)->notNull()->unique(),
            'status' =>$this->tinyInteger(1)->notNull()->defaultValue(1),
            'created_at' =>$this->integer(11)->null(),
            'updated_at' =>$this->integer(11)->null(),

        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%catagory}}');
    }
}
