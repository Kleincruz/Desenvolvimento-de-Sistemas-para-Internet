<?php

use Illuminate\Database\Seeder;

class EstoqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estoques')->insert([
            'produto' => 'Camiseta',
            'quantidade' => 10,
            'preco' => 29.99,
        ]);
    }
}