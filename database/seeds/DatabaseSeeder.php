<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(SkillsTableSeeder::class);
        $competences = App\Competence::all();
        factory(App\User::class, 50)->create()->each(function($u) use ($competences) {
            $compSet= $competences->random(rand(1,4));
            foreach($compSet as $competence) {
                $u->competences()->attach($competence->id, ['level' => rand (1,5)]); 
    }
    });
 }   
}
