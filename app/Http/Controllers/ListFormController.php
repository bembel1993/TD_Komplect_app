<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Department;
use Illuminate\Http\Request;

class ListFormController extends Controller
{
    public function index()
    {

        $employees = Employee::all();
        
        return view('index', ['employees' => $employees]);

      /*  $departments = Department::with('forms')->get();
        foreach ($departments as $department) {
            $forms = $department->forms;
            foreach ($forms as $form) {
            }*/
          //  $companys = $department->company;
            //foreach ($companys as $comp){
           // }
           
        //}

        // $posts = Form::table('forms')->where('department_id', 1)->get();
        //  $forms = Department::find(1);
        //$posts = $forms->posts;

        // $department = Department::find(2);
        // $forms = $department->forms;

        //$departs = Department::all();
        // return view('index', ['forms' => $forms], ['departs' => $departments]);
       // $departments = Department::with('forms')->get();

       // return view('index', ['departments' => $departments], ['forms' => $forms]);
    }

    public function showeditform(){
      return view('reg.editform');
    }

}
