<?php

use yii\db\Migration;

/**
 * Handles the creation of table `schedule_svyatoshino_1`.
 */
class m170422_140836_create_schedule_svyatoshino_1_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('schedule_svyatoshino_1', [
            'id' => $this->primaryKey(),
            'name_Lesson' => $this->string(),
            'time_Lesson' => $this->string(),
            'date_Lesson' => $this->string(),
            'sale_Lesson' => $this->string(),
            'google_map_Lesson' => $this->string(),
            'status_color_Lesson' => $this->string(),
            'active_Lesson' => $this->integer(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('schedule_svyatoshino_1');
    }
}
