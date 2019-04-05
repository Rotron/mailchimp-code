<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Newsletter;


class PostController extends Controller
{
    /**
     * Show the form to create a new blog post.
     *
     * @return Response
     */
    public function create()
    {
      return view('post.create');
    //  Newsletter::unsubscribe('f.sacca@articleagency.uk');



    }

    /**
     * Store a new blog post.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|unique:users',
            //'code' => 'required|doorman',
        ]);



        try {
                $suca = \Doorman::generate()->for(request()->get('email'))->make();
            }
                catch (\Exception $e) {

                return $e->getMessage();


            }


                $code = $suca[0]->code;
                Newsletter::subscribeOrUpdate(request()->get('email'), ['FNAME'=>'Foo', 'LNAME'=>'Bar', 'CODE'=>$code]);

/*
        try {
            \Doorman::redeem(request()->get('code'), request()->get('email'));
        } catch (DoormanException $e) {
            return response()->json(['error' => $e->getMessage()], 422);
        }
*/
        // Add the user to the database.
        return view('post.done');
    }
}
