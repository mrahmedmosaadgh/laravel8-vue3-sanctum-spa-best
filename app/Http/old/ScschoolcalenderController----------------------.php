<?php

namespace App\Http\Controllers;

use App\Models\scschoolcalender;
use Illuminate\Http\Request;

class ScschoolcalenderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students','students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'age' => 'required|numeric',
            'email' => 'required|email',
        ]);

        $input = $request->all();

        Student::create($input);

        return redirect()->route('students.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\scschoolcalender  $scschoolcalender
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    public function show(scschoolcalender $scschoolcalender)
    {
        $student = Student::findOrFail($id);
        return view('students.show', compact('student','student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\scschoolcalender  $scschoolcalender
     * @return \Illuminate\Http\Response
     */
    // public function edit(scschoolcalender $scschoolcalender)
    // {
    //     //
    // }
    public function edit($id)
    {
        $student = Student::find($id);
        
        return view('students.edit', compact('student','student'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\scschoolcalender  $scschoolcalender
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, scschoolcalender $scschoolcalender)
    // {
    //     //
    // }
    public function update(Request $request, $id)
    {

        $student = Student::findOrFail($id);

        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'age' => 'required|numeric',
            'email' => 'required|email',
        ]);

        $input = $request->all();

        $student->fill($input)->save();

        return redirect()->route('students.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\scschoolcalender  $scschoolcalender
     * @return \Illuminate\Http\Response
     */
    // public function destroy(scschoolcalender $scschoolcalender)
    // {
    //     //
    // }
    public function destroy($id)
    {
        $student = Student::findOrFail($id);

        $student->delete();
        
        return redirect()->route('students.index');
    }
}
