<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class StudentController extends Controller
{
    public $id;
    public $Name;
    public $Email;
    public function __constructor($id,$Name,$Email){
        $this->id = $id;
        $this->Name = $Name;
        $this->Email = $Email;
        DB::table('students')->insert([
            'Name' => $this->Name,
            'Email' => $this->Email
            ]);
    }
    public function update($id,$Name,$Email){
        $this->id = $id;
        $this->Name = $Name;
        $this->Email = $Email;
        DB::table('students')->where('id', $this->id)
        ->update([
            'Name' => $this->Name,
            'Email' => $this->Email
            ]);
    }
    public function delete(){
        $this->id = null;
        $this->Name = null;
        $this->Email = null;
        DB::table('students')->where('id', '=', $this->id)->delete();
    }
    public function get_student($id){
        $user = DB::table('students')->whereid($id);
        $this->id = $user->id;
        $this->Name = $user->Name;
        $this->Email = $user->Email;
    }

}

