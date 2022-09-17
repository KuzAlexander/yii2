<?php

use yii\db\Migration;

/**
 * Class m220917_114129_init_provider_table
 */
class m220917_114129_init_provider_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220917_114129_init_provider_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220917_114129_init_provider_table cannot be reverted.\n";

        return false;
    }
    */
}
