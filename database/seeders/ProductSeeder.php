<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        				
        DB::table('products')->insert([
            [
                'id' => 1,
                'name' => 'Camiseta ID Protocolo Bluehand',
                'description' => 'A camiseta definitiva para a sua sobrevivência ao fim dos tempos.',
                'picture' => 'definir',
                'qtd_in_stock' => 25,
                'price' => 24.99,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'id' => 2,
                'name' => 'Avental de Cozinha Capitão América',
                'description' => 'Se torne você também o Capitão América da sua cozinha com este avental.',
                'picture' => 'definir',
                'qtd_in_stock' => 25,
                'price' => 14.99,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
        ]);
    }
}
