<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Models\Role;

class SelectionController extends Controller
{
    public function showSelectionForm()
    {
        $units = Unit::all();
        $roles = Role::all();
        return view('auth.login', compact('units', 'roles'));
    }
}
