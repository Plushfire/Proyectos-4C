<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index(Request $request){
        //$students = Student::all();
      
        $students = Student::with('group','general_data')->get(); 

        return([
            "data" => $students
        ]);
    }
    public function show(Request $request){
        $student = Student::where('serial_number','=',$request['serial_number'])->get();

        return collect([
            "status" => 1,
            "title" => "show student",
            "data" => $student
        ]);
    }
    public function store(Request $request){
        $student = Student::create([
            "serial_number" => $request['serial_number'],
            "mail" => $request['mail'],
            "group_id" =>$request['group_id'],
            "general_data_id"=>$request['general_data_id'],
        ]);
        return Collect([
            "status" => 1,
            "title" => "create_student",
            "data" => $student,
        ]);
    }
    public function destroy(Request $request){
        $data = Student::where('serial_number','=',$request['serial_number']) -> delete();
        return Collect(
            [
                "status" => 1,
                "title" => "delete_student",
                "data" => $data
            ]
            );
    }

    public function update(Request $request){
        
    }
}

?>