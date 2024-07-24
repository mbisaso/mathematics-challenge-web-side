<?php

namespace App\Imports;

use App\Models\Questions;
use Maatwebsite\Excel\Concerns\ToModel;

class QuestionsImport implements ToModel
{
    public function model(array $row)
    {
        return new Questions([
            'name' => $row[0],
            'representativesid' => $row[1],
            'emailaddress' => $row[2],
            'schoolregistrationnumber' => $row[3],
        ]);
    }
}


