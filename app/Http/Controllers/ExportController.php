<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Export;
use App\Models\Position;
use App\Exports\PersonsExport;

class ExportController extends Controller
{
    public function getAll()
    {
        return view('report-page', [
            'persons' => Export::all(), 'positions' => Position::all()
        ]);
    }

    public function export(Request $request)
    {
        return (new PersonsExport($request->report))->download($request->report . '_ataskaita.xlsx');
    }
}