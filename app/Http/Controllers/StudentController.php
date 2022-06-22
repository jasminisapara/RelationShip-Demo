<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\Result;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();

        //One To One Relationship
        // $student = Student::find(7);
        // $student = Student::with('result')->get();
        // dd($student[1]->result);
        // dd($student);

        //using inverse belongsTo()
        // $result = Result::get();
        // dd($result[0]->student);

        //One To Many Relationship
        // $student = Student::find(3);
        // dd($student->result);

        //hasMany Relationship
        // $student = Student::all();

        //isdirty() & isclean() method
        // $student = Student::create([
        //     'name' => 'parth    ',
        //     'email' => 'parth@gmail.com',
        //     'phone' => '9897987878',
        // ]);

        // // $student->name = 'fsdfs';
        // // echo $student->isDirty();
        // echo $student->isclean();
        // dd($student);


        // $student = Student::where('name','Jasmin D.Isapara')->count();
        // $student = Student::min('id');
        // $student = Student::max('id');
        // $student = Student::sum('id');
        // $student = Student::avg('id');
        // dd($student);

        // $students = Result::addSelect(['Student_name' => Student::select('name')
        //     ->whereColumn('student_id','students.id')
        // ])->get();
        // dd($students);
        // exit();

        //firstOrCreate method->jo attibutes mil jayenga to uska data return krenge warna wo new create krenge data
        // $student = Student::firstOrCreate([
        //     'name' => 'Jasmin D.Isapara'],
        //     [ 'email' =>'jatin@gmail.com',
        //      'phone' => '7878252525'
        // ]);
        // dd($student);



        //chunk method
        // $students = Student::chunk(1,function ($students)
        // {
        //     foreach ($students as $student)
        //     {
        //         echo $student;
        //     }
        //     echo '<br><br>';
        // });

        // //cursor method
        // foreach (Student::where('id','<','4')->cursor() as $student)
        // {
        //     echo $student;
        // }

        // exit();

        // $students = Student::find(4);//pass the id
        // $students = Student::where('name','jasmin')->first();
        // $students = Student::firstWhere('name','vipul');
        // dd($students);
        // $students = Student::Where('name','jasmin')->get();

        return view('students',compact('students'));
    }

    public function add()
    {
        return view('studentAdd');
    }

    public function store(Request $request)
    {
        //use Create Method
        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
        );
        Student::create($data);


        // $student =new Student;
        // $student->name = $request->name;
        // $student->email = $request->email;
        // $student->phone = $request->phone;
        // $student->save();
        return redirect()->route('student.add');
    }

    public function delete(Request $request)
    {
        $id = $request->id;
        $students = Student::find($id)->delete();
        // $students = Student::destroy($id);
        return redirect()->route('student.show');
    }

    public function edit(Request $request)
    {
        $id = $request->id;
        $student = Student::find($id);
        // $student = Student::findOrFail($id); //show page not found to change the id in url
        // $student = Student::where('id',$id)->firstOrFail(); //both are work same but syntax is different

        return view('studentEdit',['student' => $student]);
    }

    public function update(Request $request)
    {
        $id = $request->id;
        //using save method
        // $student = Student::find($id);
        // $student->name = $request->name;
        // $student->email = $request->email;
        // $student->phone = $request->phone;
        // $student->save();

        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
        );

        Student::where('id',$id)->update($data);
        return redirect()->route('student.show');
    }
}
