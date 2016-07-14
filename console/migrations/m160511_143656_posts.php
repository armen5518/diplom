<?php
use yii\db\Schema;
use yii\db\Migration;

class m160511_143656_posts extends Migration
{
    public function up()
    {
        $this->createTable('posts',[
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING
        ]);
        
      

    }

    public function down()
    {
        echo "m160511_143656_posts cannot be reverted.\n";

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
