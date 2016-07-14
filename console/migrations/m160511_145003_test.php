<?php

use yii\db\Migration;

class m160511_145003_test extends Migration
{
    public function up()
    {
        $this->createTable('tset',[
            'id' => $this->primaryKey(),
            'name' => $this->string('200')->notNull(),
            'id_name' => $this->integer()->defaultValue(12)
        ]);

    }

    public function down()
    {
       $this->dropTable('test');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
