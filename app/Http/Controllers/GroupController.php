<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function create()
    {
        return view('groups.create');
    }

    public function store(Request $request)
    {

    }
}
