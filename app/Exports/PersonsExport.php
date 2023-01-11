<?php

namespace App\Exports;

use App\Models\Export;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;



class PersonsExport implements FromQuery
{
    use Exportable;

    public function __construct(string $code)
    {
        $this->code = $code;
    }

    public function query()
    {

        if ($this->code == "visi") {
            return Export::query()->whereNot('position_code', null);
        } else {
            return Export::query()->where('position_code', $this->code);
        }
    }
}