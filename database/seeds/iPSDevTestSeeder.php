<?php
    
    use App\Models\Module;
    use Illuminate\Database\Seeder;
    
    class iPSDevTestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i = 1; $i <= 7; $i++){
            Module::insert([
                [
                    'course_key' => 'ipa',
                    'name' => 'IPA Module ' . $i,
                    'number' => $i
                ],

                [
                    'course_key' => 'iea',
                    'name' => 'IEA Module ' . $i,
                    'number' => $i
                ],

                [
                    'course_key' => 'iaa',
                    'name' => 'IAA Module ' . $i,
                    'number' => $i
                ]
            ]);
        }


    }
}
