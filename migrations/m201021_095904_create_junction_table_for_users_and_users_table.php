<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%users_subscribe}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%users}}`
 */
class m201021_095904_create_junction_table_for_users_and_users_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%users_subscribe}}', [
            'from_users_id' => $this->integer(),
            'to_users_id' => $this->integer(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
            'PRIMARY KEY(from_users_id, to_users_id)',
        ]);

        // creates index for column `from_users_id`
        $this->createIndex(
            '{{%idx-users_subscribe-from_users_id}}',
            '{{%users_subscribe}}',
            'from_users_id'
        );

        // add foreign key for table `{{%users}}`
        $this->addForeignKey(
            '{{%fk-users_subscribe-from_users_id}}',
            '{{%users_subscribe}}',
            'from_users_id',
            '{{%users}}',
            'id',
            'CASCADE'
        );
        // creates index for column `to_users_id`
        $this->createIndex(
            '{{%idx-users_subscribe-to_users_id}}',
            '{{%users_subscribe}}',
            'to_users_id'
        );

        // add foreign key for table `{{%users}}`
        $this->addForeignKey(
            '{{%fk-users_subscribe-to_users_id}}',
            '{{%users_subscribe}}',
            'to_users_id',
            '{{%users}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%users}}`
        $this->dropForeignKey(
            '{{%fk-users_subscribe-from_users_id}}',
            '{{%users_subscribe}}'
        );

        // drops index for column `from_users_id`
        $this->dropIndex(
            '{{%idx-users_subscribe-from_users_id}}',
            '{{%users_subscribe}}'
        );
        // drops foreign key for table `{{%users}}`
        $this->dropForeignKey(
            '{{%fk-users_subscribe-to_users_id}}',
            '{{%users_subscribe}}'
        );

        // drops index for column `to_users_id`
        $this->dropIndex(
            '{{%idx-users_subscribe-to_users_id}}',
            '{{%users_subscribe}}'
        );

        $this->dropTable('{{%users_subscribe}}');
    }
}
