<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%form}}`.
 */
class m220729_112442_create_form_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%form}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'number' => $this->string(32),
            'email' => $this->string()->notNull(),
            'message' => $this->text(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%form}}');
    }
}

