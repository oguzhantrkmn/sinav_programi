<?php

namespace App\Http\Controllers;


use App\Models\Unit;
use App\Models\Role;

class SelectionController extends Controller
{
    /**
     * Show the selection view with units and roles.
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        // Retrieve all units and roles from the database
        $units = Unit::all();
        $roles = Role::all();

        // Pass the data to the 'auth.selection' view
        return view('auth.selection', compact('units', 'roles'));
    }
}
