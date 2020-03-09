<?php

use Illuminate\Database\Seeder;
use App\Models\Facepic;

class FacepicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pic = factory(Facepic::class)->times(50)->make();
        Facepic::insert($pic->toArray());
    }
}
