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
        $this->createTable(
            'provider',
            [
                'id' => 'pk',
                'id_product' => 'int unique',
                'name' => 'string',
            ],
            'ENGINE=InnoDB'
        );

        $this->addForeignKey('product_provider', 'provider',
            'id_product', 'product', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('product_provider', 'provider');
        $this->dropTable('provider');
    }
}
