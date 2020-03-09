<?php

namespace App\Exports;

use App\Models\Loveword;
use Maatwebsite\Excel\Concerns\FromCollection;

class LovewordExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Loveword::all();
    }
}
