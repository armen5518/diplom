<?php

use yii\db\Migration;

class m160511_144738s_page extends Migration
{
    public function up()
    {
        $this->createTable('aa',[
            'id' => $this->primaryKey(),
            'name' => $this->string('200'),
            'test' => $this->text()
        ]);

    }

    public function down()
    {
        echo "m160511_144738_page cannot be reverted.\n";

        return false;
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
