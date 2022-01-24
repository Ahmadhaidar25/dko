<?php

namespace App\Exports;

use App\Models\data_model1;
use Maatwebsite\Excel\Concerns\FromCollection;

class ClientExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return data_model1::all();
    }
}
