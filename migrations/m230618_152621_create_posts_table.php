<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%posts}}`.
 */
class m230618_152621_create_posts_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%posts}}', [
            'id' => $this->primaryKey(),
			'title' => $this->string()->notNull(),
			'anonce' => $this->string(),
			'content' => $this->text(),
			'publish' => $this->integer()->notNull()->defaultValue(1),
			'created_at' => $this->integer()->notNull(),
			'updated_at' => $this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%posts}}');
    }
}
