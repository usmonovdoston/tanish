<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%users_info}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%users}}`
 */
class m201004_153440_create_users_info_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%users_info}}', [
            'users_id' => $this->primaryKey(),
            'name' => $this->string(),
            'lastname' => $this->string(),
            'adress' => $this->string(),
            'birthday' => $this->integer(),
            'birthplace' => $this->string(),
            'hobby' => $this->string(),
            'gender' => $this->smallInteger(),
            'avatar' => $this->string(),
            'image' => $this->string(),
            'profession' => $this->string(),
            'type' => $this->smallInteger()->defaultValue(1),
            'add_info' => $this->text(),
            'country_id' => $this->integer(),
            'status' => $this->smallInteger(6)->defaultValue(1),
        ]);

        // creates index for column `users_id`
        $this->createIndex(
            '{{%idx-users_info-users_id}}',
            '{{%users_info}}',
            'users_id'
        );

        // add foreign key for table `{{%users}}`
        $this->addForeignKey(
            '{{%fk-users_info-users_id}}',
            '{{%users_info}}',
            'users_id',
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
            '{{%fk-users_info-users_id}}',
            '{{%users_info}}'
        );

        // drops index for column `users_id`
        $this->dropIndex(
            '{{%idx-users_info-users_id}}',
            '{{%users_info}}'
        );

        $this->dropTable('{{%users_info}}');
    }
}
