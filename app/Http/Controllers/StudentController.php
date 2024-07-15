<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Str;

class StudentController extends Controller
{

    public function index()
    {
        //nama_database
        $student = Student::all();
        return view('student.index')->with('student', $student);
    }


    public function create()
    {
        return view('student.create');
    }

    // 
    public function store(Request $request)
    {
        //inisial aja
        $input = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'mobile' => 'required'
        ]);

        $input['address'] = (strip_tags($request->address));

        Student::create($input);

        return redirect('/student')->with('success', 'success CRUD!!');
    }




    public function show($id)
    {
        $student = Student::find($id);
        return view('student.show')->with('students', $student);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);
        return view('student.edit')->with('students', $student);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $student = Student::find($id);
        $input = $request->all();
        $student->update($input);

        return redirect('/student')->with('success', 'success updated');
    }


    public function destroy($id)
    {
        Student::destroy($id);
        return redirect('student')->with('success', 'Success Deleted Data!!');
    }
}
