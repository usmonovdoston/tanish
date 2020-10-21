<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%attachments}}`.
 */
class m201020_071007_create_attachments_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%attachments}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'size' => $this->integer(),
            'extension' => $this->string(20),
            'type' => $this->string(50),
            'path' => $this->string(),
            'directory' => $this->string()->defaultValue('uploads/attachments'),
            'model_name' => $this->string(),
            'is_main' => $this->tinyInteger()->defaultValue(0),
            'item_id' => $this->integer(),
            'status' => $this->smallInteger()->defaultValue(1),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer()
        ]);
        // creates index for column `model_name`
        $this->createIndex(
            '{{%idx-attachments-model_name}}',
            '{{%attachments}}',
            'model_name'
        );
        // creates index for column `item_id`
        $this->createIndex(
            '{{%idx-attachments-item_id}}',
            '{{%attachments}}',
            'item_id'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops index for column `model_name`
        $this->dropIndex(
            '{{%idx-attachments-model_name}}',
            '{{%attachments}}'
        );

        // drops index for column `item_id`
        $this->dropIndex(
            '{{%idx-attachments-item_id}}',
            '{{%attachments}}'
        );
        $this->dropTable('{{%attachments}}');
    }
}
