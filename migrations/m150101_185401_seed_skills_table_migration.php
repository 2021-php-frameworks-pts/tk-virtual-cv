<?php

use yii\db\Migration;

require_once 'vendor/autoload.php';

class m150101_185401_seed_skills_table_migration extends Migration
{

    public function up()
    {
        // TODO Connect with SkillsTable

        $faker = Faker\Factory::create();

        $this->createTable('skills', columns: [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'proficiency' => $this->float()->notNull()
        ]);

        $this->insert('skills', [
            'id' => $faker->uuid(),
            'name' => $faker->name(),
            'proficiency' => $faker->randomFloat(),
        ]);
    }

    public function down(): bool
    {
        echo "seed_skills_table_migration does not support migration down.\n";
        return false;
    }
}
