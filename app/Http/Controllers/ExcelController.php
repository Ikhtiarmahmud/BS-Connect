<?php

namespace App\Http\Controllers;


use Illuminate\Support\Arr;
use App\Imports\ContactsImport;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Session;

class ExcelController extends Controller
{
    public function importContact()
    {
        $data = Excel::toArray(new ContactsImport, request()->file('file'));
        collect(head($data))
            ->each(function ($row) {
                DB::table('contacts')
                    ->where('phone', $row['phone'])
                    ->updateOrInsert(Arr::except($row, ['id']));
            });
        Session::flash('message', "Imported Successfully!");
        return back();
    }
}
