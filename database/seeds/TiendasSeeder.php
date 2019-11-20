<?php

use Illuminate\Database\Seeder;

class TiendasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tiendas')->insert([
			'name' => 'Zara',
			'description' => 'Zara es una tienda de ropa',
			'password' => '1234',
			'email' => 'Zara@gmail.com',
			'likes' => 20
			

		]);
		DB::table('tiendas')->insert([
			'name' => 'Game',
			'description' => 'Game es una tienda de videojuegos',
			'password' => '12345',
			'email' => 'Game@gmail.com',
			'likes' => 30
			

		]);
		DB::table('tiendas')->insert([
			'name' => 'ForumSport',
			'description' => 'ForumSport es una tienda deequipamiento deportivo',
			'password' => '123456',
			'email' => 'ForumSport@gmail.com',
			'likes' => 25
			

		]);
    }
}
