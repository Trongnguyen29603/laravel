<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
class StudentController extends Controller
{
    public function student(Request $request){
      // return response()->json([[
      //   'name'=>'nguyễn viết trọng',
      //   'age'=>20
      // ],[
      //   'name'=>'nguyễn viết trọng',
      //   'age'=>20
      // ]]);
      // $dataStusent = [
      //   [
      //     'name'=>'nguyễn viết trọng',
      //     'age'=>20
      //   ],[
      //     'name'=>'nguyễn viết trọng',
      //     'age'=>20
      //   ]
      // ];
      // api truyền vào và param để seach theo ten
      // dd($request->all());
      
      // $dataStusent = Student::all();
      //viết truy vấn api seach gần đúng theo tên 
        
      // $dataStudent = Student::where('name','LIKE','%'.$request->name.'%')->get();
      //validator request api
      //statux laf 1 dangj chuaanr chung quy dinh giua fronend vaf backend
      // $validator = Validator::make($request->all(),[
      //   'name'=>'required',
      //   // 'email'=>'required',
      // ]);
      // if($validator->fails()){
      //        return response()->json([
      //                     //  'status'=>'fails',
      //                      'errors'=>$validator->errors()->toArray()
      //                     ],400);
      //       }
      //       $dataStudent = Student::where('name','LIKE','%'.$request->name.'%')->get();
      // return response()->json([
      //   // 'status'=>'success',
      //   'student'=>$dataStudent
      // ],200);
      //viết api nếu tồn tại hiển thị danh sách sinh viên theo limit offset(limit offset bắt buộc phải có param)
      //nếu tồn tịa param name thì sẽ search theo tên. nếu toonft ại param email thì search theoo 
      //param email nếu vừa tồn tại param name và vừa tồn tại param email thifd sẽ search theo cả 2
      //nếu o tồn tại param nào thì chỉ lấy dfanh sách sinh viên thoe limit và offset
      //  $student = DB::table('Student')
      //  ->limit(10)
      //  ->offset(5)
      //  ->where('name','LIKE','%'.$request->name.'%')
      //  ->orderBy('emlai','LIKE','%'.$request->email.'%')
      //  ->get();
      //  return response()->json($student,200);

}
}
