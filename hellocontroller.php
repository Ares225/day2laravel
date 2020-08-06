<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Hellocontroller extends Controller {
  public function index(){
    $subjects = ['Maths','Physics','Chemistry'];
    $marks=[50,40,30];
    //return view('hello')->with(['mysub'=>$subjects,'marks'=>$marks]);    another method
    return view('hello')->withmysub($subjects)->withmarks($marks);
  }

}

?>