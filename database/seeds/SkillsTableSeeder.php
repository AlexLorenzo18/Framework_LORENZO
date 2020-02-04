<?php

use Illuminate\Database\Seeder;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array([
                  'name' => 'Javascript',
                  'description' => 'Langage de script JS',
                  'logo' => 'js.png',
                ],
                [
                  'name' => 'HTML CSS',
                  'description' => 'Langage du web',
                  'logo' => 'html-css.png',
                ],
                [
                  'name' => 'PHP',
                  'description' => 'Langage de script PHP',
                  'logo' => 'php.png',
                ],
                [
                  'name' => 'Python',
                  'description' => 'Langage de script Python',
                  'logo' => 'python.png',
                ]
                );
        App\Competence::insert($data);
                
    }
}
