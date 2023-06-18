<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%comments}}`.
 */
class m230618_154520_create_comments_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%comments}}', [
            'id' => $this->primaryKey(),
			'post_id' => $this->integer()->notNull(),
			'user_id' => $this->integer()->notNull(),
			'content' => $this->text(),
			'created_at' => $this->integer()->notNull()
        ]);

        $this->addForeignKey(
        	'postId',
			'comments',
			'post_id',
			'posts',
			'id',
			'CASCADE'
		);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%comments}}');
    }
}
