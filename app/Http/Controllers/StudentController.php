<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
// import for didactical use
use Illuminate\validation\Rule;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $request->validate($this->validationRules());

        $data = $request->all();

        $newStudent = new Student();
        $newStudent->surname= $data['surname'];
        $newStudent->name = $data['name'];
        $newStudent->class = $data['class'];
        $newStudent->gender = $data['gender'];
        $newStudent->birth_year = $data['birth_year'];
        $saved = $newStudent ->save();

        if ($saved){
            $idStudentNew = Student::find($newStudent->id);
            return redirect()->route('students.show', $idStudentNew)->with('created', true);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //$students = Student::find('$id'); dietro le quinte
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $data = $request->all();
        $request->validate($this->validationRules());
        $updated = $student->update($data);

        if ($updated) {
            return redirect()->route('students.show', $student)->with('updated', true); //anche $student->id
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $ref = [$student->surname, $student->name];
        $deleted = $student->delete();

        if ($deleted) {
            return redirect()->route('home')->with('deleted', $ref);
        }
    }

    //custom validation method
    private function validationRules() {

        return [
            'surname' => 'required',
            'name' => 'required',
            'gender' => 'required|in:m,f,M,F',
            'birth_year' => 'required|gt:1900|before_or_equal:'.(date('Y')-13),
        ];
    }

    /*
    private function validationRules($id = null)
    return[
            'name' => [
                'required,
                'max:20'
                Rule::unique('classrooms')->ignore('$id)
            ],
            'description'=>'required'
        ];

    */
}
