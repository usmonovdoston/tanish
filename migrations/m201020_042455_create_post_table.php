<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%post}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%users}}`
 * - `{{%users}}`
 */
class m201020_042455_create_post_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%post}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'slug' => $this->string()->unique(),
            'excerpt' => $this->string(),
            'content' => $this->text(),
            'type' => $this->smallInteger()->defaultValue(1),
            'add_info' => $this->text(),
            'view' => $this->integer(),
            'last_read' => $this->integer(),
            'status' => $this->smallInteger(6)->defaultValue(1),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer(),
        ]);

        // creates index for column `created_by`
        $this->createIndex(
            '{{%idx-post-created_by}}',
            '{{%post}}',
            'created_by'
        );

        // creates index for column `updated_by`
        $this->createIndex(
            '{{%idx-post-updated_by}}',
            '{{%post}}',
            'updated_by'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {

        // drops index for column `created_by`
        $this->dropIndex(
            '{{%idx-post-created_by}}',
            '{{%post}}'
        );

        // drops index for column `updated_by`
        $this->dropIndex(
            '{{%idx-post-updated_by}}',
            '{{%post}}'
        );

        $this->dropTable('{{%post}}');
    }
}
