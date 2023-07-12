<?php

namespace Database\Seeders;

use App\Models\Catregory;
use App\Models\Student;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(
            [StudentSeeder::class],
            [CatregorySeeder::class],
            [ProductSeeder::class]
    );
       //đây để tại dữ liệu mẫu 
    //    $students=[
        // "name" => "nguyễn viết trọng",
        // "email" => "trongnvph22086@gmail.com",
        // "address" =>"hà nội",
        // "date_of_birth" => "2003-06-29" ,
        // "created_at"=> date('Y-m-d H:i:s'),
        // "updated_at"=> date('Y-m-d H:i:s'),
    //    ];
    //    for($i=1;$i<=50;$i++){
    //     $students[] = [
    //         "name" => "nguyễn viết trọng",
    //         "email" => "trongnvph".$i."22086@gmail.com",
    //         "address" =>"hà nội",
    //         "date_of_birth" => "19$i-06-29",
    //         "created_at"=> date('Y-m-d H:i:s'),
    //         "updated_at"=> date('Y-m-d H:i:s'),
    //     ];
    //    }
    //    DB::table('students')->insert($students);
   
    }
}
