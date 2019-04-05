<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Newsletter;
class GrabList extends Controller
{
    public function grab(){
    $memb = Newsletter::getMembers();
        //echo $memb;
       // dd($memb);

       $memb = $memb['members'];
      // $strFromArr = serialize($memb);


        //return $strFromArr;
//return $memb;

$data = array (
    'json' => $memb
    );

    //dd($data);
    return view('grab', ['name' => $memb]);

}
}
