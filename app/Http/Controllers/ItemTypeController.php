<?php

namespace App\Http\Controllers;

use App\ItemType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class ItemTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ItemType::paginate(5);
        // return $data;
        //Officer/typeitem

        return view('Officer.typeitem', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = new ItemType;
        $action = URL::route('itemtype.store');

        return view('Officer.addtypeitem')->with(compact('data', 'action'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new ItemType();
        $data->fill($request->all());
        $save = $data->save();
        if ($data) {
            return redirect('typeitem')->with('success', 'Type Name Save Success!');
        } else {
            return redirect('typeitem')->with('error', 'Type Name Error Save!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = ItemType::find($id);
        return view('Officer.edittypeitem', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $data = ItemType::where('id', '=', $id)
        //     ->update($request->all());
        // return $data;

        $data = ItemType::find($id);
        $data->type_name =  $request->get('type_name');
        $data->save();
        if ($data) {
            return redirect('typeitem')->with('success', 'Edit Success!');
        } else {
            return redirect('typeitem')->with('error', 'Error Edit!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data =  ItemType::where('id', '=', $id)->delete();
        if ($data) {
            return redirect('typeitem')->with('success', 'Type Item deleted!');;
        } else {
            return "error";
        }
    }
}
