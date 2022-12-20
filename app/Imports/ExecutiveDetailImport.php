<?php

namespace App\Imports;

use App\Models\ExecutiveDetail;
use Maatwebsite\Excel\Concerns\ToModel;

class ExecutiveDetailImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new ExecutiveDetail([
            'name' => $row[0],
            'image' => $row[1],
            'phone' => $row[2],
            'email' => $row[3],
            'position' => $row[4],
        ]);
    }
}
