<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Section;

class SectionsController extends Controller
{
    public function index()
    {
    	$sections = Section::all();
    	return view('sections.index')->with('sections', $sections);
    }
    
    public function create()
    {
    	return view('sections.create');
    }

    public function store()
    {
        request()->validate([
            'name' => 'required',
            'active' => 'required'
        ]);
        
    	$section = new Section;
    	$section->name = request()->name;
    	$section->active = request()->active;
    	$section->save();

    	return redirect('/sections');
    }
}
