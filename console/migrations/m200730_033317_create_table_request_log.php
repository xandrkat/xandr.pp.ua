<?php

use yii\db\Migration;

class m200730_033317_create_table_request_log extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable(
            '{{%request_log}}',
            [
                'id' => $this->primaryKey(),
                'src' => $this->string(50)->notNull(),
                'user_email' => $this->string(50)->notNull(),
                'code' => $this->integer()->notNull(),
                'timestamp' => $this->integer()->notNull(),
            ],
            $tableOptions
        );
    }

    public function down()
    {
        $this->dropTable('{{%request_log}}');
    }
}
