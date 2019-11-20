<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Borrower;
use App\User;

class BorrowerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Borrower::get();
        return view('Officer/borrowermange',[
            'users' => $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {    $id = $_GET['id'];
        $type = $_GET['type'];
        if($type == 'edit'){
            $user = $this->show($id);
            return view('Officer/management',['user'=>$user]); 
        }else if($type == 'login'){
            $user = $this->show($id);
            return view('Officer/management',['user'=>$user]);
        }else{
            \DB::table('borrower')->where('user_id', $id)->delete();
            \DB::table('users')->where('id',$id)->delete();
            return $this->index();
        }
    }


    public function core(Request $request)
    {
        $type = $_GET['type'];
        if($type == 'edit'){
            $users = Borrower::find($request->id);
            $users->fill($request->all());
            $users->save();
            return back()->withInput();
        }else if($type == 'create'){
             $user = [
                'name' =>$request->brw_firstname ,
                'email' => date("dmyhis"),
                'password' => date("dmyhis").'1234' ,
                'type' =>  2,
             ];

             $user_id =  User::insertGetId($user);
             $form = $request->all();
             $form['user_id']= $user_id;
             $users = new Borrower();
             $users->fill($form);
             $users->save();
             $data = Borrower::get();
             return view('Officer/borrowermange',[
                 'users' => $data,
                 'login' => $user
             ]);
        } else{

        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = Borrower::find($id);
        return $users;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        echo  $request->id;
        return $request->id;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
