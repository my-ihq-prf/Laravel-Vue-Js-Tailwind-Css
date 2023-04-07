<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Products;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // Let's truncate our existing records to start from scratch.
        Products::truncate();

        $strJsonFileContents = file_get_contents(__DIR__."/dummyProducts.json");
        $array = json_decode($strJsonFileContents, true);
        if (count($array)) {
            for ($i = 0; $i < count($array); $i++) {
                Products::create([
                    'name' => $array[$i]['name'],
                    'img' => $array[$i]['img'],
                    'number' => $array[$i]['number'],
                    'brand' => $array[$i]['brand'],
                    'price' => $array[$i]['price'],
                ]);
            }
        }
        // var_dump( $array); // show contents
    }
}
