<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Perfume;


class PerfumeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array_perfume = include 'perfumeData.php';

        foreach ($array_perfume as $item) {
            $perfume = new Perfume();
            $perfume->name = $item['name'];
            $perfume->brand = $item['brand'];
            $perfume->category = $item['category'];
            $perfume->size = $item['size'];
            $perfume->price = $item['price'];
            $perfume->image = $item['image'];
            $perfume->save();
        };
    }
}     
