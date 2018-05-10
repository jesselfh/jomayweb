<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UsersTableSeeder::class);
		$this->call(ProductsTableSeeder::class);
		//$this->call(BrandsTableSeeder::class);
		//$this->call(QuestionsTableSeeder::class);
		//$this->call(NewssTableSeeder::class);
        //$this->call(RecruitsTableSeeder::class);
    }
}
