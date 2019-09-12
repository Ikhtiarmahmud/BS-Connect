<?php

namespace App\Imports;

use App\Contact;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;


class ContactsImport implements ToModel, WithStartRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */

    public function startRow(): int
    {
        return 2;
    }

    public function model(array $row)
    {
        return new Contact([
            'name'        => $row[0],
            'designation' => $row[1],
            'email' => $row[2],
            'phone' => $row[3],
        ]);
    }
}
