<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExcelController extends Controller
{
     public function ExportExcel()
    {
        $export = User::select('name', 'email', 'address', 'phone_number', 'gender')->get()->toArray();
        Excel::Create('Export User', function($excel) use($export)
        {
            $excel ->sheet('Excel sheet', function($sheet) use($export)
            {
                $sheet ->setOrientation('landscape');
            });
        })->export('xlsx');
    }
}
