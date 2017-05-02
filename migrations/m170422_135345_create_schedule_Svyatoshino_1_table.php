<?php

use yii\db\Migration;

/**
 * Handles the creation of table `schedule_Svyatoshino_1`.
 */
class m170422_135345_create_schedule_Svyatoshino_1_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('schedule_Svyatoshino_1', [
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
        $this->dropTable('schedule_Svyatoshino_1');
    }
}
