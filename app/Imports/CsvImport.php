<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class CsvImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $data)
    {
        return $data; //add this line
    }
}
