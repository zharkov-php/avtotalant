<?php

use yii\db\Migration;

/**
 * Handles the creation of table `user`.
 */
class m170420_185849_create_user_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('user', [
            'id' => $this->primaryKey(),
            'isAdmin' => $this->integer(),
            'name' => $this->string(),
            'email' => $this->string(),
            'password' => $this->string(),
            'photo' => $this->string(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('user');
    }
}
