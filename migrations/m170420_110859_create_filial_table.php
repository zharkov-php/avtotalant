<?php

use yii\db\Migration;

/**
 * Handles the creation of table `filial`.
 */
class m170420_110859_create_filial_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('filial', [
            'id' => $this->primaryKey(),
            'description' => $this->text(),
            'content' => $this->text(),

            'title' => $this->string(),
            'text' => $this->text(),
            'image' => $this->string(),
            'status' => $this->integer(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('filial');
    }
}
