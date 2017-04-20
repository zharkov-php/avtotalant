<?php

use yii\db\Migration;

/**
 * Handles the creation of table `contact`.
 */
class m170420_122710_create_contact_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('contact', [
            'id' => $this->primaryKey(),
            'text' => $this->text(),
            'image' => $this->string(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('contact');
    }
}
