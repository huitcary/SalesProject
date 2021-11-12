<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
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
                'category'=> "Cream",
                'description'=>'All Cream items',
            ],
            [
                'category'=> "Gloss",
                'description'=>'All Glosse items ',
            ],
            [
                'category'=> "Matte",
                'description'=>'All Matte items',
            ],
            [
                'category'=> "Sheer",
                'description'=>'All Sheer items',
            ],
        ];
        foreach($data as $c){
            \App\Category::create($c);
        }
    }
}
