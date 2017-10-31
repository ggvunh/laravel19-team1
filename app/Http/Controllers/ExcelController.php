<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\User;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
{
    public function export()
    {
    	return view("export");
    }

    public function exportUsers()
    {
    	$users=User::get();
		Excel::create('UsersExcel', function($excel) use($users) {
		    $excel->sheet('Sheetnamechung', function($sheet) use($users) {
		        $sheet->fromArray($users);
		    });
		    $excel->setTitle('Our new awesome title');
		    $excel->setCreator('Maatwebsite')
		          ->setCompany('Maatwebsite');
		    $excel->setDescription('A demonstration to change the file properties');
		})->export('xls');

    }

    public function exportOrders()
    {
    	$orders=Order::orderBy('created_at', 'dec')->get();
    	Excel::create('OrdersExcel', function($excel) use($orders) {
		    $excel->sheet('Sheetnamechung', function($sheet) use($orders) {
		        $sheet->fromArray($orders);
		    });
		    $excel->setTitle('Our new awesome title');
		    $excel->setCreator('Maatwebsite')
		          ->setCompany('Maatwebsite');
		    $excel->setDescription('A demonstration to change the file properties');
		})->export('xls');
    }
}
