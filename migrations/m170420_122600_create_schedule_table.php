<?php

use yii\db\Migration;

/**
 * Handles the creation of table `schedule`.
 */
class m170420_122600_create_schedule_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('schedule', [
            'id' => $this->primaryKey(),
            'nameDate' => $this->date(),
            'timeDate' => $this->time(),
            'weekDate' => $this->string(),
            'lengthDate' => $this->string(),
            'status' => $this->integer(),
            'on' => $this->integer(),
            'filial_id' => $this->integer()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('schedule');
    }
}
