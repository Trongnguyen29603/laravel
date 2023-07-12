<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class StudentController extends Controller
{
    public function index(Request $request){
        $title = "hehe";
        $name = "trong";
        //khi nào là get và khi nào là post
        //khi tồn tại là post
        $students = DB::table('students')
        ->select('id','name')// lấy theo những từng mong muốn 
        ->get();
        if($request->post() && $request->email){
            $students = DB::table('students')
            ->select('id','name')// lấy theo những từng mong muốn 
            ->where('email','like','%'.$request->email.'%')
            ->get();
        } 

        //laays toanf bộ dữ liệu của bảng student 
        // $students = DB::table('students')
        // ->select('id','name')// lấy theo những từng mong muốn 
        // ->get(); // bằng câu truy vấn select * from 
        // $studentCondition = DB::table('students')
        // ->where('id','>=', 80)
        // ->where('id','<=',90)
        // ->orWhere('email','=','trongnvph4022086@gmail.com')
        // //orwhere là hoặc
        // //where là và
        // ->get();    
        // $studentfirst = DB::table('students')->where('id','=',100)->first();
        // dd($studentfirst);
    //   return view('student.index',compact('title','name','students'));
    return view('student.index',compact('title','name','students'));
    }
    public function add(StudentRequest $request){
        //nếu như tồn lại request post ( khi người dùng bấm nút là post)
        if($request->post()){
           
        }
        return view('student.add');

    }
}
