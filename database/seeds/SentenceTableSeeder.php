<?php

use Illuminate\Database\Seeder;
use App\Models\Sentence;

class SentenceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sentence = factory(Sentence::class)->times(300)->make();
        Sentence::insert($sentence->toArray());
    }
}
