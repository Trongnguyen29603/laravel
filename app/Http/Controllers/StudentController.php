<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{
    public function index(Request $request){
        $title = "hehe";
        $name = "trong";
        //khi nào là get và khi nào là post
        //khi tồn tại là post
        $students = DB::table('students')
        ->select('id','name','image')// lấy theo những từng mong muốn 
        ->whereNull('deleted_at')
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
            $params = $request->except('_token');
            //nếu như tồn tại file post lên
            if($request->hasFile('image') && $request->file('image')->isValid()){
                $params['image']= uploadFile('hinh',$request->file('image'));
            }
            $students = Student::create($params);
            // $students = Student::create($request->except('_token'));
            if($students->id){
                Session::flash('success','theem moi thanh cong');
                return redirect()->route('route_student_add');
            }
        }
        return view('student.add');

    }
    
    public function edit(StudentRequest $request,$id){
         //c1 DB:query
            //  $student = DB::table('students')
            //  ->where('id','=',$id)
            //  ->first();
            //c2 dung model
            $student = Student::find($id);
            if($request->isMethod('POST')){
                $params = $request->except('_token');
                if($request->hasFile('image') && $request->file('image')->isValid()){
                    //xóa ảnh cũ
                    $resultDL= Storage::delete('/public'.$student->image);
                    if($resultDL){
                        $params['image']= uploadFile('hinh',$request->file('image'));
                    }
                }else{
                    $params['image'] = $student->image;
                }
                Student::where('id',$id)
                ->update($params);
                if($request){
                    Session::flash('success','sua thanh cong sv');
                    return redirect()->route('route_student_edit',['id'=>$id]);
                }
            }
            // dd($student);
            return view('student.edit',compact('student'));
        }
    public function delete($id){
    Student::where('id',$id)->delete();
    Session::flash('success','xóa thanh cong sv'.$id);
    return redirect()->route('route_student_index');
    }     
}
