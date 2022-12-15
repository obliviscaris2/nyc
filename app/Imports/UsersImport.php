<?php

namespace App\Imports;

use App\Models\CommitteeDetail;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new CommitteeDetail([
            'district'     => $row[0],
            'name'    => $row[1],
            'address' => $row[2],
            'phone' => $row[3]
        ]);
    }
}
