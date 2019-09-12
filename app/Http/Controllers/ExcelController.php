<?php

namespace App\Http\Controllers;


use Illuminate\Support\Arr;
use App\Imports\ContactsImport;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
{
    public function importContact()
    {
        Excel::import(new ContactsImport, request()->file('file'));

        //  return collect(head($data))
        //         ->each(function ($row, $key) {
        //          DB::table('contacts')
        //         ->where('email', $row[3])
        //         ->update(Arr::except($row, [3]));
        // });

        return back();
    }
}
