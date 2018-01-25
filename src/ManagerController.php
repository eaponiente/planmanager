<?php

namespace Edgar\PlanManager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ManagerController extends Controller
{
    public function index()
    {
        $companies = Company::withCount('employees')->get();

        return view('planmanager::index', compact('companies'));
    }

    public function download()
    {
        $employees = Employee::all();

        $result = [
            ['Employee Name', 'Employee ID', 'Company Name', 'Company ID', 'Created At']
        ];

        foreach ($employees as $employee) {
            $result[] = [
                $employee->name,
                $employee->id,
                $employee->company->name,
                $employee->company->id,
                $employee->created_at->toDateString()
            ];
        }

        Excel::create('test', function($excel) use($result){
            $excel->sheet('Employees List', function($sheet) use($result) {
                $sheet->fromArray($result, null, 'A1', null, false);

            });
        })->export('csv');

    }
}
