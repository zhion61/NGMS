<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
use App\Section;

class TeachersController extends Controller
{
    public function index()
    {
    	$teachers = Teacher::all();
    	return view('teachers.index')->with('teachers', $teachers);
    }
    
    public function create()
    {
        $sections = Section::all();
    	return view('teachers.create', compact('sections'));
    }

    public function store()
    {
        request()->validate([
            'name' => 'required',
            'advisory_section' => 'required'
        ]);
        
    	$teacher = new Teacher;
    	$teacher->name = request()->name;
    	$teacher->advisory_section = request()->advisory_section;
    	$teacher->save();

    	return redirect('/teachers');
    }
    public function edit(Teacher $teacher)
    {
        dd($teacher);
        // $sections = Section::all();
        // return view('teachers.edit', compact('sections'));
    }
}
