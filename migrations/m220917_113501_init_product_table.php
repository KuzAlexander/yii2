<?php

use yii\db\Migration;

/**
 * Class m220917_113501_init_product_table
 */
class m220917_113501_init_product_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable(
            'product',
            [
                'id' => 'pk',
                'name' => 'string',
                'price' => 'double',
                'description' => 'text',
            ],
            'ENGINE=InnoDB'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('product');
    }
}
