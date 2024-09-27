<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $student = Student::all();
        return view('students.index', compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    //cre
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
            'firstName' => 'required|string|min:3',
            'lastName' =>  'required|string|min:3',
            'address' => 'required',
            'email' => 'required |email|unique:students',
            'message' => 'required|min:5'

        ]);
        try {
            Student::create([
                'firstName' => $request->firstName,
                'lastName' => $request->lastName,
                'address' => $request->address,
                'email' => $request->email,
                'message' => $request->message,
            ]);

            return redirect()->route('student.index')->with('success', 'Student created successfully!');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }



    /**
     * Display the specified resource. v
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */

    public function show(Student $student)
    {
        return response()->json($student);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        // $student=Student::find($id);
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage. 
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
   
        try {
            $student->update([
                'firstName' => $request->firstName,
                'lastName' => $request->lastName,
                'address' => $request->address,
                'email' => $request->email,
                'message' => $request->message,
            ]);
            //   return redirect()->route('student.index')->with('success', 'Successfully Updated!');

            return redirect()->route('student.index')->with('success', 'Data has been Updated successfully!');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
      try{
        $student->delete();
        return redirect()->back()->with('delete', 'Data Successfully Deleted');
      }catch(\Throwable $th){
        return redirect()->back()->with('error', 'Error!');
      }

    }
}
