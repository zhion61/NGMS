<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SubjectStrand;

class SubjectStrandsController extends Controller
{
    public function index()
    {
    	$subjectstrands = SubjectStrand::all();
    	return view('subjectstrands.index')->with('subjectstrands', $subjectstrands);
    }
    
    public function create()
    {
    	return view('subjectstrands.create');
    }

    public function store()
    {
        request()->validate([
            'subject_id' => 'required',
            'strand_id' => 'required',
            'semester' => 'required',
            'grade_level' => 'required'
        ]);
        
    	$subjectstrand = new SubjectStrand;
    	$subjectstrand->subject_id = request()->subject_id;
    	$subjectstrand->strand_id = request()->strand_id;
        $subjectstrand->semester = request()->semester;
        $subjectstrand->grade_level = request()->grade_level;
    	$subjectstrand->save();

    	return redirect('/subjectstrands');
    }
}
