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
    }

    public function showeditform(){
      return view('reg.editform');
    }

    public function showallform(){
      return view('reg.seeform');
    }

    public function createdform(){
      return view('reg.seeform');
    }
}
