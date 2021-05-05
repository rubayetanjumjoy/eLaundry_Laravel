<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
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
        DB::table('products')->insert([[
             
            'name'=>'Frock',
            'price'=> '20',
            'catagory'=>'Female Cloth',
            'discription'=>'Delivery Charge Will be included',],[
                'name'=>'Scarf',
            'price'=> '20',
            'catagory'=>'Female Cloth',
            'discription'=>'Delivery Charge Will be included'



            ],[
                'name'=>'Salwar',
            'price'=> '20',
            'catagory'=>'Female Cloth',
            'discription'=>'Delivery Charge Will be included'

            ],


            
        ]);
    }
}
