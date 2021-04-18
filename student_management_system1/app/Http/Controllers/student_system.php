<?php

namespace App\Http\Controllers;

use App\student_registration;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class student_system extends Controller
{

    public function Show_Student_List(){

        return view('Show_Student_List');
    }

    public function student_registration(){

        return view('student_registration');
    }

   function insert(Request $req){

        $fm = $req->input('First_Name');
        $lm = $req->input('Last_Name');
        $ct = $req->input('City');
        $div = $req->input('Division');
        $cnty = $req->input('County');
        $gdr = $req->input('Gender');
        $phn = $req->input('Phone_Number');
        $bth = $req->input('Birth_Date');
        $dmnt = $req->input('Department_Name');

        $data = array('First_Name' => $fm ,"Last_Name" => $lm,"City" => $ct,"Division" => $div,"County" => $cnty,"Gender" => $gdr,"Phone_Number" =>$phn,"Birth_Date" => $bth,"Department_Name" => $dmnt);
        DB::table('student_registrations')->insert($data);

        echo "Registration Successfull<br/>";
        echo '<center> <a href = "student_registration"> New One Please</a></center>';
    }
    function getdata(){


        $getdatas = DB::select('select * from student_registrations');

        if(count($getdatas) > 0){

              return view('Show_Student_List')->with('gets',$getdatas);
        }
        else {

                echo "No One Here";
                echo '<center> <a href = "student_registration"> Click Here </a></center>';
        }
    }
}
