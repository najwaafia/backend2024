<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function update (Request $request, $id) {
        $student = Student::find($id);
        if ($student) {
            $input = [ 
                'nama' => $request->nama ?? $student->nama,
                'nim' => $request->nim ?? $student->nim,
                'email' => $request->email ?? $student-> email,
                'jurusan' => $request->jurusan ?? $student->jurunsan
            ];
            //update data
            $student->update($input);
            $data = [
                'message'=> 'Updated sucessfully',
                'data'=> $student
            ];
        }

        //delete
        if ($student) {
            $student->delete();

            $data = [
                'message' => 'deleted',
            ];

            return response()->json($data, 404);
        }
    }

    public function show($id)
    {
        $student = Student::find($id);
        if ($student) {
            $data = [
                'message' => 'Get data student',
                'data' => $student,
            ];

            return response()->json($data, 200);
        }
    }
    
}

