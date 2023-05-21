<?php

namespace App\Http\Controllers;

use App\Models\Department;
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
        $deps = Department::all();
        return view('reg.form', ['deps' => $deps]);
    }
}
