<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\Department;
use Illuminate\Http\Request;

class ListFormController extends Controller
{
    public function index()
    {
       /* $departments = Department::with('forms')->get();
        foreach ($departments as $department) {
            $forms = $department->forms;
            foreach ($forms as $form) {
            }
        }*/


        // $posts = Form::table('forms')->where('department_id', 1)->get();
        //  $forms = Department::find(1);
        //$posts = $forms->posts;

        // $department = Department::find(2);
        // $forms = $department->forms;

        //$posts = Form::all();
        //$departs = Department::all();
        // return view('index', ['forms' => $forms], ['departs' => $departments]);
        $departments = Department::with('forms')->get();

        return view('index', ['departments' => $departments]);
    }
}
