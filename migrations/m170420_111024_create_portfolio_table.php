<?php

use yii\db\Migration;

/**
 * Handles the creation of table `portfolio`.
 */
class m170420_111024_create_portfolio_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('portfolio', [
            'id' => $this->primaryKey(),


            'image' => $this->string(),

            'filial_id' => $this->integer(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('portfolio');
    }
}
