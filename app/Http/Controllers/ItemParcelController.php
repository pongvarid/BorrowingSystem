<?php

namespace App\Http\Controllers;

use App\Item;
use App\ItemType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class ItemParcelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Item::join('item_type', 'item.type_id', '=', 'item_type.id')
            ->select('item.*',  'item_type.type_name')
            ->paginate(5);
        // return $data;
        // Officer/typeitem

        return view('Officer.itemdata', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = new Item;
        $select = ItemType::get();
        $action = URL::route('itemdata.store');

        return view('Officer.additemdata')->with(compact('data', 'action', 'select'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cover = $request->file('item_img');
        $extension = $cover->getClientOriginalExtension();
        Storage::disk('public')->put($cover->getFilename() . '.' . $extension,  File::get($cover));

        $data = new Item();
        // $data->item_img = $cover->getClientOriginalName();
        $data->item_img = $cover->getFilename() . '.' . $extension;
        $data->fill($request->all());
        $save = $data->save();
        // $data = new Item();
        // $data->fill($request->all());
        // $save = $data->save();
        if ($save) {
            return redirect('itemdata')->with('success', 'Type Name Save Success!');
        } else {
            return redirect('itemdata')->with('error', 'Type Name Error Save!');
        }
        // return view('Officer.itemdata')->with(compact('data'));
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
        $data = Item::find($id);
        $select = ItemType::get();
        return view('Officer.edititemdata', compact('data', 'select'));
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
        $data = Item::where('id', '=', $id);
        $data->item_img =  $request->get('item_img');
        $data->type_id =  $request->get('type_id');
        $data->item_name =  $request->get('item_name');
        $data->item_detail =  $request->get('item_detail');
        $data->item_number =  $request->get('item_number');
        $data->item_remain =  $request->get('item_remain');
        // $data->save();
        $data->update(
            [
                'item_img' => $data->item_img,
                'type_id' => $data->type_id,
                'item_name' => $data->item_name,
                'item_number' => $data->item_number,
                'item_remain' => $data->item_remain,
                'item_detail' => $data->item_detail
            ]
        );
        if ($data) {
            return redirect('itemdata')->with('success', 'Edit Success!');
        } else {
            return redirect('itemdata')->with('error', 'Error Edit!');
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
        $data =  Item::where('id', '=', $id)->delete();
        if ($data) {
            return redirect('itemdata')->with('success', 'Type Item deleted!');;
        } else {
            return "error";
        }
    }
}
