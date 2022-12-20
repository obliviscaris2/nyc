<?php

namespace App\Exports;

use App\Models\ExecutiveDetail;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExecutiveDetailExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return ExecutiveDetail::all();
    }
}
