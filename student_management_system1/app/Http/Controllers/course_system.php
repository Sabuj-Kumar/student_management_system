<?php

namespace App\Http\Controllers;

use App\course_registration;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class course_system extends Controller
{

      public function course_registration(){

          return view('course_registration');
      }
      public function student_list(){

          return view('student_list');
      }
      function course_insert(Request $cou){

          $name = $cou->input('Student_name');
          $id = $cou->input('Student_ID');
          $sem = $cou->input('Semester');
          $eml = $cou->input('Email_ID');
          $dpmt = $cou->input('Department_Name');
          $c1 = $cou->input('Course1');
          $c2 = $cou->input('Course2');
          $c3 = $cou->input('Course3');
          $c4 = $cou->input('Course4');
          $c5 = $cou->input('Course5');

          $course_data = array('Student_name' => $name,"Student_ID" => $id,"Semester" => $sem,"Email_ID" => $eml,"Department_Name" => $dpmt,"Course1" => $c1,"Course2" => $c2,"Course3" => $c3,"Course4" => $c4,"Course5" => $c5);
          DB::table('course_registrations')->insert($course_data);

          echo "Course Registration Successfull<br/>";
          echo '<center> <a href = "course_registration"> Back To The Page </a></center>';
      }
      function getcourse(){

            $getcourse = DB::select('select * from course_registrations');

            if(count($getcourse) > 0){

                  return view('Student_List')->with('gets',$getcourse);
            }
            else{

              echo "Registration Empty";
              echo '<center> <a href = "course_registration"> Click Here </a></center>';
            }
      }
}
