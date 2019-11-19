<?php

namespace App\Http\Controllers;

use App\BookItemDetail;
use Illuminate\Http\Request;

class BookItemDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = '1';
        $data = BookItemDetail::where('bookitem_id', '=', $id)
            ->leftJoin('item', 'book_item_detail.bookitem_id', '=', 'item.id')
            ->select('item.item_name', 'book_item_detail.*')
            ->get();
        // return $data;
        return view('Borrower.bookitemdetail', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        // $id = '1';
        $data = BookItemDetail::where('bookitem_id', '=', $id)
            ->leftJoin('item', 'book_item_detail.bookitem_id', '=', 'item.id')
            ->select('item.item_name', 'book_item_detail.*')
            // ->get();
            ->paginate(5);
        // return $data;
        return view('Borrower.bookitemdetail', ['data' => $data]);
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
    public function update(Request $request, $id)
    {
        //
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
