<?php

namespace App\Http\Controllers;
use App\Models\Form;
use App\Models\Department;
use Illuminate\Http\Request;

class ListFormController extends Controller
{
    public function index() 
    {
        $forms = Form::all();
        $departs = Department::all();
        return view('index', ['forms' => $forms], ['departs' => $departs]);
    }
}
