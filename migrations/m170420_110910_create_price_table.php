<?php

use yii\db\Migration;

/**
 * Handles the creation of table `price`.
 */
class m170420_110910_create_price_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('price', [
            'id' => $this->primaryKey(),

            'title' => $this->string(),

            'text' => $this->text(),

            'image' => $this->string(),

        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('price');
    }
}
