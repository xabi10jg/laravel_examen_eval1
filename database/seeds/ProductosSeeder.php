<?php

use Illuminate\Database\Seeder;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([
			'name' => 'Camiseta Roja',
			'description' => 'Camiseta roja de manga corta',
			'stock' => 10,
			'price' =>15.80,
		]);
		DB::table('productos')->insert([
			'name' => 'Camiseta azul',
			'description' => 'Camiseta azul manga larga',
			'stock' => 15,
			'price' =>19.99,
		]);
		DB::table('productos')->insert([
			'name' => 'Pantalones azules',
			'description' => 'Pantalones vaqueros azules',
			'stock' => 20,
			'price' =>20.00,
		]);
		DB::table('productos')->insert([
			'name' => 'PS4',
			'description' => 'Play Station 4',
			'stock' => 5,
			'price' =>300.000,
		]);
		DB::table('productos')->insert([
			'name' => 'XBox One',
			'description' => 'Videoconsola de Microsoft',
			'stock' => 90,
			'price' =>299.00,
		]);
		DB::table('productos')->insert([
			'name' => 'Nintendo Switch',
			'description' => 'Nueva videoconsola de Nintendo',
			'stock' => 30,
			'price' =>250.00,
		]);
		DB::table('productos')->insert([
			'name' => 'Fifa 20',
			'description' => 'Videojuego de fútbol',
			'stock' => 80,
			'price' =>60.00,
		]);
		DB::table('productos')->insert([
			'name' => 'Camiseta térmica',
			'description' => 'Camiseta negra térmica deportiva',
			'stock' => 10,
			'price' =>10.00,
		]);
		DB::table('productos')->insert([
			'name' => 'Pantalones térmicos',
			'description' => 'Pantalones térmicos negros deportivos',
			'stock' => 15,
			'price' =>10.00,
		]);
		DB::table('productos')->insert([
			'name' => 'Casco de bici',
			'description' => 'Casco de bici azul',
			'stock' => 30,
			'price' =>25.99,
		]);
    }
}
