<?php
namespace App\Http\Controllers;
use App\Exports\LovewordExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class ExcelController extends Controller
{
	public function export() 
    {
        return Excel::download(new LovewordExport, 'loveword.xlsx');
    }
}