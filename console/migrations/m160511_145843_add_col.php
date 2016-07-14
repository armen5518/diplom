<?php

use yii\db\Migration;

class m160511_145843_add_col extends Migration
{
    public function up()
    {
        $this->addColumn('posts','colyum',$this->string());

    }

    public function down()
    {
        echo "m160511_145843_add_col cannot be reverted.\n";

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
