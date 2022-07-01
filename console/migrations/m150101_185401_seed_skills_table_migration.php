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
            'name' => 'Android',
            'proficiency' => 1.0,
        ]);

        $this->insert('skills', [
            'id' => $faker->uuid(),
            'name' => 'Kotlin',
            'proficiency' => 0.8,
        ]);

        $this->insert('skills', [
            'id' => $faker->uuid(),
            'name' => 'Flutter',
            'proficiency' => 0.6,
        ]);

        $this->insert('skills', [
            'id' => $faker->uuid(),
            'name' => 'Git',
            'proficiency' => 0.6,
        ]);

        $this->insert('skills', [
            'id' => $faker->uuid(),
            'name' => 'Java',
            'proficiency' => 0.5,
        ]);

        $this->insert('skills', [
            'id' => $faker->uuid(),
            'name' => 'JavaScript',
            'proficiency' => 0.35,
        ]);

        $this->insert('skills', [
            'id' => $faker->uuid(),
            'name' => 'PHP',
            'proficiency' => 0.2,
        ]);
    }

    public function down(): bool
    {
        echo "seed_skills_table_migration does not support migration down.\n";
        return false;
    }
}
