<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

}
class user extends Controller
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
