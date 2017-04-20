<?php

use yii\db\Migration;

/**
 * Handles the creation of table `menu`.
 */
class m170420_110951_create_menu_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('menu', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'image' => $this->string(),
            'status' => $this->integer(),

        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('menu');
    }
}
