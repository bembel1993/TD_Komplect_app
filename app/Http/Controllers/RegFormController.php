<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Company;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Http\Request;

class RegFormController extends Controller
{
    /**
     * Display form page.
     * 
     * @return Renderable
     */
    public function show()
    {

        $companies = Company::all();
        $departments = Department::all();
        return view('reg.form', compact('companies', 'departments'));

        /* $departments = Department::with('companies')->get();
        foreach ($departments as $department) {
            $companys = $department->companies;
            foreach ($companys as $company) {
            }
        }
        return view('reg.form', ['departments' => $departments], ['companys' => $companys]);*/
        // $deps = Department::all();
        // return view('reg.form', ['deps' => $deps]);
    }

    public function registration(Request $request)
    {
        $formData = new Employee();
        $formData->lastname = $request->input('last_name');
        $formData->firstname = $request->input('first_name');
        $formData->patronymic = $request->input('patronymic');
        $formData->company = $request->input('company');
        $formData->department = $request->input('department');
        $formData->save();

        return redirect()->back()->with('success', 'Form data added successfully!');
    }
}
