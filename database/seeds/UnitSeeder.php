<?php

use Illuminate\Database\Seeder;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'unit_type'=> "A combo of texture and gloss!",
                'description'=>'Rich in oils and butter',
            ],
            [
                'unit_type'=> "The glamorous lustre!",
                'description'=>'Give a shiny, watery finish to your pout',
            ],
            [
                'unit_type'=> "Pure Colour",
                'description'=>'A sophisticated velvet finish',
            ],
            [
                'unit_type'=> "little spark",
                'description'=>'Enriched with moisturizing oils',
            ],
        ];
        foreach($data as $u){
            \App\Unit::create($u);
        }
    }
}