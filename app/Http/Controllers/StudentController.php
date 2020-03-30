<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public $id;
    public $Name;
    public $Email;
    public function __constructor($id,$Name,$Email){
        $this->id = $id;
        $this->Name = $Name;
        $this->Email = $Email;
    }
    public function update($id,$Name,$Email){
        $this->id = $id;
        $this->Name = $Name;
        $this->Email = $Email;
    }
    public function delete(){
        $this->id = null;
        $this->Name = null;
        $this->Email = null;
    }
}

