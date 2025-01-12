<?php

namespace App\Http\Controllers;
use App\Models\Classes;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $students = Student::with('classes')->paginate(5);
        return view('index' ,compact('students'));
        // $classname = classes::pluck('class_name');
        // print_r($classname);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $classes = classes::get();
        return view('create', compact('classes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'first_name' => 'required|string|max:255', 
            'last_name' => 'required|string|max:255', 
            'email' => 'nullable|email', 
            'student_number' => 'required|numeric|digits_between:0,100000',
            'class_id'=>'required|exists:classes,id',
            'status'=> 'required|in:Trial,Enrolled,Dropped',
            'date_of_birth'=> 'required|date'
            
        ]);

        Student::create($request->all());
        return redirect()->route('index')->with('success','Sinh vien đã được tao  thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $student = Student::findorFail($id);
        $classes = classes::all();
        // echo($issue);
        return view('edit',compact('student','classes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        
        $request->validate([
            'first_name' => 'required|string|max:255', 
            'last_name' => 'required|string|max:255', 
            'email' => 'nullable|email', 
            'student_number' => 'required|numeric|digits_between:0,100000',
            'class_id'=>'required|exists:classes,id',
            'status'=> 'required|in:Trial,Enrolled,Dropped',
            'date_of_birth'=> 'required|date'
        ]);
        $student = Student::findorFail($id);
        $student->update($request->all());
        return redirect()->route('index')->with('success','SInh vien thu '.$id.' đã được cap nhap lai  thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $student = Student::findOrFail($id);
        $student->delete();
        return redirect()->route('index')->with('success','Xoa thanh cong SInh vien thu '.$id);
    }
}
